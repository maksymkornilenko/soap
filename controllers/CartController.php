<?php


namespace app\controllers;


use app\models\Cities;
use app\models\Clients;
use app\models\Products;
use app\models\Warehouses;
use yii\base\Controller;
use Yii;
use app\models\Cart;
use app\models\LiqPay;
use app\models\Orders;
use app\models\SqlRequests;
use app\models\OrderItems;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\Cookie;
use yii\web\CookieCollection;

class CartController extends Controller
{
    public function actionAdd()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $cart = new Cart();
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['cart'][1])){
            $model= Products::find()->all();
            $cart->addToCart($model[0], 1);
        }else{
            $model= $session['cart'][1];
            $cart->addToCart($model, 1);
        }
        if (empty($model)) return false;
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }


    public function actionChange()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $cart = new Cart();
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['cart'][1])){
            $model= Products::find()->all();
            $cart->changeInCart($model[0], $count);
        }else{
            $model= $session['cart'][1];
            $cart->changeInCart($model, $count);
        }
        if (empty($model)) return false;
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionRemove()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $cart = new Cart();
        $session = Yii::$app->session;
        $session->open();
        if(!isset($session['cart'][1])){
            $model= Products::find()->all();
            $cart->removeFromCart($model[0], $count);
        }else{
            $model= $session['cart'][1];
            $cart->removeFromCart($model, $count);
        }
        if (empty($model)) return false;
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.count');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionArea()
    {
        $areasRef = (string)Yii::$app->request->get('value');
        $city = Cities::find()->where(['area_ref' => $areasRef])->all();
        foreach ($city as $cities) {
            $answer[] = '<option value="' . $cities['ref'] . '">' . $cities['description_ru'] . '</option>';
        }
        return Json::encode($answer);


    }

    public function actionCity()
    {
        $cityRef = (string)Yii::$app->request->get('city');
        $warehouse = Warehouses::find()->where(['city_ref'=>$cityRef])->all();
        foreach ($warehouse as $warehouses) {
            $answer[] = '<option value="' . $warehouses['ref'] . '">' . $warehouses['description_ru'] . '</option>';
        }
        return Json::encode($answer);
    }

    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        //$this->layout = false;
        return $this->renderPartial('cart-modal', ['session' => $session]);
    }

    public function actionDelete()
    {
        $id = (int)Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $model = new Cart();
        $model->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        $clientForm = new Clients();
        $requests = new SqlRequests();
        $clientForm->name = Yii::$app->request->post('name');
        $clientForm->phone = Yii::$app->request->post('phone');
        $clientForm->phone_raw = preg_replace('/[^0-9]/', '', $clientForm->phone);
        $clientForm->email = Yii::$app->request->post('mail');
        $contactForm->area = Yii::$app->request->post('area');
        $contactForm->city = Yii::$app->request->post('city');
        $contactForm->warehouse = Yii::$app->request->post('warehouse');
        $contactForm->count = $session['cart.count'];
        $contactForm->sum = $session['cart.sum'];
        $contactForm->pay = Yii::$app->request->post('pay');
        $sqlclients = $requests->showClient($clientForm->phone_raw);

        if (empty($sqlclients)) {
            if ($clientForm->save()) {
                $contactForm->client_id = $clientForm->id;
                if ($contactForm->save()) {
                    if($contactForm->pay=='liqpay'){
                        $liqpay = new LiqPay('sandbox_i68448549809', 'sandbox_t4cyKNZkq5kljGEQSKlURFrl6g8Ad0585aZQX3vF');
                        if (empty($session['cart'])) {
                            $html = $liqpay->cnb_form(array(
                                'action' => 'pay',
                                'amount' => '0',
                                'currency' => 'UAH',
                                'description' => 'empty',
                                'order_id' => $contactForm->id,
                                'version' => '3'
                            ));
                        } else {
                            $html = $liqpay->cnb_form(array(
                                'action' => 'pay',
                                'amount' => $session['cart.sum'],
                                'currency' => 'UAH',
                                'description' => 'Оплата по заказу №'.$contactForm->id,
                                'order_id' => 'order_id_1',
                                'version' => '3'
                            ));
                        }
                    }
                    $saveItems = new OrderItems();
                    $saveItems->saveOrderItems($session['cart'], $contactForm->id);
                    Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                    $session->remove('cart');
                    $session->remove('cart.count');
                    $session->remove('cart.sum');
                } else {
                    Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
                }
            }
        } else {
            $contactForm->client_id = $sqlclients['0']['id'];
            if ($contactForm->save()) {
                if($contactForm->pay=='liqpay'){
                    $liqpay = new LiqPay('sandbox_i68448549809', 'sandbox_t4cyKNZkq5kljGEQSKlURFrl6g8Ad0585aZQX3vF');
                    if (empty($session['cart'])) {
                        $html = $liqpay->cnb_form(array(
                            'action' => 'pay',
                            'amount' => '0',
                            'currency' => 'UAH',
                            'description' => 'empty',
                            'order_id' => $contactForm->id,
                            'version' => '3'
                        ));
                    } else {
                        $html = $liqpay->cnb_form(array(
                            'action' => 'pay',
                            'amount' => $session['cart.sum'],
                            'currency' => 'UAH',
                            'description' => 'Оплата по заказу №'.$contactForm->id,
                            'order_id' => $contactForm->id,
                            'version' => '3'
                        ));
                    }
                }
                $saveItems = new OrderItems();
                $saveItems->saveOrderItems($session['cart'], $contactForm->id);
                Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                $session->remove('cart');
                $session->remove('cart.count');
                $session->remove('cart.sum');
            } else {
                Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
            }
        }
        $this->layout = false;
        return $this->render('cart-modal',['liqpay'=>$html]);
    }

    public function actionRedirect()
    {
        return Yii::$app->response->redirect(Url::to('/'));
    }
}