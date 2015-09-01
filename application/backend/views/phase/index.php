<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PhaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phase-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'phase_id',
            'grade_screening',
            'scholarship_exam:ntext',
            'interview:ntext',
            'home_visit_checklist:ntext',
            // 'points',
            // 'scholarship_status',
            // 'approved_by',
            // 'remarks:ntext',
            // 'date',
            // 'applicant_phase',
            // 'school_attending_to:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
