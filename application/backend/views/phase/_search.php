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

    <?= $form->field($model, 'phase_id') ?>

    <?= $form->field($model, 'grade_screening') ?>

    <?= $form->field($model, 'grd_screening_comment') ?>

    <?= $form->field($model, 'scholarship_exam') ?>

    <?= $form->field($model, 'exam_result_comment') ?>

    <?php // echo $form->field($model, 'interview') ?>

    <?php // echo $form->field($model, 'home_visit_checklist') ?>

    <?php // echo $form->field($model, 'points') ?>

    <?php // echo $form->field($model, 'scholarship_status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'applicant_phase') ?>

    <?php // echo $form->field($model, 'school_attending_to') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
