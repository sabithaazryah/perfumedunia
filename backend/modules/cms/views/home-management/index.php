<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomeManagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-management-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">




                                        <div class="table-responsive" style="border: none">
                                                <button class="btn btn-white" id="search-option" style="float: right;">
                                                        <i class="linecons-search"></i>
                                                        <span>Search</span>
                                                </button>
                                                <?=
                                                GridView::widget([
                                                    'dataProvider' => $dataProvider,
                                                    'filterModel' => $searchModel,
                                                    'rowOptions' => function ($model, $key, $index, $grid) {
                                                            return ['data-id' => $model->id];
                                                    },
                                                    'columns' => [
                                                            ['class' => 'yii\grid\SerialColumn'],
                                                            [
                                                            'attribute' => 'type',
                                                            'filter' => ['0' => 'Latest product', '1' => 'Todays Exclusive', '2' => 'Single banner', '3' => 'Double Banner', '4' => 'Tripple Banner'],
                                                            'value' => function($data) {
                                                                    return $data->getType($data->type);
                                                            }
                                                        ],
                                                        'tittle',
//                                                            [
//                                                            'attribute' => 'product_id',
//                                                            'value' => function($model, $key, $index, $column) {
//                                                                    if (isset($model->product_id) && $model->product_id != '') {
//                                                                            return $model->getProducts($model->product_id);
//                                                                    }
//                                                            },
//                                                            'filter' => ArrayHelper::map(common\models\Product::find()->asArray()->all(), 'id', 'product_name'),
//                                                        ],
//                                                        'image_1',
//                                                        'link_1',
                                                        [
                                                            'class' => 'yii\grid\ActionColumn',
                                                            'header' => 'Actions',
                                                            'template' => '{update}',
                                                            'buttons' => [
                                                                'update' => function ($url, $model) {
                                                                        return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                                                    'title' => Yii::t('app', 'update'),
                                                                                    'class' => '',
                                                                        ]);
                                                                },
                                                            ],
                                                            'urlCreator' => function ($action, $model) {
                                                                    if ($action === 'update') {
                                                                            $url = Url::to(['update', 'id' => $model->id]);
                                                                            return $url;
                                                                    }
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
<?php
$this->registerJs("
$(document).on('click', 'td', function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this)
            location.href = '" . Url::to(['home-management/update']) . "?id=' + id;
    });

");
?>
<script>
        $(document).ready(function () {
                $(".filters").slideToggle();
                $("#search-option").click(function () {
                        $(".filters").slideToggle();
                });
        });
</script>

