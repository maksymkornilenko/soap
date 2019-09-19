<?php

namespace app\controllers;

use app\models\Areas;
use app\models\Callback;
use app\models\Clients;
use app\models\Orders;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout'],
//                'rules' => [
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
//    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $contacts= new Clients();
        $product= new Products();
        $order=new Orders();
        $callback= new Callback();
        $area=Areas::find()->all();
        $list=$product->getProducts();
        return $this->render('index',['client'=>$contacts,'product'=>$list,'order'=>$order,'areas'=>$area,'callback'=>$callback]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionOfficial()
    {
        $contacts= new Clients();
        $product= new Products();
        $order=new Orders();
        $callback= new Callback();
        $area=Areas::find()->all();
        $list=$product->getProducts();
        return $this->render('policy',['client'=>$contacts,'product'=>$list,'order'=>$order,'areas'=>$area,'callback'=>$callback]);
    }

    public function actionOferta()
    {
        $contacts= new Clients();
        $product= new Products();
        $order=new Orders();
        $callback= new Callback();
        $area=Areas::find()->all();
        $list=$product->getProducts();
        return $this->render('oferta',['client'=>$contacts,'product'=>$list,'order'=>$order,'areas'=>$area,'callback'=>$callback]);
    }

    public function actionCertification()
    {
        $contacts= new Clients();
        $product= new Products();
        $order=new Orders();
        $callback= new Callback();
        $area=Areas::find()->all();
        $list=$product->getProducts();
        return $this->render('certificate',['client'=>$contacts,'product'=>$list,'order'=>$order,'areas'=>$area,'callback'=>$callback]);
    }
    public function actionPay()
    {
        $contacts= new Clients();
        $product= new Products();
        $order=new Orders();
        $callback= new Callback();
        $area=Areas::find()->all();
        $list=$product->getProducts();
        return $this->render('pay',['client'=>$contacts,'product'=>$list,'order'=>$order,'areas'=>$area,'callback'=>$callback]);
    }
    public function actionCallback(){
        $callbackForm = new Callback();
        $callbackForm->name = Yii::$app->request->post('name');
        $callbackForm->phone = Yii::$app->request->post('phone');
        if ($callbackForm->save()) {
            Yii::$app->session->setFlash('successAnswer', "Спасибо, скоро мы с вами свяжемся");
        }else{
            Yii::$app->session->setFlash('errorAnswer', "Ошибка");
        }
        $this->layout = false;
        return $this->render('answer-callback');
    }
}
