<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicants */

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
            //'applicant_personal_id',
            //'applicant_college_id',
            //'applicant_academic_id',
            //'applicant_family_id',
            'status',
			'applicantPersonal.first_name',
			'applicantPersonal.middle_name',
			'applicantPersonal.last_name',
			'applicantPersonal.city_address',
			'applicantPersonal.cellphone_no',
			'applicantPersonal.date_of_birth',
			'applicantPersonal.age',
			'applicantPersonal.status',
			'applicantPersonal.sex',
			'applicantPersonal.place_of_birth',
			'applicantPersonal.nationality',
			'applicantPersonal.height',
			'applicantPersonal.weight',
			'applicantPersonal.religion',
			'applicantAcademic.Public_high_school_graduating_from',
			'applicantAcademic.complete_school_address',
			'applicantAcademic.principal_fullname',
			'applicantAcademic.section_no',
			'applicantAcademic.organization',
			'applicantAcademic.position_held',
			'applicantFamily.name_of_father',
			'applicantFamily.father_occupation',
			'applicantFamily.father_company_address',
			'applicantFamily.father_phonenum',
			'applicantFamily.father_birthdate',
			'applicantFamily.name_of_mother',
			'applicantFamily.mother_occupation',
			'applicantFamily.mother_company_address',
			'applicantFamily.mother_phonenum',
			'applicantFamily.mother_birthdate',
			'applicantFamily.sibling1_name',
			'applicantFamily.sibling1_age',
			'applicantFamily.sibling1_school',
			'applicantFamily.sibling1_grade_or_year',
			'applicantFamily.sibling1_employed',
			'applicantFamily.sibling1_married',
			'applicantFamily.sibling2_name',
			'applicantFamily.sibling2_age',
			'applicantFamily.sibling2_school',
			'applicantFamily.sibling2_grade_or_year',
			'applicantFamily.sibling2_employed',
			'applicantFamily.sibling2_married',
			'applicantFamily.income_per_year',
			'applicantCollege.school_plan_to_enroll_in',
			'applicantCollege.course_plan_to_take1',
			'applicantCollege.course_plan_to_take2',
			'applicantFamily.date_created',
        ],
    ]) ?>

</div>
