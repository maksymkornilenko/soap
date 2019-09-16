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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--metatextblock--><title>Натуральное
        кокосовое мыло Maldives Dreams</title>
    <meta property="og:url" content="http://soap.maldivesdreams.com.ua"/>
    <meta property="og:title" content="Натуральное кокосовое мыло Maldives Dreams"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://static.tildacdn.com/tild6562-3531-4634-b638-613639303564/_1.png"/>
    <link rel="canonical" href="http://soap.maldivesdreams.com.ua"><!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">
    <link rel="shortcut icon" href="https://static.tildacdn.com/img/tildafavicon.ico" type="image/x-icon"/>
    <!-- Assets -->
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-grid-3.0.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://tilda.ws/project1560917/tilda-blocks-2.12.css?t=1568394893" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-animation-1.0.min.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-slds-1.4.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-zoom-2.0.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-menusub-1.0.min.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-popup-1.1.min.css" type="text/css" media="all"/>
    <script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
    <script src="https://static.tildacdn.com/js/tilda-scripts-2.8.min.js"></script>
    <script src="https://tilda.ws/project1560917/tilda-blocks-2.7.js?t=1568394893"></script>
    <script src="https://static.tildacdn.com/js/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-slds-1.4.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/hammer.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-zoom-2.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/jquery.touchswipe.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-menusub-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-forms-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-cart-1.0.min.js" charset="utf-8"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
