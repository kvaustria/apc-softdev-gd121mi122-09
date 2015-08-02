<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Family */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_of_father')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_company_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'father_phonenum')->textInput() ?>

    <?= $form->field($model, 'father_birthdate')->textInput() ?>

    <?= $form->field($model, 'name_of_mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_company_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mother_phonenum')->textInput() ?>

    <?= $form->field($model, 'mother_birthdate')->textInput() ?>

    <?= $form->field($model, 'sibling1_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling1_age')->textInput() ?>

    <?= $form->field($model, 'sibling1_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling1_grade/year')->textInput() ?>

    <?= $form->field($model, 'sibling1_employed')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling1_married')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling2_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling2_age')->textInput() ?>

    <?= $form->field($model, 'sibling2_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling2_grade/year')->textInput() ?>

    <?= $form->field($model, 'sibling2_employed')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling2_married')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'income_per_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income_per_year_in_words')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
