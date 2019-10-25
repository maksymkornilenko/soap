<?php

/* @var $this \yii\web\View */

/* @var $content string */


use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use app\models\Products;
use yii\web\Cookie;
use yii\web\JsExpression;
use app\models\ClientForm;
use app\models\OrderForm;
use app\models\CallbackForm;

$client = new ClientForm();
$orders = new OrderForm();
$callback = new CallbackForm();
$data = Yii::$app->controller->data;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--metatextblock-->
    <title>Натуральное кокосовое мыло Maldives Dreams</title>
    <!-- Assets -->
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
NavBar::begin([
    'brandLabel' => '<img class="brand" src="/image/labelbrand.png" alt="label">',
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
        ['label' => 'Купить', 'options' => ['class' => 'buy nav-label close-nav', 'data-id' => $data['productId']]],
        ['label' => '+38 067 245-20-10', 'options' => ['class' => 'tel-1 close-nav'], 'url' => 'https://wa.me/380672452010', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-1" href="{url}">{label}</a>'],
        ['label' => '+38 067 404-66-01', 'options' => ['class' => 'tel-2 close-nav'], 'url' => 'https://wa.me/380674046601', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-2" href="{url}">{label}</a>'],
        ['label' => 'Заказать звонок', 'options' => ['class' => 'callback close-nav']],
    ],
]); ?>
<a href="https://t.me/maldivesdreams" class="icon-nav telegram close-nav" target="_blank"><img
            src="/image/telegram.png" alt="telegram"/></a>
<a href="https://wa.me/380672452010" class="icon-nav whatsapp close-nav" target="_blank"><img
            src="/image/whatsapp.png" alt="whatsapp"/></a>
<a href="viber://chat?number=+380672452010" class="icon-nav viber close-nav" target="_blank"><img
            src="/image/viber.png" alt="viber"/></a>
<a href="https://www.instagram.com/maldives.dreams" class="icon-nav instagram close-nav" target="_blank"><img
            src="/image/instagram.png" alt="instagram"/></a>
<?php NavBar::end();
?>
<?php if (!empty($data['count']) || $data['count'] != null || $data['count'] != 0) { ?>
    <div class="t706__carticon t706__carticon_showed">
        <div class="t706__carticon-text t-name t-name_xs">&nbsp;<?= $data['sum'] ?>&nbsp;грн.
        </div>
        <div class="t706__carticon-wrapper">
            <div class="t706__carticon-imgwrap">
                <img src="/image/cart.png" alt="cart"/>
            </div>
            <div class="t706__carticon-counter"><?= $data['count'] ?></div>
        </div>
    </div>
<?php } else { ?>
    <div class="t706__carticon t706__carticon_showed">
        <div class="t706__carticon-text t-name t-name_xs">Ваша корзина пуста</div>
        <div class="t706__carticon-wrapper">
            <div class="t706__carticon-imgwrap">
                <img src="/image/cart.png" alt="cart"/>
            </div>
            <div class="t706__carticon-counter">0</div>
        </div>
    </div>
<?php } ?>
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
                        <img class='tn-atom__img t-img' src='/image/icon-logo.png' alt="logo">
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988702'>
                    <a class='tn-atom' href="viber://chat?number=+380672452010" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/viber.png' alt="viber">
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988709'>
                    <a class='tn-atom' href="https://www.instagram.com/maldives.dreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/instagram.png' alt="instagram">
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988715'>
                    <a class='tn-atom' href="https://tlgg.ru/maldivesdreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/telegram.png' alt="telegram">
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562140988721'>
                    <a class='tn-atom' href="https://wa.me/380672452010" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/whatsapp.png' alt="whatsapp">
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
                        <img class='tn-atom__img t-img' src='/image/visa.png' alt="visa">
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562142828468'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/image/mastercard.png' alt="mastercard">
                    </div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1562246055382'>
                    <a class='tn-atom' href="/site/oferta">Договор публичной оферты</a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1564484950188'>
                    <a class='tn-atom' href="tel:+380672452010">
                        + 38 067 245-20-10
                    </a>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1566893463283'>
                    <a class='tn-atom' href="tel:+380674046601">
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
        Корзина пуста
    </h3>
</div>
<div class="t706__cartwin-bottom">
    <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm">
        <?php $form = ActiveForm::begin([
            'id' => '1contact-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'options' => ['name' => 'calculator1']
        ]); ?>
        <?= $form->field($client, 'name') ?>
        <?= $form->field($client, 'phone') ?>
        <?= $form->field($client, 'email') ?>
        <?php echo $form->field($orders, 'area')->widget(Select2::classname(), [
            'language' => 'ru',
            'pluginOptions' => [
                'placeholder' => 'Выберите область',
                'allowClear' => true,
                'initialize' => true,
                'minimumInputLength' => 1,
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
        <p class="error-area"></p>
        <?= $form->field($orders, 'city')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  город ...'],
            'pluginOptions' => [
                'initialize' => true,
                'allowClear' => true,
            ],
        ]); ?>
        <p class="error-city"></p>
        <?= $form->field($orders, 'warehouse')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  отделение Новой почты ...'],
            'pluginOptions' => [
                'initialize' => true,
                'allowClear' => true,
            ],
        ]); ?>
        <p class="error-warehouse"></p>
        <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
            <a href="/site/official">политикой конфиденциальности.</a>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-success sendOrder', 'name' => 'login-button']) ?>
            <button type="button" class="btn btn-danger clearCart">Очистить корзину</button>
        </div>
        <?php ActiveForm::end() ?>
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
    <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-success sendCallbackForm', 'name' => 'login-button']) ?>
    <?php ActiveForm::end(); ?>
    <div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая кнопку "отправить", я соглашаюсь
        с
        <a href="/site/official">политикой конфиденциальности.</a>
    </div>

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
