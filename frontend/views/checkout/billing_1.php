<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\CartSummaryWidget;
use common\models\Emirates;
use yii\helpers\ArrayHelper;

$this->title = 'Checkout';
?>
<div id="wpo-mainbody" class="container wpo-mainbody">
    <!--<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a class="home" href="index.php">Home</a>&nbsp;/&nbsp;Cart&nbsp;/&nbsp;Checkout</nav>-->
    <div class="row">
        <!-- MAIN CONTENT -->
        <div id="wpo-content" class="wpo-content col-xs-12 no-sidebar checkout">
            <article id="post-8" class="post-8 page type-page status-publish hentry">

                <div class="content" data-content="">
                    <div class="wrap">
                        <div class="sidebar" role="complementary">
                            <?= CartSummaryWidget::widget(); ?>
                        </div>
                        <div class="main" role="main">
                            <div class="main__header">



                                <div data-alternative-payments="">
                                </div>

                            </div>
                            <div class="main__content">

                                <div class="step" data-step="contact_information">
                                    <form novalidate="novalidate" class="edit_checkout animate-floating-labels" data-customer-information-form="true" data-email-or-phone="false" action="" accept-charset="UTF-8" method="post">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="hidden" name="_method" value="patch">
                                        <input type="hidden" name="authenticity_token" value="">

                                        <input type="hidden" name="previous_step" id="previous_step" value="contact_information">
                                        <input type="hidden" name="step" value="shipping_method">

                                        <div class="step__sections">

                                            <div class="section section--contact-information">

                                                <div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
                                                    <div class="section section--shipping-address" data-shipping-address="" data-update-order-summary="">

                                                        <div class="section__header">
                                                            <h2 class="section__title">
                                                                Billing address
                                                            </h2>
                                                        </div>

                                                        <div class="section__content">
                                                            <div class="fieldset" data-address-fields="">
                                                                <?php $form = ActiveForm::begin(); ?>

                                                                <div class="field field--required field--show-floating-label field--three-eights ptop10" data-address-field="country" data-google-places="true">

                                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                                        <label class="field__label field__label--visible label-helper" for="checkout_shipping_address_country">Country</label>
                                                                        <select size="1" autocomplete="shipping country" data-backup="country" class="field__input field__input--select" aria-required="true" name="UserAddress[billing]" id="billing">
                                                                            <option value=''>Select</option>
                                                                            <?php
                                                                            foreach ($addresses as $address) {
                                                                                $status = $address->status == 1 ? "selected='selected'" : "";
                                                                                ?>
                                                                                <option value="<?= $address->id ?>" <?= $status ?>><?= $address->address . ', ' . $address->landmark . ', ' . $address->location ?></option>
                                                                            <?php } ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <button type="button" class="btn btn-primary btn-sm" id="new_address">  ADD A NEW ADDRESS</button>
                                                                  <!--<input class="input-checkbox" data-backup="" type="checkbox" value="1" name="" id="subscribe"><label class="checkbox__label" for="subscribe">Subscribe to our newsletter</label>-->
                                                                </div>
                                                                <div class="field field--optional field--half" data-address-field="first_name">

                                                                    <div class="form-row">
                                                                        <?= $form->field($model, 'name')->textInput(['class' => 'input-text billing']) ?>
                                                                        <!--<input type="text" name="UserAddress[name]" class="input-text" id="" placeholder="Name" />-->
                                                                        <label class="label-helper" for="input">Name</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field field--optional field--half" data-address-field="first_name">

                                                                    <div class="form-row">
                                                                        <?= $form->field($model, 'address')->textInput(['class' => 'input-text billing']) ?>
                                                                        <!--<input type="text" name="UserAddress[name]" class="input-text" id="" placeholder="Name" />-->
                                                                        <label class="label-helper" for="input">Address</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field field--optional field--half" data-address-field="first_name">

                                                                    <div class="form-row">
                                                                        <?= $form->field($model, 'location')->textInput(['class' => 'input-text billing']) ?>
                                                                        <!--<input type="text" name="UserAddress[name]" class="input-text" id="" placeholder="Name" />-->
                                                                        <label class="label-helper" for="input">Location</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field field--required field--show-floating-label field--three-eights ptop10" data-address-field="country" data-google-places="true">

                                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                                        <label class="field__label field__label--visible label-helper" for="checkout_shipping_address_country">Country</label>
                                                                        <?= $form->field($model, 'emirate')->dropDownList(ArrayHelper::map(Emirates::find()->all(), 'id', 'name'), ['prompt' => 'select'])->label(FALSE); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="field field--optional field--half" data-address-field="first_name">

                                                                    <div class="form-row">
                                                                        <?= $form->field($model, 'post_code')->textInput(['class' => 'input-text billing']) ?>
                                                                        <!--<input type="text" name="UserAddress[name]" class="input-text" id="" placeholder="Name" />-->
                                                                        <label class="label-helper" for="input">Post Code</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field field--required field--show-floating-label field--three-eights ptop10" data-address-field="country" data-google-places="true">

                                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                                        <select class="day" style="position: absolute; border-right: 1px solid #d1d2d0;height: 45px;" id="useraddress-country_code" name="UserAddress[country_code]">
                                                        <!--<select id="signupform-day" class="day" name="SignupForm[day]">-->
                                                                            <?php foreach ($country_codes as $country_code) { ?>
                                                                                <option value="<?= $country_code ?>" <?= $country_code == $model->country_code ? ' selected' : '' ?>><?= $country_code ?></option>
                                                                            <?php }
                                                                            ?>
                                                                        </select>
                                                                        <?= $form->field($model, 'mobile_number')->textInput(['class' => 'input-text billing', 'style' => 'padding-left: 70px'])->label(FALSE) ?>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="section section--half-spacing-top section--optional pad0 ptop20">
                                                        <div class="section__content">
                                                            <div class="checkbox-wrapper">
                                                                <div class="checkbox__input">
