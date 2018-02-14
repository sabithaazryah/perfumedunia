<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Emirates;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .field-useraddress-address,.field-useraddress-landmark,.field-useraddress-location,.field-useraddress-emirate,.field-useraddress-post_code,.field-useraddress-mobile_number{
        padding-left: 0px !important;
        margin-bottom: 0px;
    }
    .user-adddress p {
        line-height: 15px;
    }
</style>
<div id="wpo-mainbody" class="container wpo-mainbody">

    <nav class="woocommerce-breadcrumb"><a class="home" href="">Home</a>&nbsp;/&nbsp;My Account &nbsp;/&nbsp;Address Book</nav>

    <div id="my-aacount">
        <section class="wrapper sec-space my-account">                  
            <div class="container">
                <!-- My Account Starts -->
                <div class="row">  
                    <div class="col-md-3">
                        <?= Yii::$app->controller->renderPartial('_leftside_menu'); ?>
                    </div>

                    <!-- Product Details Starts--> 
                    <aside class="col-md-9 col-sm-8">
                        <h3 class="title2">Addresses</h3>
                        <p>The following addresses will be used on the checkout page.</p>
                        <div class="u-columns woocommerce-Addresses col2-set addresses">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 f-right">
                                <a href="<?= yii::$app->homeUrl.'new-address'?>" class="button alt wc-forward checkout">Add Address</a>
                            </div>

                            <?php
                            if (!empty($user_address)) {
                                ?>
                                <div class="u-column1 col-1 woocommerce-Address">
                                    <header class="woocommerce-Address-title title">
                                        <h3 class="title2">Your Saved Addresses:</h3>
                                    </header>
                                    <div class="row">  
                                        <?php foreach ($user_address as $value) { ?>
                                            <div class="col-md-6">
                                                <a href="<?= yii::$app->homeUrl . 'change-address/' . yii::$app->EncryptDecrypt->Encrypt('encrypt', $value->id); ?>" class="edit">Edit</a>
                                                <address><strong><?= $value->name ?></strong><br>
                                                    <?= $value->address ?><br>
                                                    <?= $value->landmark ?><br>
                                                    <?= $value->location ?><br>
                                                    <?= $value->post_code ?><br>
                                                    <?= $value->mobile_number ?><br>
                                                    <label id="Radio0">
                                                        <input type="radio" name="default-address" value="<?= $value->id ?>" <?php
                                                        if ($value->status == 1) {
                                                            echo ' checked';
                                                        }
                                                        ?> data-waschecked="true" />
                                                        Default address
                                                    </label>
                                                    <a href="" class="delete-address" data-val="<?= $value->id ?>"><i class="fa fa-trash" aria-hidden="true"></i>Delete address</a></address><br>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>



                        </div>
                    </aside>
                    <!-- Product Details Ends --> 
                </div>
                <!-- / My Account Ends -->
            </div>

        </section>

    </div>

</div>
<script>
    $(document).ready(function () {
        $('input[type=radio][name=default-address]').change(function () {
            showLoader();
            var idd = $(this).val();
            jQuery.ajax({
                url: '<?= Yii::$app->homeUrl; ?>myaccounts/user/change-status',
                type: "POST",
                data: {id: idd},
                success: function (data) {
                    if (data == 1) {
//                            $("#useraddress-" + idd).remove();
//                            location.reload();
                    }
                    hideLoader();
                }
            });
        });
        $('.delete-address').on('click', function () {
            if (confirm("Are you sure you want to delete this?"))
            {
                var idd = $(this).attr('data-val');
                jQuery.ajax({
                    url: '<?= Yii::$app->homeUrl; ?>myaccounts/user/remove-address',
                    type: "POST",
                    data: {id: idd},
                    success: function (data) {
                        if (data == 1) {
                            $("#useraddress-" + idd).remove();
                            location.reload();
                        }
                    }
                });
            }
        });
    });
</script>

