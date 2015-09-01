<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Applicants */

$this->title = $model->applicant_id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicants-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->applicant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->applicant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'applicant_id',
            'first_name',
            'middle_name',
            'last_name',
            'add1_house_num',
            'add1_st_add',
            'add1_bry_add',
            'add1_city_add',
            'add2_house_num',
            'add2_st_add',
            'add2_bry_add',
            'add2_city_add',
            'cell_no',
            'date_of_birth',
            'age',
            'status',
            'sex',
            'place_of_birth',
            'nationality',
            'height',
            'weight',
            'religion',
            'region_of_hs_graduating_from',
            'type_of_hs_graduating_from',
            'hs_graduating_from',
            'section',
            'complete_school_add',
            'name_of_principal',
            'school_tellno',
            'organization:ntext',
            'position_held:ntext',
            'college_to_apply1',
            'college_to_apply2',
            'course_plan_to_take1',
            'course_plan_to_take2',
            'fathername',
            'father_occu',
            'father_company_Add:ntext',
            'father_cellnum',
            'father_birthdate',
            'mothername',
            'mother_occu',
            'mother_company_Add:ntext',
            'mother_cellnum',
            'mother_birthdate',
            'sibling:ntext',
            'sibling_age:ntext',
            'sibling_school:ntext',
            'sibling_grd_yr:ntext',
            'employed',
            'married',
            'household_income_per_yr',
        ],
    ]) ?>

</div>
