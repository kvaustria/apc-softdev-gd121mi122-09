<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AcademicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'hs_name') ?>

    <?= $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'hs_add') ?>

    <?php // echo $form->field($model, 'principal') ?>

    <?php // echo $form->field($model, 'tel_no') ?>

    <?php // echo $form->field($model, 'organization') ?>

    <?php // echo $form->field($model, 'position') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
