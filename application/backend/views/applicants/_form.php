<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Applicants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add1_house_num')->textInput() ?>

    <?= $form->field($model, 'add1_st_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add1_bry_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add1_city_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add2_house_num')->textInput() ?>

    <?= $form->field($model, 'add2_st_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add2_bry_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add2_city_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_no')->textInput() ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'place_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_of_hs_graduating_from')->textInput() ?>

    <?= $form->field($model, 'type_of_hs_graduating_from')->dropDownList([ 'PUBLIC' => 'PUBLIC', 'MASA' => 'MASA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hs_graduating_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section')->textInput() ?>

    <?= $form->field($model, 'complete_school_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_of_principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_tellno')->textInput() ?>

    <?= $form->field($model, 'organization')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position_held')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'college_to_apply1')->textInput() ?>

    <?= $form->field($model, 'college_to_apply2')->textInput() ?>

    <?= $form->field($model, 'course_plan_to_take1')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'course_plan_to_take2')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fathername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_occu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_company_Add')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'father_cellnum')->textInput() ?>

    <?= $form->field($model, 'father_birthdate')->textInput() ?>

    <?= $form->field($model, 'mothername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_occu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_company_Add')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mother_cellnum')->textInput() ?>

    <?= $form->field($model, 'mother_birthdate')->textInput() ?>

    <?= $form->field($model, 'sibling')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sibling_age')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sibling_school')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sibling_grd_yr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'employed')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'married')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'household_income_per_yr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form138')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxreturn')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
