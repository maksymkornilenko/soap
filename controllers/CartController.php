<?php


namespace app\controllers;


use app\models\Cities;
use app\models\Clients;
use app\models\Products;
use app\models\Warehouses;
use yii\base\Controller;
use Yii;
use app\models\LiqPay;
use app\models\Orders;
use app\models\OrderItems;
use yii\helpers\Json;
use yii\web\Cookie;

class CartController extends Controller
{
    public function actionAdd()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $name = Yii::$app->request->get('name');
        $count = !$count ? 1 : $count;
        $cook = Yii::$app->request->cookies;
        if (isset($cook['count']->value)) {
            $check = $cook['count']->value;
        } else {
            $check = 0;
        }
        $check += $count;
        $id = $this->setCookie('id', $id);
        $name = $this->setCookie('name', $name);
        $check = $this->setCookie('count', $check);
        if ($check == 1) {
            $price = 150;
        } else if ($check == 2) {
            $price = 125;
        } else if ($check >= 3) {
            $price = 100;
        }
        $price = $this->setCookie('price', $price);
        $sum = $price * $check;
        $this->setCookie('sum', $sum);
        $this->layout = false;
        return $this->render('cart-modal', ['name' => $name, 'count' => $check, 'price' => $price, 'id' => $id, 'sum' => $sum]);
    }

    protected function setCookie($name, $value)
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => $name,
            'value' => $value,
        ]));
        return $cookies[$name]->value;
    }

    public function actionSave()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $name = (int)Yii::$app->request->get('name');
        $price = (int)Yii::$app->request->get('price');
        $sum = (int)Yii::$app->request->get('sum');
        $count = !$count ? 1 : $count;
        $id = $this->setCookie('id', $id);
        $name = $this->setCookie('name', $name);
        $checkCount = $this->setCookie('count', $count);
        $checkPrice = $this->setCookie('price', $price);
        $checkSum = $this->setCookie('price', $sum);
        $this->layout = false;
        return $this->render('cart-modal', ['name' => $name, 'count' => $checkCount, 'price' => $checkPrice, 'id' => $id, 'sum' => $checkSum]);
    }

    public function actionClear()
    {
        $cook = $this->setEmptyCookie();
        $this->layout = false;
        return $this->render('cart-modal', ['name' => $cook['name']->value, 'count' => $cook['count']->value, 'price' => $cook['price']->value, 'id' => $cook['id']->value, 'sum' => $cook['sum']->value]);
    }

    public function actionArea()
    {
        $answer = [];
        $areasRef = (string)Yii::$app->request->get('value');
        $city = Cities::find()->where(['area_ref' => $areasRef])->orderBy(['description_ru' => SORT_ASC])->all();
        foreach ($city as $cities) {
            $answer[] = '<option value="' . $cities['ref'] . '">' . $cities['description_ru'] . '</option>';
        }
        return Json::encode($answer);


    }

    public function actionCity()
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
        $price = '';
        if ($cookies['count']->value == 1) {
            $price = $cookies['price']->value;
        } elseif ($cookies['count']->value == 2) {
            $price = 125;
        } elseif ($cookies['count']->value >= 3) {
            $price = 100;
        }
        //$this->layout = false;
        return $this->renderPartial('cart-modal', ['name' => $cookies['name']->value, 'count' => $cookies['count']->value, 'price' => $price, 'id' => $cookies['id']->value, 'sum' => $cookies['sum']->value]);
    }

    public function actionDelete()
    {
        $id = (int)Yii::$app->request->get('id');
        $cook = $this->setEmptyCookie();
        $this->layout = false;
        return $this->render('cart-modal', ['name' => $cook['name']->value, 'count' => $cook['count']->value, 'price' => $cook['price']->value, 'id' => $cook['id']->value, 'sum' => $cook['sum']->value]);
    }

    public function actionView()
    {
        $contactForm = new Orders();
        $clientForm = new Clients();
        $clientForm->name = Yii::$app->request->post('name');
        $clientForm->phone = Yii::$app->request->post('phone');
        $clientForm->phone_raw = preg_replace('/[^0-9]/', '', $clientForm->phone);
        $clientForm->email = Yii::$app->request->post('mail');
        $contactForm->area = Yii::$app->request->post('area');
        $contactForm->city = Yii::$app->request->post('city');
        $contactForm->warehouse = Yii::$app->request->post('warehouse');
        $contactForm->count = (int)Yii::$app->request->post('count');
        $contactForm->pay = Yii::$app->request->post('pay');
        $product_id = Yii::$app->request->post('id');
        $sqlclients = Clients::find()->where(['phone_raw' => $clientForm->phone_raw])->all();
        $sqlproducts = Products::find()->where(['id' => $product_id])->all();
        $check=0;
        if ($contactForm->count == 1) {
            $check = $this->checkSum($contactForm->count, $sqlproducts[0]['price']);
        } else if ($contactForm->count == 2) {
            $check = 125;
        } else if ($contactForm->count >= 3) {
            $check = 100;
        }
        $contactForm->sum = $check * $contactForm->count;
        if (empty($sqlclients)) {
            if ($clientForm->save()) {
                $contactForm->client_id = $clientForm->id;
                if ($contactForm->save()) {
                    if ($contactForm->pay == 'liqpay') {
                        $html = $this->setLiqpay($contactForm->id, $contactForm->sum);
                    }
                    $saveItems = new OrderItems();
                    $saveItems->saveOrderItems($sqlproducts, $contactForm->sum, $contactForm->count, $contactForm->id);
                    Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                    $this->setEmptyCookie();
                } else {
                    Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
                }
            }
        } else {
            $contactForm->client_id = $sqlclients['0']['id'];
            if ($contactForm->save()) {
                if ($contactForm->pay == 'liqpay') {
                    $html = $this->setLiqpay($contactForm->id);
                }
                $saveItems = new OrderItems();
                $saveItems->saveOrderItems($sqlproducts, $contactForm->sum, $contactForm->count, $contactForm->id);
                Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                $this->setEmptyCookie();
            } else {
                Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
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
        $cookies->add(new Cookie([
            'name' => 'sum',
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

}