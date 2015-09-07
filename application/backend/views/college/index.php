<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colleges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="college-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create College', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'college_to_apply1',
            'college_to_apply2',
            'course_to_take1',
            'course_to_take2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
