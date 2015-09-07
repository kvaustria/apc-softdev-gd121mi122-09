<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'personal',
            'academic',
            'college',
            'family',
            // 'fileserver',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
