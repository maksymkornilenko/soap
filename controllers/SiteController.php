<?php

namespace app\controllers;

use app\models\Callback;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\Cookie;

class SiteController extends Controller
{
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
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
//        $cookie_id = Yii::$app->request->cookies;
//        if(!isset($cookie_id['id']->value)){
//            $products = Products::find()->one();
//            $cookie_id=Yii::$app->response->cookies;
//            $cookie_id->add(new Cookie([
//                'name' => 'id',
//                'value' => $products['id'],
//                'expire' => time()+3600,
//            ]));
//        }else{
//            $cookie_id=$cookie_id['id']->value;
//        }
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

    public function actionCallback()
    {
        $callbackForm = new Callback();
        $callbackForm->name = Yii::$app->request->post('name');
        $callbackForm->phone = Yii::$app->request->post('phone');
        if ($callbackForm->save()) {
            Yii::$app->session->setFlash('successAnswer', "Спасибо, скоро мы с вами свяжемся");
        } else {
            Yii::$app->session->setFlash('errorAnswer', "Ошибка");
        }
        $this->layout = false;
        return $this->render('answer-callback');
    }
}
