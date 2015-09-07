<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'personal') ?>

    <?= $form->field($model, 'academic') ?>

    <?= $form->field($model, 'college') ?>

    <?= $form->field($model, 'family') ?>

    <?php // echo $form->field($model, 'fileserver') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
