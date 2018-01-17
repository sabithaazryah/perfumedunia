<?php

use common\components\RelatedProductWidget;
use common\components\RecentlyViewedWidget;
use common\models\Product;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div id="wpo-mainbody" class="container wpo-mainbody">

        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a class="home" href="">Home</a>&nbsp;/&nbsp;<a href="">Fragrance</a>&nbsp;/&nbsp;<a href="">Men</a>&nbsp;/&nbsp;Product1</nav>
        <div class="row">
                <section id="product" class="col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 no-sidebar-right">



                        <!--                        <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <a href="cart.php" class="button wc-forward">View Cart</a> “Lorem ipsum“ has been added to your cart. </div>-->

                        <div itemscope="" itemtype="h" id="product-113" class="product-info post-113 product type-product status-publish has-post-thumbnail product_cat-men product_cat-shirt product_cat-top product_tag-dummy featured shipping-taxable product-type-external product-cat-men product-cat-shirt product-cat-top product-tag-dummy instock">
                                <div id="single-product" class="row box-element">
                                        <div class="col-md-6 col-sm-6">
                                                <div class="images">

                                                        <div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap"><div class="yith_magnifier_zoom_wrap">
                                                                                                                                                        <?php
                                                                                                                                                        $product_image = Yii::$app->basePath . '/../uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '.' . $product_details->profile;
                                                                                                                                                        if (file_exists($product_image)) {
                                                                                                                                                                ?>
                                                                                                                                                                <a href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" itemprop="image" class="yith_magnifier_zoom woocommerce-main-image" title="product1">
                                                                                                                                                                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" class="attachment-shop_single wp-post-image" alt="product13"></a>
                                                                                                                                                        <?php } else { ?>
                                                                                                                                                                <a href="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>?scale.height='400'" itemprop="image" class="yith_magnifier_zoom woocommerce-main-image" title="product1">
                                                                                                                                                                        <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>?scale.height='400'" class="attachment-shop_single wp-post-image" alt="product13"></a>
                                                                                                                                                        <?php } ?>
                                                                                                                                                        <div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px;"></div><div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px;"></div><div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px;"></div><div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px;"></div><div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px;"></div><div class="yith_magnifier_mousetrap" style="width: 100%; height: 100%; top: 0px; left: 0px; cursor: pointer;"></div></div></div></div></div></div></div></div></div></div></div></div></div>
                                                        <div class="thumbnails slider">
                                                                <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; height: 150px; margin: 0px; overflow: hidden;">
                                                                        <ul class="yith_magnifier_gallery" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2130px; height: 150px; z-index: auto;">
                                                                                <?php if (file_exists($product_image)) { ?>
                                                                                        <li class="yith_magnifier_thumbnail" style="width: 142px;"><a href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" class="yith_magnifier_thumbnail first" title="product1" data-small="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>"><img width="84" height="120" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/profile/' . $product_details->canonical_name . '_big.' . $product_details->profile ?>" class="attachment-shop_thumbnail" alt="product1"></a></li>

                                                                                        <?php
                                                                                }
                                                                                $path = Yii::getAlias('@paths') . '/product/' . $product_details->id . '/gallery_thumb';
                                                                                if (count(glob("{$path}/*")) > 0) {
                                                                                        foreach (glob("{$path}/*") as $file) {

                                                                                                $arry = explode('/', $file);
                                                                                                $img_nmee = end($arry);
                                                                                                $img_nmees = explode('.', $img_nmee);
                                                                                                if ($img_nmees['1'] != '') {
                                                                                                        ?>
                                                                                                        <li class="yith_magnifier_thumbnail first" style="width: 142px;"><a href="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>" class="yith_magnifier_thumbnail first" title="product1" data-small="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>"><img width="84" height="120" src="<?= Yii::$app->homeUrl . 'uploads/product/' . $product_details->id . '/gallery/' . end($arry) ?>" class="attachment-shop_thumbnail" alt="product1"></a></li>
                                                                                                        <?php
                                                                                                }
                                                                                        }
                                                                                }
                                                                                ?>
                                                                        </ul>
                                                                </div>

                                                                <div id="slider-prev" class="" style="display: block;"></div>
                                                                <div id="slider-next" class="" style="display: block;"></div>
                                                        </div>

                                                </div>


                                                <script type="text/javascript" charset="utf-8">
                                                        var yith_magnifier_options = {

                                                                enableSlider: true,
                                                                sliderOptions: {
                                                                        responsive: true,
                                                                        circular: true,
                                                                        infinite: true,
                                                                        direction: 'left',
                                                                        debug: false,
                                                                        auto: false,
                                                                        align: 'left',
                                                                        prev: {
                                                                                button: "#slider-prev",
                                                                                key: "left"
                                                                        },
                                                                        next: {
                                                                                button: "#slider-next",
                                                                                key: "right"
                                                                        },
                                                                        //width   : 618,
                                                                        scroll: {
                                                                                items: 1,
                                                                                pauseOnHover: true
                                                                        },
                                                                        items: {
                                                                                //width: 104,
                                                                                visible: 3}
                                                                },
                                                                showTitle: false,
                                                                zoomWidth: 'auto',
                                                                zoomHeight: 'auto',
                                                                position: 'right',
                                                                //tint: ,
                                                                //tintOpacity: ,
                                                                lensOpacity: 0.5,
                                                                softFocus: false,
                                                                //smoothMove: ,
                                                                adjustY: 0,
                                                                disableRightClick: false,
                                                                phoneBehavior: 'default',
                                                                loadingLabel: 'Loading...'
                                                        };
                                                </script>        </div>
                                        <div class="col-md-6 col-sm-6">
                                                <div class="summary entry-summary">
                                                        <h1 itemprop="name" class="heading_title product_title entry-title"><?= $product_details->product_name ?></h1>
                                                        <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope="" itemtype="">
                                                                <div class="star-rating" title="Rated 4.00 out of 5">
                                                                        <span style="width:80%">
                                                                                <strong itemprop="ratingValue" class="rating">4.00</strong> out of 5			</span>
                                                                </div>
                                                                <?php if (!empty($product_reveiws)) { ?>
                                                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="ratingCount" class="count"><?= count($product_reveiws) ?></span> customer reviews)</a>
                                                                <?php } ?>
                                                        </div>

                                                        <div>

                                                                <p class="price"><span class="amount">£<?= $product_details->offer_price ?></span></p>

                                                                <meta itemprop="price" content="35">
                                                                <meta itemprop="priceCurrency" content="GBP">
                                                                <link itemprop="availability" href="">

                                                        </div>

                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-113">
                                                                <div class="yith-wcwl-add-button show" style="display:block">


                                                                        <a href="" rel="nofollow" data-product-id="113" data-product-type="external" class="add_to_wishlist">
                                                                                Add to Wishlist</a>
                                                                        <img src="<?= Yii::$app->homeUrl ?>wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                                                </div>

                                                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="">
                                                                                Browse Wishlist	        </a>
                                                                </div>

                                                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="">
                                                                                Browse Wishlist	        </a>
                                                                </div>

                                                                <div style="clear:both"></div>
                                                                <div class="yith-wcwl-wishlistaddresponse"></div>

                                                        </div>

                                                        <div class="clear"></div><a href="" class="compare button add-cart" data-product_id="113">Add To Cart</a><div itemprop="description" class="description">
                                                                <p><?= $product_details->main_description ?></p>
                                                        </div><div class="product_meta">



                                                                <div class="posted_in">Categories: <a href="" rel="tag">Men</a>, <a href="" rel="tag">Top</a>, <a href="" rel="tag">Fragrance</a>.</div>
                                                                <div class="tagged_as">Tag: <a href="" rel="tag">Dummy</a>.</div>

                                                        </div>
                                                </div><!-- .summary -->

                                        </div>
                                </div>




                                <div class="woocommerce-tabs box-element">
                                        <ul class="nav nav-tabs">

                                                <li class="description_tab active">
                                                        <a data-toggle="tab" href="#tab-description">Description</a>
                                                </li>


                                                <li class="reviews_tab">
                                                        <?php
                                                        if (count($product_reveiws) > 0) {
                                                                $review_count = '( ' . count($product_reveiws) . ' )';
                                                        } else {
                                                                $review_count = '';
                                                        }
                                                        ?>
                                                        <a data-toggle="tab" href="#tab-reviews">Reviews <?= $review_count ?></a>
                                                </li>

                                        </ul>
                                        <div class="tab-content">
                                                <div class="tab-pane active" id="tab-description">

                                                        <h2>Product Description</h2>

                                                        <p><?= $product_details->product_detail ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-reviews">
                                                        <div id="reviews">
                                                                <div id="comments">
                                                                        <h2><?= count($product_reveiws) ?> reviews for <?= $product_details->product_name ?></h2>


                                                                        <ol class="commentlist">
                                                                                <?php
                                                                                foreach ($product_reveiws as $reveiws) {
                                                                                        ?>
                                                                                        <li itemprop="reviews" itemscope="" itemtype="" class="comment even thread-even depth-1" id="li-comment-37">
                                                                                                <div id="comment-37" class="comment_container">
                                                                                                        <div class="comment-text">
                                                                                                                <p class="meta">
                                                                                                                        <?= date("M d , Y", strtotime($reveiws->review_date)) ?>:
                                                                                                                </p>

                                                                                                                <div itemprop="description" class="description">
                                                                                                                        <p><?= $reveiws->description ?></p>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </li>
                                                                                <?php } ?>

                                                                        </ol>


                                                                </div>

                                                                <?php if (isset(Yii::$app->user->identity->id)) { ?>
                                                                        <div id="review_form_wrapper">
                                                                                <div id="review_form">
                                                                                        <div id="respond" class="comment-respond">
                                                                                                <p id="review-flash" style="color: green;display: none" ><i class="fa fa-check"></i> Review added successfully</p>
                                                                                                <h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small></h3>
                                                                                                <!--<form action="" method="post" id="commentform" class="comment-form">-->
                                                                                                <?php
                                                                                                $form = ActiveForm::begin(['id' => 'commentform', 'class' => "comment-form"]);
                                                                                                $model_review = new common\models\CustomerReviews();
                                                                                                ?>
                                                                                                        <!--<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input class="form-control" id="author" name="author" type="text" value="" size="30" aria-required="true"></p>-->
                                                                                                        <!--<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input class="form-control" id="email" name="email" type="text" value="" size="30" aria-required="true"></p>-->
                                                                                                        <!--<p class="comment-form-rating"><label for="rating">Your Rating</label>-->
        <!--                                                                                                        <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating"
                                                                                                                                                                                                                <option value="">Rate…</option>
                                                                                                                <option value="5">Perfect</option>
                                                                                                                <option value="4">Good</option>
                                                                                                                <option value="3">Average</option>
                                                                                                                <option value="2">Not that bad</option>
                                                                                                                <option value="1">Very Poor</option>
                                                                                                        </select></p>-->
                                                                                                <p class="comment-form-comment"><label for="comment">Your Review</label>
                                                                                                        <?= $form->field($model_review, 'description')->textarea(['rows' => 8, 'cols' => 45, 'style' => 'height:auto', 'id' => 'comment', 'class' => 'form-control', 'required' => ''])->label(FALSE) ?>
                                                                                                        <!--s<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>-->
                                                                                                        <!--<input type="hidden" id="_wpnonce" name="_wpnonce" value="2011597fd6">-->
        <!--                                                                                                        <input
                                                                                                                type="hidden" name="_wp_http_referer" value="">-->
                                                                                                </p>
                                                                                                <?= $form->field($model_review, 'product_id')->hiddenInput(['maxlength' => true, 'value' => $product_details->id])->label(FALSE) ?>
                                                                                                <p class="form-submit">

                                                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
        <!--                                                                                                        <input type="hidden" name="comment_post_ID" value="113" id="comment_post_ID">
                                                                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">-->
                                                                                                </p>
                                                                                                <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="d6304b2bdb"></p>
                                                                                                <p style="display: none;"></p> <input type="hidden" id="ak_js" name="ak_js" value="1514981808723">
                                                                                                <!--</form>-->
                                                                                                <?php ActiveForm::end(); ?>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                <?php } ?>


                                                                <div class="clear"></div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <?= RecentlyViewedWidget::widget(['id' => $user_id]) ?>
                        </div>
                </section>
                <div class="wpo-sidebar wpo-sidebar-1 col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9">
                        <div class="sidebar-inner">
                                <aside id="woocommerce_product_categories-3" class="widget clearfix woocommerce widget_product_categories sidebar-element">
                                        <div class="box-heading"><span>Categories</span></div>
                                        <ul class="product-categories">
                                                <li class="cat-item cat-item-238 current-cat cat-parent"><a href="">Fragrances</a>
                                                        <ul class="children">
                                                                <li class="cat-item cat-item-239"><?= Html::a("Men's", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-240"><?= Html::a("Women's", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-241"><?= Html::a("Oriental", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-242"><?= Html::a("Gift sets", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-243"><?= Html::a("Bakhour", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-244"><?= Html::a("Brands", ['/product/index'], ['class' => '']) ?></li>
                                                        </ul>
                                                </li>
                                                <li class="cat-item cat-item-247"><?= Html::a("Watches", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="cat-item cat-item-252"><?= Html::a("Jewellery", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="cat-item cat-item-250"><?= Html::a("Eyewear", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="cat-item cat-item-251"><?= Html::a("Bags", ['/product/index'], ['class' => '']) ?></li>
                                                <li class="cat-item cat-item-241 cat-parent"><a href="">Accessories</a>
                                                        <ul class="children">
                                                                <li class="cat-item cat-item-243"><?= Html::a("Belts", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-244"><?= Html::a("Wallets", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-242"><?= Html::a("Card Holder", ['/product/index'], ['class' => '']) ?></li>
                                                                <li class="cat-item cat-item-242"><?= Html::a("Novelties", ['/product/index'], ['class' => '']) ?></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </aside>
                                <aside id="woocommerce_top_rated_products-2" class="widget clearfix woocommerce widget_top_rated_products sidebar-element">
                                        <div class="box-heading"><span>SPECIALS</span></div>
                                        <ul class="product_list_widget">
                                                <?php
                                                $related_products = explode(',', $product_details->related_product);
                                                foreach ($related_products as $val) {
                                                        $related_product = Product::findOne($val);
                                                        $product_images = Yii::$app->basePath . '/../uploads/product/' . $related_product->id . '/profile/' . $related_product->canonical_name . '_thumb.' . $related_product->profile;
                                                        ?>
                                                        <div class="item-product-widget clearfix">
                                                                <div class="images pull-left">
                                                                        <?php if (file_exists($product_images)) { ?>
                                                                                <img src="<?= Yii::$app->homeUrl . 'uploads/product/' . $related_product->id . '/profile/' . $related_product->canonical_name . '_thumb.' . $related_product->profile ?>" class="attachment-shop_thumbnail wp-post-image" alt="product-3">
                                                                        <?php } else { ?>
                                                                                <img src="<?= Yii::$app->homeUrl . 'uploads/product/gallery_dummy.png' ?>" class="attachment-shop_catalog image-hover" alt="product18" />
                                                                        <?php } ?>
                                                                </div>
                                                                <div class="product-meta">
                                                                        <div class="title">
                                                                                <a href="" title="">
                                                                                        <?= $related_product->product_name ?>           </a>
                                                                        </div>

                                                                        <span class="price"><span class="amount">£<?= $related_product->offer_price ?></span></span>

                                                                </div>
                                                        </div>
                                                <?php } ?>

                                        </ul>
                                </aside>
                        </div>
                </div>

        </div>
</div>


<script>
        jQuery(document).on('submit', '#commentform', function (e) {

                var str = jQuery(this).serialize();
                jQuery.ajax({
                        url: '<?= Yii::$app->homeUrl; ?>product/save-review',
                        type: "POST",
                        data: str,
                        success: function (data) {
                                jQuery('#comment').val('');
                                $('#review-flash').show();
                        }
                });
                return false;

        });
</script>
