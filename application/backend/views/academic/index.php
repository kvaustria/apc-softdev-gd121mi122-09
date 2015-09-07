<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AcademicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'location',
            'type',
            'hs_name',
            'section',
            // 'hs_add',
            // 'principal',
            // 'tel_no',
            // 'organization',
            // 'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
