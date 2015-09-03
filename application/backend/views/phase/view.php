<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Phase */

$this->title = $model->phase_id;
$this->params['breadcrumbs'][] = ['label' => 'Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phase-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->phase_id], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'phase_id',
			'applicant_phase',
            'grade_screening',
			'points',
            'grd_screening_comment:ntext',
            'scholarship_exam',
            'exam_result_comment:ntext',
            'interview',
            'home_visit_checklist:ntext',
            'scholarship_status',
            'approved_by',
            'remarks:ntext',
            'date',
            'school_attending_to:ntext',
        ],
    ]) ?>

</div>
