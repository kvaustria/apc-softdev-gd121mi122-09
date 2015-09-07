<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HouseholdChecklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="household-checklist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicant_name')->textInput() ?>

    <?= $form->field($model, 'address')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
