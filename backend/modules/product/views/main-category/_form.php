<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MainCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-category-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="rows">
        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'main_category')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>
        </div>
    </div>
    <div class='col-md-4 col-sm-6 col-xs-12' style="float:right;">
        <div class="form-group" style="float: right;">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
