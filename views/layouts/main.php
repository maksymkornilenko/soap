<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--metatextblock-->
    <title>Натуральное кокосовое мыло Maldives Dreams</title>
    <link rel="canonical" href="http://soap.maldivesdreams.com.ua">
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
            ['label' => 'Описание','options' => ['class' => 'nav-label'] ,'url' => ['/#opisanie']],
            ['label' => 'Гарантия','options' => ['class' => 'nav-label'] ,'url' => ['/#garant']],
            ['label' => 'Безопасность', 'options' => ['class' => 'nav-label'], 'url' => ['/#security']],
            ['label' => 'Купить', 'options' => ['class' => 'buy-nav nav-label']],
            ['label' => '+ 38 067 245-20-10','options'=>['class'=>'tel-1'], 'url' => ['/site/contact']],
            ['label' => '+ 38 067 404-66-01','options'=>['class'=>'tel-2'], 'url' => ['/site/contact']],
            ['label' => 'Заказать звонок', 'options'=>['class'=>'callback']],
        ],
    ]);?>
<a href="https://t.me/maldivesdreams" class="icon-nav" target="_blank"><img src="/image/telegram.png"/></a>
<a href="https://wa.me/380672452010" class="icon-nav" target="_blank"><img src="/image/whatsapp.png"/></a>
<a href="viber://chat?number=+38 067 245-20-10" class="icon-nav" target="_blank"><img src="/image/viber.png"/></a>
<a href="viber://chat?number=+38 067 245-20-10" class="icon-nav" target="_blank"><img src="/image/instagram.png"/></a>
    <?php NavBar::end();
    ?>
<?= $content ?>
<!--footer-->
<div id="t-footer" class="t-records">
    <div id="rec124335292" class="r t-rec">
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard">
                <div class="t396__carrier" data-artboard-recid="124335292"></div>
                <div class="t396__filter" data-artboard-recid="124335292"></div>
                <div class='t396__elem tn-elem tn-elem__1243352921475147390128' data-elem-id='1475147390128'>
                    <a class='tn-atom' href="#popup:skrabandoil">КУПИТЬ</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921475147589474' data-elem-id='1475147589474'>
                    <div class='tn-atom' field='tn_text_1475147589474'>О НАС</div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921475147601290' data-elem-id='1475147601290'>
                    <div class='tn-atom' field='tn_text_1475147601290'>
                        ООО "Менделеев Лаб"<br>
                        51200, Украина,
                        Днепропетровская область, г.Новомосковск, ул. Сучкова, д.115 А
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921475147675390' data-elem-id='1475147675390'>
                    <div class='tn-atom' field='tn_text_1475147675390'>ДОКУМЕНТАЦИЯ</div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921475147678114' data-elem-id='1475147678114'>
                    <a class='tn-atom' href="/certification">Сертификаты качества</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921475160083840' data-elem-id='1475160083840'>
                    <a class='tn-atom' href="/">
                        <img class='tn-atom__img t-img' src='/image/icon-logo.png' imgfield='tn_img_1475160083840'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562140988702' data-elem-id='1562140988702'>
                    <a class='tn-atom' href="viber://chat?number=+38 067 245-20-10" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/viber.png' imgfield='tn_img_1562140988702'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562140988709' data-elem-id='1562140988709'>
                    <a class='tn-atom' href="https://www.instagram.com/maldives.dreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/instagram.png' imgfield='tn_img_1562140988709'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562140988715' data-elem-id='1562140988715'>
                    <a class='tn-atom' href="https://tlgg.ru/maldivesdreams" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/telegram.png' imgfield='tn_img_1562140988715'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562140988721' data-elem-id='1562140988721'>
                    <a class='tn-atom' href="https://wa.me/38 067 245-20-10" target="_blank">
                        <img class='tn-atom__img t-img' src='/image/whatsapp.png' imgfield='tn_img_1562140988721'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562141820641' data-elem-id='1562141820641'>
                    <div class='tn-atom' field='tn_text_1562141820641'>Maldives dreams 2019 Все права защищены</div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562141867742' data-elem-id='1562141867742'>
                    <a class='tn-atom' href="mailto:maldives.dreamstm@gmail.com">maldives.dreamstm@gmail.com</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562142018674' data-elem-id='1562142018674'>
                    <a class='tn-atom' href="/official">
                        Политика
                        конфиденциальности
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562142042578' data-elem-id='1562142042578'>
                    <a class='tn-atom' href="/pay">Правила оплаты, доставки и возврата</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562142714866' data-elem-id='1562142714866'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3538-6638-4630-b262-343561646536/_1.png' imgfield='tn_img_1562142714866'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562142828468' data-elem-id='1562142828468'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3162-6266-4630-a662-373963623064/_3.png' imgfield='tn_img_1562142828468'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921562246055382' data-elem-id='1562246055382'>
                    <a class='tn-atom' href="/oferta">Договор публичной оферты</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921564484950188' data-elem-id='1564484950188'>
                    <a class='tn-atom' href="tel:+38 067 245 2010">
                        +38 067 245-20-10
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1243352921566893463283' data-elem-id='1566893463283'>
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
