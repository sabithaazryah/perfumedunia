<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

if (isset($meta_title) && $meta_title != '')
	$this->title = $meta_title;
else
	$this->title = 'Perfumedunia';
?>
<div id="wpo-mainbody" class="container wpo-mainbody">

    <div class="main-content faq">


        <div class="container">



            <div id="col-main">

                <?= $model->return_policy ?>

            </div>





        </div>


    </div>

</div>