<!--                                                                    <input size="30" type="hidden" name="checkout[remember_me]">
                                                                    <input name="checkout[remember_me]" type="hidden" value="0">-->
                                                                    <input class="input-checkbox" data-backup="remember_me" type="checkbox" value="1" name="UserAddress[check]" id="checkout_remember_me">
                                                                </div>
                                                                <label class="checkbox__label" for="checkout_remember_me">
                                                                    Save this information for Shipping
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <?php ActiveForm::end(); ?>

                                                </div>
                                                <br/>
                                                <br/>
                                                <br/>
                                                <div class="clearfix"></div>
                                                <div class="step__footer" data-step-footer="">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                                                            <a class="step__footer__previous-link" href="cart.php">
                                                                <svg class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon rtl-flip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                                                <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"></path>
                                                                </svg>
                                                                <!--<span class="step__footer__previous-link-content">Return to cart</span>-->
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="wc-proceed-to-checkout">
                                                                <a href="" class="checkout-button button alt wc-forward checkout">Continue to shipping method</a>
                                                            </div>
                                                        </div>
                                                        <!--                                                    <button name="button" type="submit" class="step__footer__continue-btn btn ">
                                                                                                                <span class="btn__content">Continue to shipping method</span>
                                                                                                                <i class="btn__spinner icon icon--button-spinner"></i>
                                                                                                            </button>-->
                                                    </div>

                                                </div>

                                                <input type="hidden" name="checkout[client_details][browser_width]" value="1349">
                                                <input type="hidden" name="checkout[client_details][browser_height]" value="662">
                                                <input type="hidden" name="checkout[client_details][javascript_enabled]" value="1">
                                                </form>

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
            $('#billing').on('change', function () {
                var id = $(this).val();
                alert(id);
//                if (id === '') {
//                        $('.billing').prop('readonly', false);
//                        $('#useraddress-emirate').prop('disabled', false);
//                        $('#useraddress-country_code').prop('disabled', false);
//                } else {
//                        $('.billing').prop('readonly', true);
//                        $('#useraddress-emirate').prop('disabled', true);
//                        $('#useraddress-country_code').prop('disabled', true);
//                }
//                changeaddress('useraddress', id);
            });

            function changeaddress(formclass, id) {
                $.ajax({
                    type: "POST",
                    cache: 'false',
                    async: false,
                    url: homeUrl + 'checkout/getadress',
                    data: {id: id}
                }).done(function (data) {
                    var $data = JSON.parse(data);
                    if ($data.rslt === "success") {
                        $('#' + formclass + '-name').val($data.name);
                        $('#' + formclass + '-address').val($data.address);
                        $('#' + formclass + '-landmark').val($data.landmark);
                        $('#' + formclass + '-location').val($data.location);
                        $('#' + formclass + '-emirate').val($data.emirate);
                        $('#' + formclass + '-post_code').val($data.post_code);
                        $('#' + formclass + '-mobile_number').val($data.mobile_number);
                        $('#' + formclass + '-country_code').val($data.country_code);

                    } else {
                        $('#' + formclass + '-name').val('');
                        $('#' + formclass + '-address').val('');
                        $('#' + formclass + '-landmark').val('');
                        $('#' + formclass + '-location').val('');
                        $('#' + formclass + '-emirate').val('1');
                        $('#' + formclass + '-post_code').val('');
                        $('#' + formclass + '-mobile_number').val('');
                    }
                });
            }
        </script>