<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Product;
use common\models\User;

$this->title = 'Shopping Cart';
?>
<div id="wpo-mainbody" class="container wpo-mainbody">
    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a class="home" href="index.php">Home</a>&nbsp;/&nbsp;Cart</nav>

    <div class="row">
        <!-- MAIN CONTENT -->
        <div id="wpo-content" class="wpo-content col-xs-12 no-sidebar">
            <article id="post-8" class="post-8 page type-page status-publish hentry">
                <div class="content">
                    <div class="woocommerce">
                        <form action="" method="post">

                            <input type="hidden" id="cart_count" value="<?= count($cart_items); ?>">
                            <table class="shop_table cart" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($cart_items as $cart_item) {
                                        $prod_details = Product::find()->where(['id' => $cart_item->product_id, 'status' => '1'])->one();
                                        if ($prod_details->offer_price == '0' || $prod_details->offer_price == '') {
                                            $price = $prod_details->price;
                                        } else {
                                            $price = $prod_details->offer_price;
                                        }
                                        $product_image = Yii::$app->basePath . '/../uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '.' . $prod_details->profile;
                                        if (file_exists($product_image)) {
                                            $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/' . $prod_details->id . '/profile/' . $prod_details->canonical_name . '_thumb.' . $prod_details->profile . '" alt="' . $prod_details->canonical_name . '" />';
                                        } else {
                                            $image = '<img src="' . Yii::$app->homeUrl . 'uploads/product/profile_thumb.png" alt=""/>';
                                        }
                                        ?>
                                        <tr class="cart_item tr_<?= $cart_item->id ?>">

                                            <td class="product-remove">
                                                <a class="remove remove_cart" title="Remove this item" data-product_id="<?= $cart_item->id ?>">×</a> </td>

                                            <td class="product-thumbnail">
                                                <a href=""><?= $image ?></a> </td>

                                            <td class="product-name">
                                                <a href=""><?= $prod_details->product_name ?></a> </td>

                                            <td class="product-price">
                                                <span class="amount">£<?= sprintf("%0.2f", $price) ?></span> </td>

                                            <td class="product-quantity">
                                                <div class="quantity-adder">
                                                    <div class="quantity buttons_added"><input type="button" value="-" class="minus">
                                                        <input type="number" step="1" min="1" name="cart[7f6ffaa6bb0b408017b62254211691b5][qty]" value="<?= $cart_item->quantity ?>" title="Qty" class="input-text qty text" size="4">
                                                        <input type="button" value="+" class="plus"></div>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <?php $total = $price * $cart_item->quantity; ?>
                                                <span class="amount">£<?= sprintf("%0.2f", $total) ?></span> </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="6" class="actions">

                                            <div class="coupon">

                                                <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="btn btn-default" name="apply_coupon"
                                                                                                                                                                                                        value="Apply Coupon">


                                            </div>

                                            <input type="submit" class="btn btn-default" name="update_cart" value="Update Cart"> <input type="submit" class="checkout-button btn btn-default alt wc-forward" name="proceed" value="Proceed to Checkout">


                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="e5604b90fe"><input type="hidden" name="_wp_http_referer" value=""> </td>
                                    </tr>
                                </tbody>
                            </table>


                        </form>

                        <div class="cart-collaterals">

                            <div class="cart_totals ">


                                <div class="box-heading"><span>Cart Totals</span></div>

                                <table cellspacing="0" class="table-cart">

                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount cart_subtotal">£<?= sprintf("%0.2f", $subtotal) ?></span></td>
                                        </tr>




                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>


                                                <ul id="shipping_method">
                                                    <?php if ($shipping == '0') { ?>
                                                        <li>
                                                            <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping" value="free_shipping" checked="checked" class="shipping_method">
                                                            <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li>
                                                            <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_international_delivery" value="international_delivery" class="shipping_method">
                                                            <label for="shipping_method_0_international_delivery">International Delivery: <span class="amount shipping-cost">£<?= sprintf("%0.2f", $shipping) ?></span></label>
                                                        </li>
                                                    <?php } ?>
                                                </ul>

                                            </td>
                                        </tr>






                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount grand_total">£<?= sprintf("%0.2f", $grand_total) ?></span></strong> </td>
                                        </tr>


                                    </tbody>
                                </table>


                                <div class="wc-proceed-to-checkout">

                                    <a href="payment-method.php" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- .entry-content -->
            </article>
            <!-- #post -->
        </div>
        <!-- //MAIN CONTENT -->

    </div>
</div>
<script>
//    jQuery('body').on('click', '.remove_cart', function () {
//        var answer = confirm("Are you sure want to remove?");
//        if (answer)
//        {
////            showLoader();
//            var $id = $(this).attr('data-product_id');
//            var $count = $('#cart_count').val();
//            jQuery('.error_' + $id).html('');
//            jQuery.ajax({
//                url: homeUrl + 'cart/cart_remove',
//                type: "post",
//                data: {id: $id, count: $count},
//                success: function (data) {
//                    var $data = JSON.parse(data);
//                    if ($data.msg === "success") {
////                        getcartcount();
//                        $('.tr_' + $id).remove();
////                        getcartcount();
////                    }
//                        $('.cart_subtotal').html('£'+$data.subtotal);
//                        $('.shipping-cost').html('£'+$data.shipping);
//                        $('.grand_total').html('£'+$data.grandtotal);
////                        hideLoader();
//                    }
//                }, error: function () {
//                    jQuery('.error_' + $id).html('Cannot Find');
//                }
//            });
//        }
//    });
</script>