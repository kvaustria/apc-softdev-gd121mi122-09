<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PhaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phase-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'applicant') ?>

    <?= $form->field($model, 'grade_screening') ?>

    <?= $form->field($model, 'screening_feedback') ?>

    <?= $form->field($model, 'exam') ?>

    <?php // echo $form->field($model, 'interview') ?>

    <?php // echo $form->field($model, 'interview_feedback') ?>

    <?php // echo $form->field($model, 'checklist') ?>

    <?php // echo $form->field($model, 'points') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'school_attending') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
