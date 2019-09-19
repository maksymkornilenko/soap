<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\ArrayHelper; ?>
    <div class='buy' id="for-nav" data-id="<?php echo $product[0]['id'] ?>" data-count="1"></div>
    <div id="rec122574816" class="r t-rec t-rec_pt_165 t-rec_pb_30 r_showed r_anim">
        <!-- T017 -->
        <div class="t017">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t017__title t-title t-title_xxs" field="title">Правила оплаты, доставки и
                        возврата
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec122574817" class="r t-rec t-rec_pt_0 t-rec_pb_60 r_showed r_anim">
        <!-- T004 -->
        <div class="t004">
            <div class="t-container ">
                <div class="t-col t-col_8 t-prefix_2">
                    <div field="text" class="t-text t-text_md " style="font-weight:400;font-family:'PT Sans';"> Мы
                        обрабатываем ваши заказы с понедельника по пятницу, с 9:00 до 18:00 и в субботу с 9:00 до 12:00.
                        <br><br> Отправляем как вам будет удобно, наложенным платежом или по полной предоплате. Отправка
                        производиться курьерской компанией Новая почта. Доставку оплачивает получатель согласно тарифам
                        компании перевозчика. <br><br> Если заказ сделан до 12:00 в рабочий день, то мы отправим его в
                        этот
                        же день, если после 12:00, то отправим на следующий рабочий день. <br><br> Мы возвращаем деньги
                        в
                        течении 30 дней после покупки, без уточнения причины, если вам не понравится результат! Условия
                        возврата: вы отправляете нам масло, оплачивая доставку, после того, как мы получим масло, мы
                        возмещаем вам полную сумму заказа на вашу карту. <br><br></div>
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
            <a href="/site/official" >политикой конфиденциальности.</a>
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
        <a href="/site/official" style="">политикой конфиденциальности.</a>
    </div>
<?php Modal::end(); ?>