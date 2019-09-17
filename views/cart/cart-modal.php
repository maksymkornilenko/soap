<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Orders;
?>
<?php if (!empty($session['cart'])): ?>
    <!--версия 2.0-->
    <div class="t706__cartwin-heading t-name t-name_xl">Оставьте данные для оформления заказа</div>
    <div class="t706__cartwin-products">
        <?php foreach ($session['cart'] as $id => $item): ?>
            <div class="t706__product">
                <div class="t706__product-thumb">
                    <div class="t706__product-imgdiv"
                         style="background-image:url(/image/Soap.png);">

                    </div>
                </div>
                <div class="t706__product-title t-descr t-descr_sm">
                    Кокосовое мыло Maldives Dreams
                </div>
                <div class="t706__product-plusminus t-descr t-descr_sm">
                    <span class="t706__product-minus">
                        <img src="/image/arrows_circle_minus.svg" style="width:16px;height:16px;border:0;"
                             data-id="<?= $item['system_products_id'] ?>" data-count="1" id="minus-cart">
                    </span>
                    <span class="t706__product-quantity cart-count" data-id="<?= $item['system_products_id'] ?>"><?= $item['count'] ?></span>
                    <span class="t706__product-plus">
                        <img src="/image/arrows_circle_plus.svg" data-id="<?= $item['system_products_id'] ?>" data-count="1" id="plus-cart" style="width:16px;height:16px;border:0;">
                    </span>
                </div>
                <div class="t706__product-amount t-descr t-descr_sm"><?= $item['count'] * $item['price'] ?>&nbsp;грн
                </div>
                <div class="t706__product-del">
                    <img src="/image/arrows_circle_remove.svg"
                         class="del-item" data-id="<?= $id ?>" style="width:20px;height:20px;border:0;">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="cartwin-prodamount-wrap t-descr t-descr_sm" style="display: block;">
        <span class="t706__cartwin-prodamount-label">Сумма:&nbsp;</span>
        <span class="t706__cartwin-prodamount"><?= $session['cart.sum'] ?>&nbsp;грн</span>
        <span class="t706__cartwin-count"><?= $session['cart.count'] ?></span>
    </div>
<?php elseif (Yii::$app->session->hasFlash('success')): ?>
    <div>
        <h3>
            <div class="js-successbox t-form__successbox t-text t-text_md" style=""><?php echo Yii::$app->session->getFlash('success'); ?></div>
        </h3>
    </div>
<?php elseif (Yii::$app->session->hasFlash('error')): ?>
    <div>
        <h3>
            <div class="js-successbox t-form__errorbox t-text t-text_md" style=""><?php echo Yii::$app->session->getFlash('error'); ?></div>
        </h3>
    </div>
<?php else: ?>
    <div style="text-align: center">
        <h2>
            <p>Корзина пуста</p>
        </h2>
    </div>
<?php endif; ?>
