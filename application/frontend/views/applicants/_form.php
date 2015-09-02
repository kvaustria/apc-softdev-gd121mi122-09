<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker

/* @var $this yii\web\View */
/* @var $model common\models\Applicants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <br><br><h4>A. Personal Background</h4><br/>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>
    <?= $form->field($model, 'add1_house_num')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'add1_st_add')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'add1_bry_add')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'add1_city_add')->textInput(['maxlength' => true]) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'add2_house_num')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'add2_st_add')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'add2_bry_add')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'add2_city_add')->textInput(['maxlength' => true]) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'cell_no')->textInput() ?>

             </th>
             <th>

    <?= $form->field($model, 'date_of_birth')->widget(
                  DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                         // modify template for custom rendering
                 //       'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                ]);?>

            </th>
            <th>

    <?= $form->field($model, 'age')->textInput() ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', ], ['prompt' => 'Select']) ?>
            </th>
            <th>

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select']) ?>
            
            </th>
            <th>

    <?= $form->field($model, 'place_of_birth')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'height')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'weight')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

            </th>
        </tr>
    </table>



    <hr/><h4>B. Academic Background</h4><br> 
    <table>
        <tr>
            <th>

    <?= $form->field($model, 'region_of_hs_graduating_from')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'type_of_hs_graduating_from')->dropDownList([ 'PUBLIC' => 'PUBLIC', 'MASA' => 'MASA', ], ['prompt' => 'Select']) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'hs_graduating_from')->textInput(['maxlength' => true]) ?>

            </th>
            <th>

    <?= $form->field($model, 'section')->textInput() ?>

            </th>
        </tr>
    </table>

    <?= $form->field($model, 'complete_school_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_of_principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_tellno')->textInput() ?>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'organization')->textarea(['rows' => 6]) ?>

            </th>
            <th>

    <?= $form->field($model, 'position_held')->textarea(['rows' => 6]) ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'college_to_apply1')->textInput() ?>

            </th>
            <th>

    <?= $form->field($model, 'college_to_apply2')->textInput() ?>

            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>

    <?= $form->field($model, 'course_plan_to_take1')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => 'Select']) ?>

            </th>
            <th>

    <?= $form->field($model, 'course_plan_to_take2')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => 'Select']) ?>

            </th>
        </tr>
    </table>

    <hr/><h4>C. Family Background</h4><br>
    <table>
        <tr>
            <th>

    <?= $form->field($model, 'fathername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_occu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_company_Add')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'father_cellnum')->textInput() ?>

    <?= $form->field($model, 'father_birthdate')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
      //              'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-M-yyyy'
                    ]
            ]);?>

            </th>
            <th>

    <?= $form->field($model, 'mothername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_occu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_company_Add')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mother_cellnum')->textInput() ?>

    <?= $form->field($model, 'mother_birthdate')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                     'inline' => false, 
                     // modify template for custom rendering
   //                 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-M-yyyy'
                    ]
            ]);?>

            </th>
        </tr>
    </table>


    <?= $form->field($model, 'sibling')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sibling_age')->textInput() ?>

    <?= $form->field($model, 'sibling_school')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sibling_grd_yr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'employed')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'married')->dropDownList([ 'YES' => 'YES', 'NO' => 'NO', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'household_income_per_yr')->textInput(['maxlength' => true]) ?>

    <hr/><h4>D. Other Requirements</h4><br>

    <?= $form->field($model, 'file1')->fileInput(); ?>

    <?= $form->field($model, 'file2')->fileInput(); ?>

    <?= $form->field($model, 'file3')->fileInput(); ?>

    <hr/>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
