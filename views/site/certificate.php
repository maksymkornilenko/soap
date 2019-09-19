<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper;
?>
<div class='buy' id="for-nav"  data-id="<?php echo $product[0]['id']?>" data-count="1"></div>
<div id="rec122574656" class="r t-rec t-rec_pt_135 t-rec_pb_0 r_showed r_anim">
    <!-- T795 -->
    <div class="t795">
        <div class="t-container t-align_center">
            <div class="t-col t-col_10 t-prefix_1">
                <div class="t795__title t-title t-title_xs t-margin_auto" field="title">Сертификаты качества
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rec122574662" class="r t-rec t-rec_pt_0" style="padding-top:0px;">
    <!-- T396 -->
    <div class="t396">
        <div class="t396__artboard rendered" data-artboard-recid="122574662">
            <div class="t396__carrier" data-artboard-recid="122574662"></div>
            <div class="t396__filter" data-artboard-recid="122574662"></div>
            <div class="t396__elem tn-elem tn-elem__1225746621561403908450" data-elem-id="1561403908450">
                <div class="tn-atom t-zoomable" data-zoomable="yes"
                     data-img-zoom-url="https://static.tildacdn.com/tild3864-3365-4739-b361-316566643161/rama1.jpg"><img
                            class="tn-atom__img t-img loaded"
                            data-original="https://static.tildacdn.com/tild3864-3365-4739-b361-316566643161/rama1.jpg"
                            imgfield="tn_img_1561403908450"
                            src="https://static.tildacdn.com/tild3864-3365-4739-b361-316566643161/rama1.jpg"></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1225746621561403934194" data-elem-id="1561403934194">
                <div class="tn-atom t-zoomable" data-zoomable="yes"
                     data-img-zoom-url="https://static.tildacdn.com/tild6438-6535-4638-a436-373861393036/rama2.jpg"><img
                            class="tn-atom__img t-img loaded"
                            data-original="https://static.tildacdn.com/tild6438-6535-4638-a436-373861393036/rama2.jpg"
                            imgfield="tn_img_1561403934194"
                            src="https://static.tildacdn.com/tild6438-6535-4638-a436-373861393036/rama2.jpg"></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1225746621561403946787" data-elem-id="1561403946787">
                <div class="tn-atom t-zoomable"
                     data-img-zoom-url="https://static.tildacdn.com/tild3838-6130-4231-b538-393634346233/rama3.jpg"><img
                            class="tn-atom__img t-img loaded"
                            data-original="https://static.tildacdn.com/tild3838-6130-4231-b538-393634346233/rama3.jpg"
                            imgfield="tn_img_1561403946787"
                            src="https://static.tildacdn.com/tild3838-6130-4231-b538-393634346233/rama3.jpg"></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1225746621561403957878" data-elem-id="1561403957878">
                <div class="tn-atom t-zoomable"
                     data-img-zoom-url="https://static.tildacdn.com/tild3139-6138-4831-a465-393739333034/rama4.jpg"><img
                            class="tn-atom__img t-img loaded"
                            data-original="https://static.tildacdn.com/tild3139-6138-4831-a465-393739333034/rama4.jpg"
                            imgfield="tn_img_1561403957878"
                            src="https://static.tildacdn.com/tild3139-6138-4831-a465-393739333034/rama4.jpg"></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1225746621561404038291" data-elem-id="1561404038291">
                <div class="tn-atom t-zoomable"
                     data-img-zoom-url="https://static.tildacdn.com/tild6237-6234-4930-b564-626662346362/rama5.jpg"><img
                            class="tn-atom__img t-img loaded"
                            data-original="https://static.tildacdn.com/tild6237-6234-4930-b564-626662346362/rama5.jpg"
                            imgfield="tn_img_1561404038291"
                            src="https://static.tildacdn.com/tild6237-6234-4930-b564-626662346362/rama5.jpg"></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__1225746621561404055021" data-elem-id="1561404055021">
                <div class="tn-atom t-zoomable"
                     data-img-zoom-url="https://static.tildacdn.com/tild6537-3038-4561-b735-623337663137/rama65.jpg">
                    <img class="tn-atom__img t-img loaded"
                         data-original="https://static.tildacdn.com/tild6537-3038-4561-b735-623337663137/rama65.jpg"
                         imgfield="tn_img_1561404055021"
                         src="https://static.tildacdn.com/tild6537-3038-4561-b735-623337663137/rama65.jpg"></div>
            </div>
        </div>
    </div>
    </div>
<?php Modal::begin([
    'id' => 'cart',
    'size' => 'model-lg',
    'options' => [
        'tabindex' => false
    ]]);
?>
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
        <?= $form->field($order, 'area')->widget(Select2::classname(), [
            'data' => ArrayHelper::map($areas, 'ref', 'description_ru'),
            'options' => ['placeholder' => 'Выберите область ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?= $form->field($order, 'city')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  город ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?= $form->field($order, 'warehouse')->widget(Select2::classname(), [
            'data' => [],
            'options' => ['placeholder' => 'Выберите  отделение Новой почты ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
        <?php ActiveForm::end() ?>

        <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
            <a href="/site/official" style="">политикой конфиденциальности.</a>
        </div>
        <div class="t-input-group t-input-group_pm" style="margin: 40px 0;">
            <div class="t-input-title t-descr t-descr_md" style="">Способ оплаты</div>
            <div class="t-input-block">
                <div class="t-radio__wrapper t-radio__wrapper-payment" data-tilda-payment-variants-hook="y">
                    <label class="t-radio__control t-text t-text_xs" style="">
                        <input type="radio" name="paymentsystem" value="cash"
                               class="t-radio t-radio_payment" data-payment-variant-system="cash" checked>
                        <div class="t-radio__indicator">

                        </div>
                        Наличными при получении (+комиссия Новой Почты 20грн.+2% от суммы покупки)
                    </label>
                    <label class="t-radio__control t-text t-text_xs" style="">
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
                <div class="t702__title t-title t-title_xxs" style="">
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
        <a href="/site/official" style="">политикой конфиденциальности.</a>
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
    <a href="http://sale.maldivesdreams.com.ua/official" style="">политикой конфиденциальности.</a>
</div>
<?php Modal::end(); ?>
