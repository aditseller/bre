<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobFunction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-function-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12"><div class="col-md-6"><?= $form->field($model, 'function')->textInput(['maxlength' => true]) ?></div></div>

    <div class="form-group col-md-12">
      <div class="col-md-6">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-primary btn-lg']) ?>
    </div></div>

    <?php ActiveForm::end(); ?>

</div>
