<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Phase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grade_screening')->dropDownList([ 'PASSED' => 'PASSED', 'FAILED' => 'FAILED', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'grd_screening_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'scholarship_exam')->dropDownList([ 'PASSED' => 'PASSED', 'FAILED' => 'FAILED', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'exam_result_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'interview')->dropDownList([ 'PASSED' => 'PASSED', 'FAILED' => 'FAILED', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'home_visit_checklist')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'scholarship_status')->dropDownList([ 'ACCEPTED' => 'ACCEPTED', 'DISQUALIFIED' => 'DISQUALIFIED', 'PENDING' => 'PENDING', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'applicant_phase')->textInput() ?>

    <?= $form->field($model, 'school_attending_to')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
