<?php

use yii\helpers\Html;
use common\models\Fregrance;

if ($class == 1)
    $class = 'first';
else if ($class = 0)
    $class = 'last';
else
    $class = '';
?>
<div class="shopcol col-lg-3 col-md-4 col-sm-4 col-xs-12 post-111 product type-product status-publish has-post-thumbnail product_cat-men product_cat-shirt product_cat-top featured shipping-taxable product-type-external product-cat-men product-cat-shirt product-cat-top instock <?= $class ?>">
    <div class="product-block product product-grid">
        <div class="product-inner gp_products_inner" id="<?= $div_id ?>">
            <div class="alert alert-success alert_<?= $model->canonical_name?> hide">
                <a href="<?= Yii::$app->homeUrl . 'cart/mycart' ?>" class="button wc-forward">View Cart</a> succesfully added to your cart.
                <a class="close-alert"><i class="fa fa-close"></i></a>
            </div>
            <div class="image">
                <a href="<?= Yii::$app->homeUrl . 'product-detail/' . $model->canonical_name ?>">

                    <?php
                    $product_image = Yii::$app->basePath . '/../uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile;
                    if (file_exists($product_image)) {
                        ?>
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile ?>" class="attachment-shop_catalog image-hover" alt="product18" />
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $model->id . '/profile/' . $model->canonical_name . '.' . $model->profile ?>" class="image-effect wp-post-image" alt="product16" />
                    <?php } else { ?>
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="attachment-shop_catalog image-hover" alt="product18" />
                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="image-effect wp-post-image" alt="product16" />
                    <?php } ?>
                </a>
                <div class="product-action">
                    <div class="add-to-cart">
                        <!--                                                <a href="" rel="nofollow" data-product_id="112" data-product_sku="" data-quantity="1" class="btn-cart button add_to_cart_button product_type_simple">
                                                                            <i class="fa-fw fa fa-shopping-cart"></i>Add to cart</a>-->
                        <?php if ($model->stock > 0) { ?>
                            <?= Html::a('<i class="fa-fw fa fa-shopping-cart"></i>Add to cart', 'javascript:void(0)', ['class' => 'btn-cart button add_to_cart_button product_type_simple add-cart', 'id' => $model->canonical_name]) ?>
                        <?php } ?>
                    </div>
                    <div class="wishlist-compare">
                        <?php if (empty(Yii::$app->user->identity)) { ?>
                            <a class="wishlist fa fa-heart call-popup popup1 loginCheckout" id="loginCheckout" title="Add to Wish List"><span>Add to Wish List</span></a>
                        <?php } else {
                            ?>
                            <a class="wishlist fa fa-heart add_to_wish_list" id='<?= $model->canonical_name ?>' title="Add to Wish List"><span>Add to Wish List</span></a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="product-meta">
                <div class="warp-info">
                    <h3 class="name">
                        <a href="" title="<?= $model->product_name ?>"><?= substr($model->product_name, 0, 20) ?></a>
                    </h3>

                    <span class="price"><span class="amount">AED <?= $model->offer_price; ?></span></span>

                    <!--quickview-->
                    <a href="#" style="pointer-events: none;" class="wpo-colorbox cboxElement quickview" data-productslug="ninja-silhouette-2" data-toggle="modal" data-target="#wpo_modal_quickview">
                        <span class="fa fa-plus" style="visibility: hidden"></span>
                        <!--<span>Quick view</span>-->
                    </a>

                </div>
            </div>
        </div>
    </div>


</div>