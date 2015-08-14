<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker

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

    <?= $form->field($model, 'father_birthdate')->widget(
                DatePicker::className(), [
                // inline too, not bad
                 'inline' => false, 
                 // modify template for custom rendering
          //      'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]

    ]); ?>


    <?= $form->field($model, 'name_of_mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_company_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mother_phonenum')->textInput() ?>

    <?= $form->field($model, 'mother_birthdate')->widget(
                DatePicker::className(), [
                // inline too, not bad
                 'inline' => false, 
                 // modify template for custom rendering
          //      'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]

    ]); ?>


    <?= $form->field($model, 'sibling1_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling1_age')->textInput() ?>

    <?= $form->field($model, 'sibling1_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling1_grade_or_year')->textInput() ?>

    <?= $form->field($model, 'sibling1_employed')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling1_married')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling2_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling2_age')->textInput() ?>

    <?= $form->field($model, 'sibling2_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling2_grade_or_year')->textInput() ?>

    <?= $form->field($model, 'sibling2_employed')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sibling2_married')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'income_per_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income_per_year_in_words')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
