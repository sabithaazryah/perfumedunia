<?php

use yii\helpers\Html;
use common\models\Fregrance;
use common\components\ProductLinksWidget;
?>
<?php
if (!empty($recently_viewed)) {
        ?>
        <div class="woocommrece products box-element">

                <div class="box-heading"><span>Recently Viewed</span></div>

                <div class="box-content">
                        <div class="box-products slide" id="productcarouse-9fMZN">
                                <div class="carousel-inner">
                                        <div class="item active">
                                                <div class="row">

                                                        <?php
                                                        $f = 0;
                                                        $count = count($recently_viewed);
                                                        foreach ($recently_viewed as $featured) {


                                                                $f++;
                                                                if ($f % 5 == 1) {
                                                                        $class = 1;
                                                                } else if ($f == $count) {
                                                                        $class = 0;
                                                                } else {
                                                                        $class = '';
                                                                }
                                                                ?>

                                                                <?= ProductLinksWidget::widget(['id' => $featured->product_id, 'first' => $class]) ?>
                                                                <?php
                                                                if ($f % 5 == 0) {
                                                                        if ($f != $count) {
                                                                                ?>
                                                                        </div>
                                                                </div>
                                                                <div class="item">

                                                                        <div class="row">
                                                                                <?php
                                                                        }
                                                                }
                                                        }
                                                        ?>






                                                        <!-- End Product Item -->

                                                </div>
                                        </div>
                                </div>


                        </div>

                        <br/>
                        <br/>
                        <br/>




                </div>

                <?php
        }
        ?>

