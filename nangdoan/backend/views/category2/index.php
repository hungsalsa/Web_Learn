<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;
// use frontend\models\Category;
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
            // 'icon',
            'parent_id',
            [
             'attribute'=>'parent_id',
            // 'format'=>'html',
             'value' => function ($data) {
//               echo "<pre>";print_r($data->parent_id);
// die();
              if($data['parent_id']==0){
                return $data['cateName'];
              }else{
                $catSub1 = new Category();
                $dataCatSub1 = $catSub1->getCategoryParent($data['parent_id']);
//                    echo "<pre>";print_r($dataCatSub1[$data['idCate']]);
// die();
                return  $dataCatSub1[$data['idCate']];
              }
// $data['parent_id'];  id danh muc cha
              // $cat = new Category();
              // $dataCat = $cat->getCategoryByParent();
                     
                 }
             ],
            // 'keywords',
            // 'description:ntext',
            // 'order',
            // 'group_ID',
            // 'status',
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
