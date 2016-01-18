<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\modules\administrator\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
  <div class="row">
    <div class="col-md-6">
     <?php $form = ActiveForm::begin(); ?>
     <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), [
      'pluginOptions' => [
        'onText' => 'Aktif',
        'offText' => 'Banned',
      ]
    ]) ?>

    <?php
    echo $form->field($authAssignment, 'item_name')->widget(Select2::classname(), [
      'data' => $authItems,
      'options' => [
        'placeholder' => 'Pilih role ...',
      ],
      'pluginOptions' => [
        'allowClear' => true,
        //'multiple' => true,
      ],
    ])->label('Hak Akses'); ?>
  
    </div>
    <div class="col-md-6">

      <?= $form->field($model, 'new_password') ?>
      <?= $form->field($model, 'repeat_password') ?>
      <?= $form->field($model, 'old_password') ?>
    </div>
    </div>
    <div class="row">
    <div class="pull-left">
        <?= Html::submitButton($model->isNewRecord ? 'Batal' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      
    </div>
    <div class="pull-right">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      
    </div>
     

    </div>
  </div>
   

    <?php ActiveForm::end(); ?>

</div>
