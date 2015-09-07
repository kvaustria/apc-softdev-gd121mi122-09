<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'personal')->textInput() ?>

    <?= $form->field($model, 'academic')->textInput() ?>

    <?= $form->field($model, 'college')->textInput() ?>

    <?= $form->field($model, 'family')->textInput() ?>

    <?= $form->field($model, 'fileserver')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
