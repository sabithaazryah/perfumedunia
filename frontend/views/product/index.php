<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\SubCategory;
use yii\helpers\Url;

if (isset($meta_title) && $meta_title != '')
    $this->title = $meta_title;
else
    $this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$current_action = Yii::$app->controller->action->id; // controller action id
$gender_params = \yii::$app->getRequest()->getQueryParams();

$exclusive_brands_sub = Category::find()->where(['status' => 1, 'main_category' => 1])->all();
$brands_sub = Category::find()->where(['status' => 1, 'main_category' => 2])->all();
?>


<div id="wpo-mainbody product" class="container wpo-mainbody">

    <nav class="woocommerce-breadcrumb"><a class="home" href="">Home</a>&nbsp;/&nbsp;<a href="">Fragrance</a>&nbsp;/&nbsp;Men</nav>
    <section class="wpo-content-product content-product">

        <div class="row">
            <section id="product" class="col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 no-sidebar-right">
                <div id="wpo-main-content" class="wpo-content">
                    <div class="category-image">
                        <a href=""><img width="873" height="256" src="<?= Yii::$app->homeUrl ?>images/mens-banner1.jpg" class="attachment-category-image" alt="banner_category_men"></a> </div>

                    <div id="wpo-filter" class="product-filter clearfix wrapper">
                        <div class="display">
                            <span class="pull-left">View</span>
                            <a class="list" style="position:relative;" data-query="eyJwYWdlZCI6MSwicHJvZHVjdF9jYXQiOiJtZW4iLCJlcnJvciI6IiIsIm0iOiIiLCJwIjowLCJwb3N0X3BhcmVudCI6IiIsInN1YnBvc3QiOiIiLCJzdWJwb3N0X2lkIjoiIiwiYXR0YWNobWVudCI6IiIsImF0dGFjaG1lbnRfaWQiOjAsIm5hbWUiOiIiLCJzdGF0aWMiOiIiLCJwYWdlbmFtZSI6IiIsInBhZ2VfaWQiOjAsInNlY29uZCI6IiIsIm1pbnV0ZSI6IiIsImhvdXIiOiIiLCJkYXkiOjAsIm1vbnRobnVtIjowLCJ5ZWFyIjowLCJ3IjowLCJjYXRlZ29yeV9uYW1lIjoiIiwidGFnIjoiIiwiY2F0IjoiIiwidGFnX2lkIjoiIiwiYXV0aG9yIjoiIiwiYXV0aG9yX25hbWUiOiIiLCJmZWVkIjoiIiwidGIiOiIiLCJjb21tZW50c19wb3B1cCI6IiIsIm1ldGFfa2V5IjoiIiwibWV0YV92YWx1ZSI6IiIsInByZXZpZXciOiIiLCJzIjoiIiwic2VudGVuY2UiOiIiLCJmaWVsZHMiOiIiLCJtZW51X29yZGVyIjoiIiwiY2F0ZWdvcnlfX2luIjpbXSwiY2F0ZWdvcnlfX25vdF9pbiI6W10sImNhdGVnb3J5X19hbmQiOltdLCJwb3N0X19pbiI6W10sInBvc3RfX25vdF9pbiI6W10sInRhZ19faW4iOltdLCJ0YWdfX25vdF9pbiI6W10sInRhZ19fYW5kIjpbXSwidGFnX3NsdWdfX2luIjpbXSwidGFnX3NsdWdfX2FuZCI6W10sInBvc3RfcGFyZW50X19pbiI6W10sInBvc3RfcGFyZW50X19ub3RfaW4iOltdLCJhdXRob3JfX2luIjpbXSwiYXV0aG9yX19ub3RfaW4iOltdLCJvcmRlcmJ5IjoibWVudV9vcmRlciB0aXRsZSIsIm9yZGVyIjoiQVNDIiwibWV0YV9xdWVyeSI6W3sia2V5IjoiX3Zpc2liaWxpdHkiLCJ2YWx1ZSI6WyJ2aXNpYmxlIiwiY2F0YWxvZyJdLCJjb21wYXJlIjoiSU4ifV0sInBvc3RzX3Blcl9wYWdlIjo2LCJ3Y19xdWVyeSI6InByb2R1Y3RfcXVlcnkiLCJpZ25vcmVfc3RpY2t5X3Bvc3RzIjpmYWxzZSwic3VwcHJlc3NfZmlsdGVycyI6ZmFsc2UsImNhY2hlX3Jlc3VsdHMiOnRydWUsInVwZGF0ZV9wb3N0X3Rlcm1fY2FjaGUiOnRydWUsInVwZGF0ZV9wb3N0X21ldGFfY2FjaGUiOnRydWUsInBvc3RfdHlwZSI6IiIsIm5vcGFnaW5nIjpmYWxzZSwiY29tbWVudHNfcGVyX3BhZ2UiOiI1MCIsIm5vX2ZvdW5kX3Jvd3MiOmZhbHNlLCJ0YXhvbm9teSI6InByb2R1Y3RfY2F0IiwidGVybSI6Im1lbiJ9"
                               data-type="list" href="#">
                                <span class="text-hide">List</span>
                            </a>
                            <a class="grid active" style="position:relative;" data-query="eyJwYWdlZCI6MSwicHJvZHVjdF9jYXQiOiJtZW4iLCJlcnJvciI6IiIsIm0iOiIiLCJwIjowLCJwb3N0X3BhcmVudCI6IiIsInN1YnBvc3QiOiIiLCJzdWJwb3N0X2lkIjoiIiwiYXR0YWNobWVudCI6IiIsImF0dGFjaG1lbnRfaWQiOjAsIm5hbWUiOiIiLCJzdGF0aWMiOiIiLCJwYWdlbmFtZSI6IiIsInBhZ2VfaWQiOjAsInNlY29uZCI6IiIsIm1pbnV0ZSI6IiIsImhvdXIiOiIiLCJkYXkiOjAsIm1vbnRobnVtIjowLCJ5ZWFyIjowLCJ3IjowLCJjYXRlZ29yeV9uYW1lIjoiIiwidGFnIjoiIiwiY2F0IjoiIiwidGFnX2lkIjoiIiwiYXV0aG9yIjoiIiwiYXV0aG9yX25hbWUiOiIiLCJmZWVkIjoiIiwidGIiOiIiLCJjb21tZW50c19wb3B1cCI6IiIsIm1ldGFfa2V5IjoiIiwibWV0YV92YWx1ZSI6IiIsInByZXZpZXciOiIiLCJzIjoiIiwic2VudGVuY2UiOiIiLCJmaWVsZHMiOiIiLCJtZW51X29yZGVyIjoiIiwiY2F0ZWdvcnlfX2luIjpbXSwiY2F0ZWdvcnlfX25vdF9pbiI6W10sImNhdGVnb3J5X19hbmQiOltdLCJwb3N0X19pbiI6W10sInBvc3RfX25vdF9pbiI6W10sInRhZ19faW4iOltdLCJ0YWdfX25vdF9pbiI6W10sInRhZ19fYW5kIjpbXSwidGFnX3NsdWdfX2luIjpbXSwidGFnX3NsdWdfX2FuZCI6W10sInBvc3RfcGFyZW50X19pbiI6W10sInBvc3RfcGFyZW50X19ub3RfaW4iOltdLCJhdXRob3JfX2luIjpbXSwiYXV0aG9yX19ub3RfaW4iOltdLCJvcmRlcmJ5IjoibWVudV9vcmRlciB0aXRsZSIsIm9yZGVyIjoiQVNDIiwibWV0YV9xdWVyeSI6W3sia2V5IjoiX3Zpc2liaWxpdHkiLCJ2YWx1ZSI6WyJ2aXNpYmxlIiwiY2F0YWxvZyJdLCJjb21wYXJlIjoiSU4ifV0sInBvc3RzX3Blcl9wYWdlIjo2LCJ3Y19xdWVyeSI6InByb2R1Y3RfcXVlcnkiLCJpZ25vcmVfc3RpY2t5X3Bvc3RzIjpmYWxzZSwic3VwcHJlc3NfZmlsdGVycyI6ZmFsc2UsImNhY2hlX3Jlc3VsdHMiOnRydWUsInVwZGF0ZV9wb3N0X3Rlcm1fY2FjaGUiOnRydWUsInVwZGF0ZV9wb3N0X21ldGFfY2FjaGUiOnRydWUsInBvc3RfdHlwZSI6IiIsIm5vcGFnaW5nIjpmYWxzZSwiY29tbWVudHNfcGVyX3BhZ2UiOiI1MCIsIm5vX2ZvdW5kX3Jvd3MiOmZhbHNlLCJ0YXhvbm9teSI6InByb2R1Y3RfY2F0IiwidGVybSI6Im1lbiJ9"
                               data-type="grid" href="#">
                                <span class="text-hide">Grid</span>
                            </a>
                        </div>

                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="product_cat" value="men"><input type="hidden" name="paged" value="1"></form>
                    </div>

                    <div class="products">


                        <div class="row">
                            <?=
                            $dataProvider->totalcount > 0 ? ListView::widget([
                                        'dataProvider' => $dataProvider,
                                        'itemView' => '_view2',
                                        'pager' => [
                                            'firstPageLabel' => 'first',
                                            'lastPageLabel' => 'last',
                                            'prevPageLabel' => '<',
                                            'nextPageLabel' => '>',
                                            'maxButtonCount' => 5,
                                        ],
                                    ]) : $this->render('no_product');
                            ?>

                        </div>
                    </div>
                </div>
            </section>
            <div class="wpo-sidebar wpo-sidebar-1 col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9">
                <div class="sidebar-inner">
                    <aside id="woocommerce_product_categories-3" class="widget clearfix woocommerce widget_product_categories sidebar-element">
                        <div class="box-heading"><span>Categories</span></div>
                        <ul class="product-categories">
                            <?php
                            $main_menu = \common\models\MenuManagement::find()->where(['type' => 1])->all();
                            foreach ($main_menu as $main) {
                                ?>
                                <li class="cat-item cat-item-238 current-cat cat-parent"><a href=""><?= $main->main_menu ?></a>
                                    <?php
                                    $sub_menu = \common\models\MenuManagement::find()->where(['type' => 2, 'main_menu_id' => $main->id])->all();
                                    if ($sub_menu) {
                                        ?>
                                        <ul class="children">
                                            <?php
                                            foreach ($sub_menu as $sub) {
                                                $sub_name = Category::findOne($sub->sub_menu_id)->category;
                                                ?>
                                                <li class="cat-item cat-item-239"><?= Html::a($sub_name, $sub->sub_menu_link, ['class' => '']) ?></li>
                                            <?php } ?>
                                            
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                            
                        </ul>
                    </aside>
                    <aside id="woocommerce_top_rated_products-2" class="widget clearfix woocommerce widget_top_rated_products sidebar-element">
                        <div class="box-heading"><span>SPECIALS</span></div>
                        <ul class="product_list_widget">
                            <div class="item-product-widget clearfix">
                                <div class="images pull-left">
                                    <img src="<?= Yii::$app->homeUrl ?>images/products/1.jpg" class="attachment-shop_thumbnail wp-post-image" alt="product-3"> </div>
                                <div class="product-meta">
                                    <div class="title">
                                        <a href="" title="">
                                            Grouped Product → Product girl            </a>
                                    </div>

                                    <span class="price"><span class="amount">£80.00</span></span>

                                </div>
                            </div>
                            <div class="item-product-widget clearfix">
                                <div class="images pull-left">
                                    <img src="<?= Yii::$app->homeUrl ?>images/products/2.png" class="attachment-shop_thumbnail wp-post-image" alt="product5"> </div>
                                <div class="product-meta">
                                    <div class="title">
                                        <a href="" title="Simple product">
                                            Simple product            </a>
                                    </div>

                                    <span class="price"><span class="amount">£20.00</span></span>
                                    <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></div>
                                </div>
                            </div>
                            <div class="item-product-widget clearfix">
                                <div class="images pull-left">
                                    <img src="<?= Yii::$app->homeUrl ?>images/products/3.png" class="attachment-shop_thumbnail wp-post-image" alt="product1"> </div>
                                <div class="product-meta">
                                    <div class="title">
                                        <a href="" title="">
                                            Patient Ninja            </a>
                                    </div>

                                    <span class="price"><span class="amount">£35.00</span></span>
                                    <div class="star-rating" title="Rated 4.67 out of 5"><span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span></div>
                                </div>
                            </div>
                            <div class="item-product-widget clearfix">
                                <div class="images pull-left">
                                    <img src="<?= Yii::$app->homeUrl ?>images/products/4.png" class="attachment-shop_thumbnail wp-post-image" alt="product16"> </div>
                                <div class="product-meta">
                                    <div class="title">
                                        <a href="" title="">
                                            Farlap Shirt             </a>
                                    </div>

                                    <span class="price"><span class="amount">£90.00</span></span>
                                    <div class="star-rating" title="Rated 4.17 out of 5"><span style="width:83.4%"><strong class="rating">4.17</strong> out of 5</span></div>
                                </div>
                            </div>
                            <div class="item-product-widget clearfix">
                                <div class="images pull-left">
                                    <img src="<?= Yii::$app->homeUrl ?>images/products/5.png" class="attachment-shop_thumbnail wp-post-image" alt="product18"> </div>
                                <div class="product-meta">
                                    <div class="title">
                                        <a href="" title="Out of stock">
                                            Out of stock
                                        </a>
                                    </div>

                                    <span class="price"><del><span class="amount">£56.00</span></del> <ins><span class="amount">£40.00</span></ins></span>
                                    <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span></div>
                                </div>
                            </div>
                        </ul>
                    </aside>
                </div>
            </div>

        </div>
    </section>
</div>


