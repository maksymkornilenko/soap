<?php


namespace app\controllers;


use app\models\Areas;
use app\models\Cities;
use app\models\Clients;
use app\models\Products;
use app\models\Warehouses;
use yii\base\Controller;
use Yii;
use app\models\LiqPay;
use app\models\Orders;
use app\models\OrderItems;
use yii\db\Query;
use yii\helpers\Json;
use yii\web\Cookie;
use yii\web\Response;

class CartController extends Controller
{
    public function actionAdd()
    {
        $count = 1;
        $id = (int)Yii::$app->request->get('id');
        $name = Yii::$app->request->get('name');
        $cook = Yii::$app->request->cookies;
        $price = 150;
        if (isset($cook['count']->value)) {
            $count += $cook['count']->value;
        }
        if ($count == 2) {
            $price = 125;
        } else if ($count >= 3) {
            $price = 100;
        }
        $sum = $price * $count;
        $this->setCookie('price', $price);
        $this->setCookie('id', $id);
        $this->setCookie('name', $name);
        $this->setCookie('count', $count);
        $this->setCookie('sum', $sum);
        return $this->renderPartial('cart-modal', ['name' => $name, 'count' => $count, 'price' => $price, 'id' => $id, 'sum' => $sum]);
    }

    public function actionSave()
    {
        $request = Yii::$app->request;
        $id = (int)$request->get('id');
        $count = (int)$request->get('count');
        $name = $request->get('name');
        $price = (int)$request->get('price');
        $count = !$count ? 1 : $count;
        $sum = $count * $price;
        $this->setCookie('id', $id);
        $this->setCookie('name', $name);
        $this->setCookie('count', $count);
        $this->setCookie('price', $price);
        return $this->renderPartial('cart-modal', [
            'name' => $name,
            'count' => $count,
            'price' => $price,
            'id' => $id,
            'sum' => $sum
        ]);
    }

    public function actionArea()
    {
        $out = ['results' => ['id' => '', 'text' => '']];
        $q = isset($_GET['q']) ? $_GET['q'] : null;
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if (!is_null($q)) {
            $areas = Areas::find()->asArray()->select(['`ref` AS `id`', '`description_ru` AS `text`'])->where(['like', 'description_ru', $q])->all();
            $out['results'] = array_values($areas);
        } elseif (!is_null($id)) {
            $areas = Areas::find()->where(['ref' => $id])->one();
            $out['results'] = ['id' => $id, 'text' => $areas->description_ru];
        }
        return Json::encode($out);
    }

    public function actionCity()
    {
        $answer = [];
        $areasRef = (string)Yii::$app->request->get('value');
        $city = Cities::find()->where(['area_ref' => $areasRef])->orderBy(['description_ru' => SORT_ASC])->all();
        foreach ($city as $cities) {
            $answer[] = '<option value="' . $cities['ref'] . '">' . $cities['description_ru'] . '</option>';
        }
        return Json::encode($answer);


    }

    public function actionWarehouse()
    {
        $answer = [];
        $cityRef = (string)Yii::$app->request->get('city');
        $warehouse = Warehouses::find()->where(['city_ref' => $cityRef])->all();
        foreach ($warehouse as $warehouses) {
            $answer[] = '<option value="' . $warehouses['ref'] . '">' . $warehouses['description_ru'] . '</option>';
        }
        return Json::encode($answer);
    }

    public function actionShow()
    {
        $cookies = Yii::$app->request->cookies;
        $price = 150;
        if ($cookies['count']->value == 2) {
            $price = 125;
        } elseif ($cookies['count']->value >= 3) {
            $price = 100;
        }
        $count = $cookies['count']->value;
        $sum = $price * $count;
        return $this->renderPartial('cart-modal', [
            'name' => $cookies['name']->value,
            'count' => $cookies['count']->value,
            'price' => $price,
            'id' => $cookies['id']->value,
            'sum' => $sum
        ]);
    }

    public function actionDelete()
    {
//        $id = (int)Yii::$app->request->get('id');
        $cook = $this->setEmptyCookie();
        return $this->renderPartial('cart-empty');
    }

