<?php

namespace app\controllers;

use app\models\Callback;
use app\models\EvoExampleClient;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Cookie;

class SiteController extends Controller
{

    public $data = [];

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        $cookies = Yii::$app->request->cookies;
        $count=0;
        $sum=0;
        $name='';
//        setcookie('id','',-1234);
//        setcookie('price','',-1234);
//        setcookie('count','',-1234);
//        setcookie('sum','',-1234);
//        setcookie('name','',-1234);
//        var_dump($cookies);
//        die();
        if (isset($cookies['id']->value)) {
            $productId = (int)$cookies['id']->value;
        }else{
            $products = Products::find()->one();
            $cookieResponse = Yii::$app->response->cookies;
            $cookieResponse->add(new Cookie([
                'name' => 'id',
                'value' => $products['id'],
                'expire' => time() + 3600,
            ]));
            $productId = $products['id'];
        }
        if(isset($cookies['count']->value)){
            $count=$cookies['count']->value;
        }
        if(isset($cookies['sum']->value)){
            $sum=$cookies['sum']->value;
        }
        if(isset($cookies['name']->value)){
            $name=$cookies['name']->value;
        }
        // Все полученные значения заносим в глобальное свойтво 'content', доступное из View и из Layout
        $this->data = [
            'productId' => $productId,
            'count' => $count,
            'sum' => $sum,
            'name' => $name,
        ];
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOfficial()
    {
        return $this->render('official');
    }

    public function actionOferta()
    {
        return $this->render('oferta');
    }

    public function actionCertification()
    {
        return $this->render('certificate');
    }

    public function actionPay()
    {
        return $this->render('pay');
    }
    public function actionError(){
        $exception = Yii::$app->response->statusCode;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
    public function actionCallback()
    {
        if(Yii::$app->request->isAjax){
            $callbackForm = new Callback();
            $callbackForm->name = Yii::$app->request->post('name');
            $callbackForm->phone = Yii::$app->request->post('phone');
            $callbackForm->formatted_phone = preg_replace('/[^0-9]/', '', $callbackForm->phone);
            if ($callbackForm->save()) {
                Yii::$app->session->setFlash('successAnswer', "Спасибо, скоро мы с вами свяжемся");
            } else {
                Yii::$app->session->setFlash('errorAnswer', "Ошибка");
            }
            $this->layout = false;
            return $this->render('answer-callback');
        }else{
            Yii::$app->response->setStatusCode(404);
            return $this->setError();
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
