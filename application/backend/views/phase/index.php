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

            'id',
            'applicant',
            'grade_screening',
            'screening_feedback:ntext',
            'exam',
            // 'interview',
            // 'interview_feedback:ntext',
            // 'checklist',
            // 'points',
            // 'status',
            // 'remarks:ntext',
            // 'approved_by',
            // 'school_attending',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
