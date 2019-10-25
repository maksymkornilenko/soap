<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
?>
<?php if($exception==404)?>
<div class="container h-100">
    <div class="d-flex align-items-center flex-column justify-content-center h-100 bg-dark text-white" id="header">
        <div class="col-12">
            <div class="site-error">
                <h1>Error<?php echo $exception?></h1>
                <div class="alert alert-danger">
                    <p>Данной страницы не существует</p>
                </div>
                <a href="/">Вернуться на главную страницу сайта</a>
            </div>
        </div>
    </div>
    <div class="row h-100 justify-content-center align-items-center">

    </div>
</div>

