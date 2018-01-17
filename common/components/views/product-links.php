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
                <div class="product-inner">
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
                                                <a href="" rel="nofollow" data-product_id="112" data-product_sku="" data-quantity="1" class="btn-cart button add_to_cart_button product_type_simple"><i class="fa-fw fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="wishlist-compare">
                                                <a class="wishlist fa fa-heart" title="Add to Wish List"><span>Add to Wish List</span></a>

                                        </div>
                                </div>
                        </div>

                        <div class="product-meta">
                                <div class="warp-info">
                                        <h3 class="name">
                                                <a href="" title="<?= $model->product_name ?>"><?= substr($model->product_name, 0, 20) ?></a>
                                        </h3>

                                        <span class="price"><span class="amount">&pound;<?= $model->offer_price; ?></span></span>

                                        <!--quickview-->
                                        <a href="<?= Yii::$app->homeUrl . 'product_detail/' . $model->canonical_name ?>" class="wpo-colorbox cboxElement quickview" data-productslug="ninja-silhouette-2" data-toggle="modal" data-target="#wpo_modal_quickview">
                                                <span class="fa fa-plus"></span>
                                                <span>Quick view</span>
                                        </a>

                                </div>
                        </div>
                </div>
        </div>


</div>