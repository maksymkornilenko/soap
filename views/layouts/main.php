<?php

/* @var $this \yii\web\View */

/* @var $content string */


use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use app\models\Products;
use app\models\Clients;
use app\models\Orders;
use app\models\Areas;
use app\models\Callback;
use yii\web\Cookie;
use yii\web\CookieCollection;
use yii\web\JsExpression;
$client = new Clients();
$orders = new Orders();
$callback= new Callback();
$cookies = Yii::$app->request->cookies;
if(!isset($cookies['id']->value)){
    $products = Products::find()->one();
    $cookie_id=Yii::$app->response->cookies;
    $cookie_id->add(new Cookie([
        'name' => 'id',
        'value' => $products['id'],
        'expire' => time()+3600,
    ]));
}else{
    $cookie_id=(int)$cookies['id']->value;
}
$areas = Areas::find()->all();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--metatextblock-->
    <title>Натуральное кокосовое мыло Maldives Dreams</title>
    <!-- Assets -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
NavBar::begin([
    'brandLabel' => '<img class="brand" src="/image/labelbrand.png";>',
    'brandUrl' => ['/'],
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Описание', 'options' => ['class' => 'nav-label close-nav'], 'url' => ['/#opisanie']],
        ['label' => 'Гарантия', 'options' => ['class' => 'nav-label close-nav'], 'url' => ['/#garant']],
        ['label' => 'Безопасность', 'options' => ['class' => 'nav-label close-nav'], 'url' => ['/#security']],
        ['label' => 'Купить', 'options' => ['class' => 'buy nav-label close-nav', 'data-id' => $cookie_id]],
        ['label' => '+38 067 245-20-10', 'options' => ['class' => 'tel-1 close-nav'], 'url' => 'https://wa.me/380672452010', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-1" href="{url}">{label}</a>'],
        ['label' => '+38 067 404-66-01', 'options' => ['class' => 'tel-2 close-nav'], 'url' => 'https://wa.me/380674046601', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-2" href="{url}">{label}</a>'],
        ['label' => 'Заказать звонок', 'options' => ['class' => 'callback close-nav']],
    ],
]); ?>
<a href="https://t.me/maldivesdreams" class="icon-nav telegram close-nav" target="_blank"><img src="/image/telegram.png"/></a>
<a href="https://wa.me/380672452010" class="icon-nav whatsapp close-nav" target="_blank"><img src="/image/whatsapp.png"/></a>
<a href="viber://chat?number=+38 067 245-20-10" class="icon-nav viber close-nav" target="_blank"><img src="/image/viber.png"/></a>
<a href="https://www.instagram.com/maldives.dreams" class="icon-nav instagram close-nav" target="_blank"><img src="/image/instagram.png"/></a>
<?php NavBar::end();
?>
<?php if (!empty($cookies['count']->value)): ?>
    <div class="t706__carticon t706__carticon_showed">
        <div class="t706__carticon-text t-name t-name_xs">&nbsp;<?php echo $cookies['sum'] ?>&nbsp;грн.
        </div>
        <div class="t706__carticon-wrapper">
            <div class="t706__carticon-imgwrap">
                <img src="/image/cart.png"/>
            </div>
            <div class="t706__carticon-counter"><?php echo $cookies['count'] ?></div>
        </div>
    </div>
<?php else: ?>
    <div class="t706__carticon t706__carticon_showed">
        <div class="t706__carticon-text t-name t-name_xs">Ваша корзина пуста</div>
        <div class="t706__carticon-wrapper">
            <div class="t706__carticon-imgwrap">
                <img src="/image/cart.png"/>
            </div>
            <div class="t706__carticon-counter">0</div>
        </div>
    </div>
<?php endif; ?>
<?= $content ?>
<!--footer-->
<div id="t-footer" class="t-records">
    <div id="rec124335292" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier"></div>
                <div class="t396__filter"></div>
                <div class='t396__elem tn-elem' data-elem-id='1475147390128'>
                    <div class='tn-atom'>КУПИТЬ</div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475147589474'>
                    <div class='tn-atom'>О НАС</div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475147601290'>
                    <div class='tn-atom'>
                        ООО "Менделеев Лаб"<br>
                        51200, Украина,
                        Днепропетровская область, г.Новомосковск, ул. Сучкова, д.115 А
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475147675390'>
                    <div class='tn-atom'>ДОКУМЕНТАЦИЯ</div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475147678114'>
                    <a class='tn-atom' href="/site/certification">Сертификаты качества</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475160083840'>
                    <a class='tn-atom' href="/">
                        <img class='tn-atom__img t-img' src='/image/icon-logo.png'>
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988702'>
                    <a class='tn-atom' href="viber://chat?number=+38 067 245-20-10" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/viber.png'>
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988709'>
                    <a class='tn-atom' href="https://www.instagram.com/maldives.dreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/instagram.png'>
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988715'>
                    <a class='tn-atom' href="https://tlgg.ru/maldivesdreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/telegram.png'>
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988721'>
                    <a class='tn-atom' href="https://wa.me/38 067 245-20-10" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/whatsapp.png'>
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562141820641'>
                    <div class='tn-atom'>Maldives dreams 2019 Все права защищены</div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562141867742'>
                    <a class='tn-atom' href="mailto:maldives.dreamstm@gmail.com">maldives.dreamstm@gmail.com</a>
                </div>
                <div class='t396__elem tn-elem ' data-elem-id='1562142018674'>
                    <a class='tn-atom' href="/site/official">
                        Политика
                        конфиденциальности
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562142042578'>
                    <a class='tn-atom' href="/site/pay">Правила оплаты, доставки и возврата</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562142714866'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/visa.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562142828468'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/mastercard.png'>
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562246055382'>
                    <a class='tn-atom' href="/site/oferta">Договор публичной оферты</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1564484950188'>
                    <a class='tn-atom' href="tel:+38 067 245 2010">
                        +38 067 245-20-10
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566893463283'>
                    <a class='tn-atom' href="tel:+38 067 404-66-01">
                        + 38 067 404-66-01
                    </a>
                </div>
            </div>
        </div>
        <!-- /T396 -->
    </div>
    <div id="rec122839056" class="r t-rec">
        <div class="t270"></div>
    </div>
</div>
<!--/footer-->
<?php Modal::begin([
    'id' => 'cart',
    'size' => 'model-lg',
    'options' => [
        'tabindex' => false
    ]]); ?>
<div class="modal-body2">
    <h3>
        <p>Корзина пуста</p>
    </h3>
</div>
<div class="t706__cartwin-bottom">
    <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm">
        <?php $form = ActiveForm::begin(['id' => '1contact-form', 'options' => ['name' => 'calculator1']]); ?>
        <?= $form->field($client, 'name') ?>
        <p class="error-name"></p>
        <?= $form->field($client, 'phone') ?>
        <p class="error-phone"></p>
        <?= $form->field($client, 'email') ?>
        <p class="error-email"></p>
        <?php echo $form->field($orders, 'area')->widget(Select2::classname(), [
            'language' => 'ru',
            'options' => ['placeholder' => 'Выберите область'],
            'pluginOptions' => [
                'allowClear' => true,
                'minimumInputLength' => 2,
                'language' => [
                    'errorLoading' => new JsExpression("function () { return 'Загрузка...'; }"),
                ],
                'ajax' => [
                    'url' => '/cart/area',
                    'dataType' => 'json',
                    'data' => new JsExpression('function(params) { return {q:params.term}; }')
                ],
                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                'templateResult' => new JsExpression('function(area) { return area.text; }'),
                'templateSelection' => new JsExpression('function (area) { return area.text; }'),
            ],
        ]); ?>
        <?= $form->field($orders, 'city')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  город ...'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>
        <?= $form->field($orders, 'warehouse')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  отделение Новой почты ...'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]);?>
        <?php ActiveForm::end() ?>

        <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
            <a href="/site/official">политикой конфиденциальности.</a>
        </div>
        <div class="t-input-group t-input-group_pm">
            <div class="t-input-title t-descr t-descr_md">Способ оплаты</div>
            <div class="t-input-block">
                <div class="t-radio__wrapper t-radio__wrapper-payment">
                    <label class="t-radio__control t-text t-text_xs">
                        <input type="radio" name="paymentsystem" value="cash"
                               class="t-radio t-radio_payment" data-payment-variant-system="cash" checked>
                        <div class="t-radio__indicator">

                        </div>
                        Наличными при получении (+комиссия Новой Почты 20грн.+2% от суммы покупки)
                    </label>
                    <label class="t-radio__control t-text t-text_xs">
                        <input type="radio" name="paymentsystem" value="liqpay" class="t-radio t-radio_payment"
                               data-payment-variant-system="liqpay">
                        <div class="t-radio__indicator">

                        </div>
                        Картой Visa, Mastercard, Privat24 через LiqPay без комиссии </label>
                </div>
            </div>
        </div>
        <div class="error-send"></div>
        <a href="/site/view" class="btn btn-success sendOrder">Оформить заказ</a>
        <button type="button" class="btn btn-danger clearCart">Очистить корзину</button>
    </div>
</div>
<?php Modal::end();
?>
<?php
Modal::begin([
    'header' => '<div class="t702__text-wrapper t-align_center">
                <div class="t702__title t-title t-title_xxs">
                    Введите номер телефона, мы перезвоним как можно скорее.
                </div>
            </div>',
    'options' => ['id' => 'callback-modal'],
    'footer' => '',
]);
?>
<div class="t702__wrapper">
    <?php $call = ActiveForm::begin(['id' => 'callback-form']); ?>
    <?= $call->field($callback, 'name') ?>
    <?= $call->field($callback, 'phone') ?>
    <?php ActiveForm::end(); ?>
    <div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая кнопку "отправить", я соглашаюсь
        с
        <a href="/site/official">политикой конфиденциальности.</a>
    </div>

</div>
<div class="button-callback">
    <a href="/site/callback" class="btn btn-success sendCallbackForm">Отправить</a>
</div>
<?php Modal::end(); ?>
<?php Modal::begin([
    'header' => '',
    'options' => ['id' => 'answer-callback-modal'],
    'footer' => '',
]);
?>
<div class="modal-bodycallback">
</div>
<div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая кнопку "отправить", я соглашаюсь с
    <a href="http://sale.maldivesdreams.com.ua/official">политикой конфиденциальности.</a>
</div>
<?php Modal::end(); ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
