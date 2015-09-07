<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Phase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicant')->textInput() ?>

    <?= $form->field($model, 'grade_screening')->dropDownList([ 'Passed' => 'Passed', 'Failed' => 'Failed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'screening_feedback')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'exam')->dropDownList([ 'Passed' => 'Passed', 'Failed' => 'Failed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'interview')->dropDownList([ 'Passed' => 'Passed', 'Failed' => 'Failed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'interview_feedback')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'checklist')->textInput() ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'APPROVED' => 'APPROVED', 'DISQUALIFIED' => 'DISQUALIFIED', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_attending')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
