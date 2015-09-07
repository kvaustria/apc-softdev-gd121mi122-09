<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Family */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_contact')->textInput() ?>

    <?= $form->field($model, 'father_birthdate')->textInput() ?>

    <?= $form->field($model, 'mother_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_contact')->textInput() ?>

    <?= $form->field($model, 'mother_birthdate')->textInput() ?>

    <?= $form->field($model, 'guardian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guardian_contact')->textInput() ?>

    <?= $form->field($model, 'guardian_birthdate')->textInput() ?>

    <?= $form->field($model, 'sibling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'household_income')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
