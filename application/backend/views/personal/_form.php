<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_num1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_add1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brgy_add1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_add1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_num2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'st_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brgy_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telno')->textInput() ?>

    <?= $form->field($model, 'email_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celno')->textInput() ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
