<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'group_ID')->dropdownlist($allGroup,
        [
            'prompt'=>'--Chọn nhóm danh mục--',
            'onchange'=>'$.post("'.Yii::$app->urlManager->createUrl('product/list_category?id=').'"+$(this).val(), function( data ){$("select#product_category_id").html( data );});',
        ]);
    ?>  --> 
    <?= $form->field($model, 'group_ID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allGroup,['prompt'=>'- Chọn nhóm danh mục -']) ?>

    <?= $form->field($model, 'cateID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allCategory,['prompt'=>'- Chon nhom danh muc -','id'=>'product_category_id']) ?>

    <?= $form->field($model, 'suppliresID',['options' =>  ['class' => 'col-md-6']])->dropdownlist($allSupliers,['prompt'=>'- Chon nha cung cap -']) ?>
    
    <?= $form->field($model, 'quanlity',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <img id="previewImage">

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>'Click chọn ảnh']) ?>

    <?= Html::img(isset($model->image)?:$model->image,['options' =>['id' => 'previewImage','class' => 'col-md-6']]);?>
    <!-- <?= Html::img($model->image,['options' =>  ['class' => 'col-md-6']]);?> -->

    <?= $form->field($model, 'price',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'saleOf',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'priceSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'startSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'endSale',['options' =>  ['class' => 'col-md-6']])->textInput() ?>


    <?= $form->field($model, 'size',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color',['options' =>  ['class' => 'col-md-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluation',['options' =>  ['class' => 'col-md-6']])->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropdownlist(array('1'=>'Trạng thái hiện','0'=>'Trạng thái ẩn')) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