    public function actionSend()
    {
        $request = Yii::$app->request;
        $html = '';
        $clientForm = new Clients();
        $clientForm->name = $request->post('name');
        $clientForm->phone = $request->post('phone');
        $clientForm->formatted_phone = preg_replace('/[^0-9]/', '', $clientForm->phone);
        $clientForm->email = $request->post('mail');
        $contactForm = new Orders();
        $contactForm->area = $request->post('area');
        $contactForm->city = $request->post('city');
        $contactForm->warehouse = $request->post('warehouse');
        $contactForm->count = (int)$request->post('count');
        $contactForm->pay = $request->post('pay');

        $product_id = $request->post('id');
        $sqlclients = Clients::find()->where(['formatted_phone' => $clientForm->formatted_phone])->all();
        $sqlproducts = Products::find()->where(['id' => $product_id])->all();
        $price = $this->checkSum($contactForm->count, $sqlproducts[0]['price']);
        if ($contactForm->count == 2) {
            $price = 125;
        } else if ($contactForm->count >= 3) {
            $price = 100;
        }
        $contactForm->sum = $price * $contactForm->count;
        if (empty($sqlclients)) {
            if ($clientForm->save()) {
                $contactForm->client_id = $clientForm->id;
                if ($contactForm->save()) {
                    if ($contactForm->pay == 'liqpay') {
                        $html = $this->setLiqpay($contactForm->id, $contactForm->sum);
                    }
                    $saveItems = new OrderItems();
                    $saveItems->saveOrderItems($sqlproducts, $contactForm->sum, $contactForm->count, $contactForm->id);
                    $res = $this->setAnswerSuccess($contactForm->id);
                    Yii::$app->session->setFlash('success', $res);
                    $this->sendToCRM($sqlproducts[0]['id'], $sqlproducts[0]['name'], $contactForm->id, $contactForm->count, $price, $contactForm->sum, $clientForm->name, $clientForm->formatted_phone, $clientForm->email, $contactForm->area, $contactForm->city, $contactForm->warehouse, $contactForm->pay);
                    $this->setEmptyCookie();
                } else {
                    $res = $this->setAnswerError();
                    Yii::$app->session->setFlash('error', $res);
                }
            }
        } else {
            $contactForm->client_id = $sqlclients['0']['id'];
            if ($contactForm->save()) {
                if ($contactForm->pay == 'liqpay') {
                    $html = $this->setLiqpay($contactForm->id, $contactForm->sum);
                }
                $saveItems = new OrderItems();
//                var_dump($sqlproducts);
//                die();
                $saveItems->saveOrderItems($sqlproducts, $contactForm->sum, $contactForm->count, $contactForm->id);
                $sendOrder = $this->sendToCRM($sqlproducts[0]['id'], $sqlproducts[0]['name'], $contactForm->id, $contactForm->count, $price, $contactForm->sum, $clientForm->name, $clientForm->formatted_phone, $clientForm->email, $contactForm->area, $contactForm->city, $contactForm->warehouse, $contactForm->pay);
                $res = $this->setAnswerSuccess($contactForm->id);
                Yii::$app->session->setFlash('success', $res);
                $this->setEmptyCookie();
            } else {
                $res = $this->setAnswerError();
                Yii::$app->session->setFlash('error', $res);
            }
        }
        $this->layout = false;
        return $this->render('cart-modal', ['liqpay' => $html]);
    }

    protected function setEmptyCookie()
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => 'id',
            'value' => '',
        ]));
        $cookies->add(new Cookie([
            'name' => 'name',
            'value' => '',
        ]));
        $cookies->add(new Cookie([
            'name' => 'count',
            'value' => 0,
        ]));
        $cookies->add(new Cookie([
            'name' => 'price',
            'value' => 0,
        ]));
        return $cookies;
    }

    protected function setLiqpay($id, $sum)
    {
        $liqpay = new LiqPay('sandbox_i68448549809', 'sandbox_t4cyKNZkq5kljGEQSKlURFrl6g8Ad0585aZQX3vF');
        $html = $liqpay->cnb_form(array(
            'action' => 'pay',
            'amount' => $sum,
            'currency' => 'UAH',
            'description' => 'Оплата по заказу №' . $id,
            'order_id' => 'order_id_1',
            'version' => '3'
        ));
        return $html;
    }

    protected function checkSum($count, $price)
    {
        if ($count <= 0) {
            $sum = false;
        } elseif ($count == 1) {
            $sum = $count * $price;
        } elseif ($count == 2) {
            $sum = $count * 125;
        } elseif ($count >= 3) {
            $sum = $count * 100;
        }
        return $sum;
    }

    protected function setCookie($name, $value)
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => $name,
            'value' => $value,
        ]));
    }

    protected function setAnswerSuccess($id)
    {
        return $res = "Ваш заказ номер №$id получен, менеджер в ближайшее время с вами свяжется";
    }

    protected function setAnswerError()
    {
        return $res = 'Ваш заказ не получен';
    }

    protected function sendToCRM($product_id, $name, $order_id, $count, $price, $sum,$clientName, $clientPhone, $clientEmail, $area, $city, $warehouse, $payment)
    {
        $params = [
            'product_id' => $product_id,
            'name' => $name,
            'order_id' => $order_id,
            'count' => $count,
            'price' => $price,
            'sum' => $sum,
            'client_name' => $clientName,
            'client_phone' => $clientPhone,
            'client_email' => $clientEmail,
            'area' => $area,
            'city' => $city,
            'warehouse' => $warehouse,
            'payment' => $payment,
        ];
        $answer=$this->sendData($params);
        if($answer=='Успех'){
            $answer=Orders::findOne($order_id);
            $answer->updateAttributes(['status'=>1]);
        }
    }

    protected function sendData($params)
    {
        $url = 'https://crm.maldivesdreams.com.ua/tilda/webhook/test-soap';
        $query = $url . '?' . http_build_query($params);
        $answerJSON = file_get_contents($query);

        if ($answerJSON) {
            $answer = Json::decode($answerJSON, true);

            if ($answer['success'] == true) {
                // Сохранять в базу успешный статус отправки Webhook
                return 'Успех';
            } else {
                // Статус остается неотправленным
                return $answer['errors'];
            }
        }
        return 'Ответ не был получен';
    }

}