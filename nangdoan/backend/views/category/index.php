<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;
// use backend\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh mục';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới danh mục', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCate',
            'cateName',
            'icon',
            'parent_id',
            // [
            //     'label' => 'parent_id',

            //     'value' => function ($model) {
            //         return $model::Balance();
            //     }
                
            // ],
            // 'keywords',
            // 'description:ntext',
            // 'order',
            // 'group_ID',
            // 'status',
            [
                'label' => 'status',

                'value' => function ($data) {
                    if ($data['status']==1) {
                        return "Hiện";
                    } else {
                        return "Ẩn";
                    }
                    
                    // echo "<pre>";print_r($data['status']);
                    // die();
                }
                
            ],
            // 'created_at',
            // 'updated_at',

            // ['class' => 'yii\grid\ActionColumn'],
            [
              'class' => 'yii\grid\ActionColumn',
              'header' => 'Actions',
              'headerOptions' => ['style' => 'width:8%;color:#337ab7'],
              'template' => '{view}{update}{delete}',
              'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('app', 'Chi tiết danh mục'),
                                'contentOptions' => ['style' => 'padding-right:5px;'],
                    ]);
                },

                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('app', 'Sửa danh mục'),
                    ]);
                },
                'delete' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('app', 'Xóa danh mục'),
                    ]);
                }

              ],
         
            ],
        ],
    ]); ?>
</div>
