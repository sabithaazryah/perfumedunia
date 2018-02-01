<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\MainCategory;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuManagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-management-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



                    <?= Html::a('<i class="fa-th-list"></i><span> Create New Menu</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <div class="table-responsive" style="border: none">
                        <button class="btn btn-white" id="search-option" style="float: right;">
                            <i class="linecons-search"></i>
                            <span>Search</span>
                        </button>
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                        'id',
                                [
                                    'attribute' => 'type',
                                    'filter' => ['1' => 'Main', '2' => 'Sub'],
                                    'value' => function($data) {
                                        if ($data->type == 1) {
                                            return 'Main';
                                        } elseif ($data->type == 2) {
                                            return 'Sub';
                                        } else {
                                            return '';
                                        }
                                    }
                                ],
                                'main_menu',
                                [
                                    'attribute' => 'main_menu_id',
                                    'filter' => ArrayHelper::map(MainCategory::find()->all(), 'id', 'main_category'),
                                    'value' => function($data) {
                                        if ($data->type == 2) {
                                            return MainCategory::findOne($data->main_menu_id)->main_category;
                                        } else {
                                            return '';
                                        }
                                    }
                                ],
//                                [
//                                    'attribute' => 'sub_menu_id',
//                                    'filter' => ArrayHelper::map(Category::find()->all(), 'id', 'category'),
//                                    'value' => function($data) {
//                                        if ($data->type == 2) {
//                                            return Category::findOne($data->sub_menu_id)->category;
//                                        } else {
//                                            return '';
//                                        }
//                                    }
//                                ],
                                'sub_menu_link',
                                // 'status',
                                // 'CB',
                                // 'UB',
                                // 'DOC',
                                // 'DOU',
                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header' => 'Action',
//          'headerOptions' => ['style' => 'color:#337ab7'],
                                    'template' => '{update}{delete}',
                                    'buttons' => [
                                        'preview' => function ($url, $model) {
                                            return Html::a('<span class="fa fa-share"></span>', $url, [
                                                        'title' => Yii::t('app', 'Preview'),
                                                        'target' => '_blank',
                                            ]);
                                        },
//
                                    ],
                                    'urlCreator' => function ($action, $model, $key, $index) {
                                        if ($action === 'update') {
                                            $url = 'update?id=' . $model->id;
                                            return $url;
                                        }
                                        if ($action === 'delete') {
                                            $url = 'delete?id=' . $model->id;
                                            return $url;
                                        }
//
                                    }
                                ],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

