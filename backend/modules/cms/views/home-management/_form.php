<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\HomeManagement */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .type-category{
        display: none;
    }
</style>
<div class="home-management-form form-inline">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd' style="<?= $model->isNewRecord ? '' : 'pointer-events:none' ?>">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'type')->dropDownList(['0' => 'Latest product', '1' => 'Todays Exclusive', '2' => 'Single banner', '3' => 'Double Banner', '4' => 'Tripple Banner']) ?>

        </div>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd type-product' style="<?= $model->type == 0 || $model->type == 1 ? 'display:block' : 'display:none' ?>">
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?= $form->field($model, 'tittle')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(common\models\Category::find()->all(), 'id', 'category'), ['prompt' => 'select category', 'class' => 'form-control']) ?>

        </div>
        <div class='col-md-4 col-sm-4 col-xs-12 left_padd'>
            <?= $form->field($model, 'subcategory')->dropDownList(ArrayHelper::map(common\models\SubCategory::find()->all(), 'id', 'sub_category'), ['prompt' => 'select Subcategory', 'class' => 'form-control']) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?php
            if (!$model->isNewRecord && $model->product_id != '') {
                $model->product_id = explode(',', $model->product_id);
            }
            ?>
            <?= $form->field($model, 'product_id')->dropDownList(ArrayHelper::map(common\models\Product::find()->all(), 'id', 'product_name'), ['prompt' => 'select Product', 'class' => 'form-control', 'multiple' => 'multiple']) ?>

        </div>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd type-category' style="<?= $model->type == 2 || $model->type == 3 || $model->type == 4 ? 'display:block' : 'display:none' ?>">
        <div class="col-md-12 col-sm-12 col-xs-12 left_padd single double tripple" style="margin-bottom: 25px;padding-right: 0px; <?= $model->type == 2 || $model->type == 3 || $model->type == 4 ? 'display:block' : 'display:none' ?>">
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'image_1')->fileInput() ?>
                <?php if (isset($model->image_1) && $model->image_1 != '') { ?>
                    <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/home_management/<?= $model->id ?>/image1.<?= $model->image_1; ?>?<?= rand() ?>" width="230" height="100"/>

                    <?php
                } elseif (!empty($model->image_1)) {
                    echo "";
                }
                ?>
            </div>

            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'link_1')->textInput(['maxlength' => true]) ?>

            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 left_padd double tripple" style="margin-bottom: 25px;padding-right: 0px;<?= $model->type == 3 || $model->type == 4 ? 'display:block' : 'display:none' ?>">
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'image_2')->fileInput() ?>
                <?php if (isset($model->image_2) && $model->image_2 != '') { ?>
                    <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/home_management/<?= $model->id ?>/image2.<?= $model->image_2; ?>?<?= rand() ?>" width="230" height="100"/>

                    <?php
                } elseif (!empty($model->image_2)) {
                    echo "";
                }
                ?>
            </div>

            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'link_2')->textInput(['maxlength' => true]) ?>

            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 left_padd tripple" style="margin-bottom: 25px;padding-right: 0px;<?= $model->type == 4 ? 'display:block' : 'display:none' ?>">
            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'image_3')->fileInput() ?>
                <?php if (isset($model->image_3) && $model->image_3 != '') { ?>
                    <img src="<?= Yii::$app->homeUrl ?>../uploads/cms/home_management/<?= $model->id ?>/image3.<?= $model->image_3; ?>?<?= rand() ?>" width="230" height="100"/>

                    <?php
                } elseif (!empty($model->image_3)) {
                    echo "";
                }
                ?>
            </div>

            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'link_3')->textInput(['maxlength' => true]) ?>

            </div>
        </div>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'sort_order')->textInput() ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>

        </div>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;float:right;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function () {
        $("#homemanagement-category").select2({
            placeholder: 'Choose Category',
            allowClear: true
        }).on('select2-open', function ()
        {
            // Adding Custom Scrollbar
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });
        $("#homemanagement-subcategory").select2({
            placeholder: 'Choose Category',
            allowClear: true
        }).on('select2-open', function ()
        {
            // Adding Custom Scrollbar
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });
        $("#homemanagement-product_id").select2({
            placeholder: 'Choose Category',
            allowClear: true
        }).on('select2-open', function ()
        {
            // Adding Custom Scrollbar
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });
        $("#homemanagement-category").on('change', function () {
            var category_id = $(this).val();
            $.ajax({
                url: homeUrl + 'cms/home-management/change-category',
                type: "post",
                data: {category: category_id},
                success: function (data) {
                    var res = $.parseJSON(data);
                    $('#homemanagement-subcategory').html(res.result['subcategory']);
                    $('#homemanagement-product_id').html(res.result['products']);
                }, error: function () {
                }
            });
        });
        $("#homemanagement-subcategory").on('change', function () {
            var category_id = $("#productmapping-category").val();
            var subcategory_id = $(this).val();
            $.ajax({
                url: homeUrl + 'cms/home-management/change-subcategory',
                type: "post",
                data: {category: category_id, subcategory: subcategory_id},
                success: function (data) {
                    $('#homemanagement-product_id').html(data);
                }, error: function () {
                }
            });
        });

        $("#homemanagement-type").on('change', function () {
            var id = $(this).val();
            if (id == 0 || id == 1) {
                $(".type-product").css("display", "block");
                $(".type-category").css("display", "none");
            } else {
                $(".type-product").css("display", "none");
                $(".type-category").css("display", "block");
                $(".tripple").css("display", "none");
                if (id == 2) {
                    $(".single").css("display", "block");
                }
                if (id == 3) {
                    $(".double").css("display", "block");
                }
                if (id == 4) {
                    $(".tripple").css("display", "block");
                }
            }
        });

    });
</script>
