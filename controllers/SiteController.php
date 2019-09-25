<?php

namespace app\controllers;

use app\models\Callback;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

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
        $products = Products::find()->one();
        return $this->render('index', [
            'products' => $products,
        ]);
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
