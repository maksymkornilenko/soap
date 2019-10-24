<?php


namespace app\controllers;


use app\models\Areas;
use app\models\Cities;
use app\models\Clients;
use app\models\ext\ExtOrderItems;
use app\models\ext\ExtOrders;
use app\models\Products;
use app\models\Warehouses;
use yii\base\Controller;
use Yii;
use app\models\LiqPay;
use app\models\Orders;
use yii\helpers\Json;
use yii\web\Cookie;

class CartController extends Controller
{
    public function actionAdd()
    {
        if (Yii::$app->request->isAjax) {
            $count = 1;
            $id = (int)Yii::$app->request->post('id');
            $name = Yii::$app->request->post('name');
            $cook = Yii::$app->request->cookies;
            if (isset($cook['count']->value)) {
                $count += $cook['count']->value;
            }
            $price = ExtOrders::factory()->getPriceByCount($count);
            $sum = $price * $count;
            $this->setCookie('price', $price);
            $this->setCookie('id', $id);
            $this->setCookie('name', $name);
            $this->setCookie('count', $count);
            $this->setCookie('sum', $sum);
            return $this->renderPartial('cart-modal', ['name' => $name, 'count' => $count, 'price' => $price, 'id' => $id, 'sum' => $sum]);
        } else {
            return $this->setError();
        }
    }

    public function actionSave()
    {
        if (Yii::$app->request->isAjax) {
            $request = Yii::$app->request;
            $id = (int)$request->post('id');
            $count = (int)$request->post('count');
            $name = $request->post('name');
            $price = ExtOrders::factory()->getPriceByCount($count);
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
        } else {
            return $this->setError();
        }

    }

    public function actionArea()
    {
        if (Yii::$app->request->isAjax) {
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
        } else {
            return $this->setError();
        }
    }

    public function actionCity()
    {
        if (Yii::$app->request->isAjax) {
            $answer = [];
            $areasRef = (string)Yii::$app->request->get('value');
            $city = Cities::find()->where(['area_ref' => $areasRef])->orderBy(['description_ru' => SORT_ASC])->all();
            foreach ($city as $cities) {
                $answer[] = '<option value="' . $cities['ref'] . '">' . $cities['description_ru'] . '</option>';
            }
            return Json::encode($answer);
        } else {
            return $this->setError();
        }
    }

    public function actionWarehouse()
    {
        if (Yii::$app->request->isAjax) {
            $answer = [];
            $cityRef = (string)Yii::$app->request->get('city');
            $warehouse = Warehouses::find()->where(['city_ref' => $cityRef])->all();
            foreach ($warehouse as $warehouses) {
                $answer[] = '<option value="' . $warehouses['ref'] . '" data-number="' . $warehouses['number'] . '">' . $warehouses['description_ru'] . '</option>';
            }
            return Json::encode($answer);
        } else {
            return $this->setError();
        }
    }

    public function actionShow()
    {
        if (Yii::$app->request->isAjax) {
            $cookies = Yii::$app->request->cookies;
            $count = $cookies['count']->value;
            $price = ExtOrders::factory()->getPriceByCount($count);
            $sum = $price * $count;
            return $this->renderPartial('cart-modal', [
                'name' => $cookies['name']->value,
                'count' => $count,
                'price' => $price,
                'id' => $cookies['id']->value,
                'sum' => $sum
            ]);
        } else {
            return $this->setError();
        }
    }

    public function actionDelete()
    {
        if (Yii::$app->request->isAjax) {
            $this->setEmptyCookie();
            return $this->renderPartial('cart-empty');
        } else {
            return $this->setError();
        }

    }

    public function actionSend()
    {
        if (!Yii::$app->request->isAjax) {
            return $this->setError();
        } else {
            $request = Yii::$app->request->post();
            $liqpayForm = '';
            $order = new Orders();
            $order->area = $request['area'];
            $order->city = $request['city'];
            $order->warehouse = $request['warehouse'];
            $order->count = (int)$request['count'];
            $order->pay = 'cash';
            $formattedPhone = preg_replace('/[^0-9]/', '', $request['phone']);
            $client = Clients::find()->where(['formatted_phone' => $formattedPhone])->one();
            if ($client) {
                $order->client_id = $client->id;
            } else {
                $client = new Clients();
                $client->name = $request['name'];
                $client->phone = $request['phone'];
                $client->formatted_phone = $formattedPhone;
                $client->email = $request['mail'];
                if ($client->save()) {
                    $order->client_id = $client->id;
                }
            }
            $productId = $request['id'];
            $product = Products::find()->asArray()->where(['id' => $productId])->one();
            $price = ExtOrders::factory()->getPriceByCount($order->count);
            $order->sum = $price * $order->count;
            if ($order->save()) {
//            if ($order->pay == 'liqpay') {
//                $liqpayForm = $this->setLiqpay($order->id, $order->sum);
//            }
                ExtOrderItems::factory()->saveOrderItems($product, $order->sum, $order->count, $order->id);
                Yii::$app->session->setFlash('success', ExtOrders::ANSWER_SUCCESS);
                $params = [
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'product_name' => $product['name'],
                    'product_price' => $price,
                    'count' => $order->count,
                    'sum' => $order->sum,
                    'client_id' => $client->id,
                    'client_name' => $client->name,
                    'client_phone' => $client->formatted_phone,
                    'client_email' => $client->email,
                    'delivery_area' => $order->area,
                    'delivery_area_ref' => $request['areaRef'],
                    'delivery_city' => $order->city,
                    'delivery_city_ref' => $request['cityRef'],
                    'delivery_warehouse' => $order->warehouse,
                    'delivery_warehouse_ref' => $request['warehouseRef'],
                    'delivery_warehouse_number' => $request['number'],
                    'payment' => $order->pay,
                ];
//                $this->sendData($params);TODO Узнать на счёт webhook
                $this->setEmptyCookie();
            } else {
                Yii::$app->session->setFlash('error', ExtOrders::ANSWER_ERROR);
            }
            return $this->renderPartial('cart-modal', ['liqpayForm' => $liqpayForm]);
        }
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
        $liqpay = new LiqPay();
        $html = $liqpay->cnb_form(array(
            'action' => 'pay',
            'amount' => $sum,
            'currency' => 'UAH',
            'description' => 'Оплата по заказу №' . $id,
            'order_id' => $id,
            'version' => '3'
        ));
        return $html;
    }

    protected function setCookie($name, $value)
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name' => $name,
            'value' => $value,
        ]));
    }

    protected function sendData($params)
    {
        $content = http_build_query($params);
        $context = stream_context_create([
                'http' => [
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
                        "Content-Length: " . strlen($content) . "\r\n" .
                        "User-Agent:MyAgent/1.0\r\n",
                    'method' => 'POST',
                    'content' => $content
                ]
            ]
        );
        $url = 'https://crm.maldivesdreams.com.ua/tilda/webhook/test-soap';
        $answerJSON = file_get_contents($url, null, $context);
        if ($answerJSON) {
            $answer = Json::decode($answerJSON, true);
            if ($answer['success'] == true) {
                $order = Orders::findOne($params['order_id']);
                $order->updateAttributes(['status' => 1]);
            }
        }
    }
    protected function setError(){
        Yii::$app->response->setStatusCode(404);
        $exception = Yii::$app->response->statusCode;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
}