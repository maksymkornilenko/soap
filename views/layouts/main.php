<?php

/* @var $this \yii\web\View */

/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use app\models\Products;

$products = Products::find()->one();
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
        ['label' => 'Купить', 'options' => ['class' => 'buy nav-label close-nav', 'data-id' => $products['id']]],
        ['label' => '+38 067 245-20-10', 'options' => ['class' => 'tel-1 close-nav'], 'url' => 'https://wa.me/380672452010', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-1" href="{url}">{label}</a>'],
        ['label' => '+38 067 404-66-01', 'options' => ['class' => 'tel-2 close-nav'], 'url' => 'https://wa.me/380674046601', 'linkOptions' => ['target' => '_blank'], 'template' => '<a class="href-tel-2" href="{url}">{label}</a>'],
        ['label' => 'Заказать звонок', 'options' => ['class' => 'callback close-nav']],
    ],
]); ?>
<a href="https://t.me/maldivesdreams" class="icon-nav telegram close-nav" target="_blank"><img
            src="/image/telegram.png"/></a>
<a href="https://wa.me/380672452010" class="icon-nav whatsapp close-nav" target="_blank"><img
            src="/image/whatsapp.png"/></a>
<a href="viber://chat?number=+38 067 245-20-10" class="icon-nav viber close-nav" target="_blank"><img
            src="/image/viber.png"/></a>
<a href="https://www.instagram.com/maldives.dreams" class="icon-nav instagram close-nav" target="_blank"><img
            src="/image/instagram.png"/></a>
<?php NavBar::end();
?>
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
                    <div class='tn-atom' >О НАС</div>
                </div>
                <div class='t396__elem tn-elem' data-elem-id='1475147601290'>
                    <div class='tn-atom' >
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
