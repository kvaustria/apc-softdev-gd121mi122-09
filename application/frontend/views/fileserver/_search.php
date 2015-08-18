<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FileserverSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fileserver-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fileserver_id') ?>

    <?= $form->field($model, 'f138') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'certificate') ?> 
 
    <?= $form->field($model, 'photo1') ?> 
 
   <?= $form->field($model, 'taxreturn') ?> 
 
   <?= $form->field($model, 'photo2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
