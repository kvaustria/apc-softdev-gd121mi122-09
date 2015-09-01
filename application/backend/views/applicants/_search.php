<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicantsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'applicant_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'add1_house_num') ?>

    <?php // echo $form->field($model, 'add1_st_add') ?>

    <?php // echo $form->field($model, 'add1_bry_add') ?>

    <?php // echo $form->field($model, 'add1_city_add') ?>

    <?php // echo $form->field($model, 'add2_house_num') ?>

    <?php // echo $form->field($model, 'add2_st_add') ?>

    <?php // echo $form->field($model, 'add2_bry_add') ?>

    <?php // echo $form->field($model, 'add2_city_add') ?>

    <?php // echo $form->field($model, 'cell_no') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'place_of_birth') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'region_of_hs_graduating_from') ?>

    <?php // echo $form->field($model, 'type_of_hs_graduating_from') ?>

    <?php // echo $form->field($model, 'hs_graduating_from') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'complete_school_add') ?>

    <?php // echo $form->field($model, 'name_of_principal') ?>

    <?php // echo $form->field($model, 'school_tellno') ?>

    <?php // echo $form->field($model, 'organization') ?>

    <?php // echo $form->field($model, 'position_held') ?>

    <?php // echo $form->field($model, 'college_to_apply1') ?>

    <?php // echo $form->field($model, 'college_to_apply2') ?>

    <?php // echo $form->field($model, 'course_plan_to_take1') ?>

    <?php // echo $form->field($model, 'course_plan_to_take2') ?>

    <?php // echo $form->field($model, 'fathername') ?>

    <?php // echo $form->field($model, 'father_occu') ?>

    <?php // echo $form->field($model, 'father_company_Add') ?>

    <?php // echo $form->field($model, 'father_cellnum') ?>

    <?php // echo $form->field($model, 'father_birthdate') ?>

    <?php // echo $form->field($model, 'mothername') ?>

    <?php // echo $form->field($model, 'mother_occu') ?>

    <?php // echo $form->field($model, 'mother_company_Add') ?>

    <?php // echo $form->field($model, 'mother_cellnum') ?>

    <?php // echo $form->field($model, 'mother_birthdate') ?>

    <?php // echo $form->field($model, 'sibling') ?>

    <?php // echo $form->field($model, 'sibling_age') ?>

    <?php // echo $form->field($model, 'sibling_school') ?>

    <?php // echo $form->field($model, 'sibling_grd_yr') ?>

    <?php // echo $form->field($model, 'employed') ?>

    <?php // echo $form->field($model, 'married') ?>

    <?php // echo $form->field($model, 'household_income_per_yr') ?>

    <?php // echo $form->field($model, 'form138') ?>

    <?php // echo $form->field($model, 'certificate') ?>

    <?php // echo $form->field($model, 'taxreturn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
