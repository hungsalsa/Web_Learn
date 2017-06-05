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

    <?= $form->field($model, 'group_ID')->dropdownlist($allGroup,
        [
            'prompt'=>'--Chọn nhóm danh mục--',
            'onchange'=>'$.post("'.Yii::$app->urlManager->createUrl('departments/list_branch?id=').'"+$(this).val(), function( data ){$("select#product-cateid").html( data );});',
        ]);
    ?>  
    <?= $form->field($model, 'group_ID')->dropdownlist($allGroup,['prompt'=>'- Chọn nhóm danh mục -']) ?>

    <?= $form->field($model, 'cateID')->dropdownlist($allCategory,['prompt'=>'- Chon nhom danh muc -']) ?>

    <?= $form->field($model, 'suppliresID')->dropdownlist($allSupliers,['prompt'=>'- Chon nha cung cap -']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>'imageFile','placeholder'=>'Click chọn ảnh']) ?>
    
    <?= $form->field($model, 'saleOf')->textInput() ?>

    <?= $form->field($model, 'startSale')->textInput() ?>

    <?= $form->field($model, 'endSale')->textInput() ?>

    <?= $form->field($model, 'priceSale')->textInput() ?>

    <?= $form->field($model, 'quanlity')->textInput() ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluation')->textInput() ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
