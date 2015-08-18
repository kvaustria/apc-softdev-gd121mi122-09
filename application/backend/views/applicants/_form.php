<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicant_personal_id')->textInput() ?>

    <?= $form->field($model, 'applicant_college_id')->textInput() ?>

    <?= $form->field($model, 'applicant_academic_id')->textInput() ?>

    <?= $form->field($model, 'applicant_family_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Pending' => 'Pending', 'Approved' => 'Approved', 'Denied' => 'Denied', '' => '', ], ['prompt' => 'Pending']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
