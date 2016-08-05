<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


 ?>

 <div class="company-search">

<?php $form = ActiveForm::begin([
        'action'=>['index'],
        'method'=>'get',
]); ?>


<?= $form->field($model, 'id_company') ?>
<?= $form->field($model, 'company') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'phone') ?>
<?= $form->field($model, 'city') ?>
<?= $form->field($model, 'province') ?>

<div class="form-group">
<?= Html::submitButton('Search',['class'=>'btn btn-primary']) ?>
<?= Html::resetButton('Reset',['class'=>'btn btn-default']) ?>
</div>

<?php ActiveForm::end(); ?>

 </div>
