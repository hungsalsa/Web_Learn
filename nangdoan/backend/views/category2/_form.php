<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cateName',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>'Click chọn ảnh']) ?>

    <?= $form->field($model, 'group_ID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allGroup,['prompt'=>'->Chọn nhóm sản phẩm<-']) ?>

    <?= $form->field($model, 'parent_id',['options' =>  ['class' => 'col-md-6']])->dropdownlist($dataCat,['prompt'=>'->Chọn danh mục<-'])?>

    <?= $form->field($model, 'keywords')->textarea() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'status',['options' =>  ['class' => 'col-md-6']])->dropdownlist(array('1'=>'Trạng thái hiện','0'=>'Trạng thái ẩn')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới danh mục' : 'Cập nhật danh mục', ['class' => $model->isNewRecord ? 'btn btn-success pull-right col-md-2' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
