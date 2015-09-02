<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicantsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicants-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicants', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'applicant_id',
            'first_name',
            'middle_name',
            'last_name',
            'add1_house_num',
            // 'add1_st_add',
            // 'add1_bry_add',
            // 'add1_city_add',
            // 'add2_house_num',
            // 'add2_st_add',
            // 'add2_bry_add',
            // 'add2_city_add',
            // 'cell_no',
            // 'date_of_birth',
            // 'age',
            // 'status',
            // 'sex',
            // 'place_of_birth',
            // 'nationality',
            // 'height',
            // 'weight',
            // 'religion',
            // 'region_of_hs_graduating_from',
            // 'type_of_hs_graduating_from',
            // 'hs_graduating_from',
            // 'section',
            // 'complete_school_add',
            // 'name_of_principal',
            // 'school_tellno',
            // 'organization:ntext',
            // 'position_held:ntext',
            // 'college_to_apply1',
            // 'college_to_apply2',
            // 'course_plan_to_take1',
            // 'course_plan_to_take2',
            // 'fathername',
            // 'father_occu',
            // 'father_company_Add:ntext',
            // 'father_cellnum',
            // 'father_birthdate',
            // 'mothername',
            // 'mother_occu',
            // 'mother_company_Add:ntext',
            // 'mother_cellnum',
            // 'mother_birthdate',
            // 'sibling',
            // 'sibling_age',
            // 'sibling_school:ntext',
            // 'sibling_grd_yr:ntext',
            // 'employed',
            // 'married',
            // 'household_income_per_yr',
            // 'form138',
            // 'certificate',
            // 'taxreturn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
