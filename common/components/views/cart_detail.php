<?php

use yii\helpers\Html;
use common\models\Cart;
?>
<span class="dropdown-triangle-up"></span>
<a href="#" class="dd-close-btn"><i class="ti-close"></i></a>
<div class="dropdown-head">
    <h4 class="pull-left"><?= Cart::cart_count($cart_contents) ?> items in the shopping bag</h4>
</div>
<div class="dd-wrapper">
    <?php if (empty($cart_contents)) { ?>
        <div class="dd-list-empty">There is no product in shoppings cart!</div>
    <?php } else { ?>
        <div id="cart-product-group" class="dropdown-product-list">
            <?php
            $cart_content = Cart::content($cart_contents);
            $cart_total = Cart::total($cart_contents);
            ?>
            <?= $cart_content ?>

            <div class="text-center clear-all-btn">
                <span class="cart-block-subtotal">
                    Cart Subtotal: $<?= sprintf("%0.2f", $cart_total); ?>
                </span>
            </div>
        </div>
    <?php } ?>
    <div class="row no-gutter">
        <div class="col-xs-6">
            <a href="<?= Yii::$app->homeUrl.'cart/mycart'?>" class="btn btn-md btn-third-col btn-w100">View Cart</a>
        </div>
        <div class="col-xs-6">
            <a href="<?= Yii::$app->homeUrl.'cart/proceed'?>" class="btn btn-md btn-third-col btn-w100">Procced to Checkout</a>
        </div>
    </div>
</div>