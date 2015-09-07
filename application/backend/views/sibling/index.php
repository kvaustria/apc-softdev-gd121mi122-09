<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiblingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siblings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sibling-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sibling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sibling_name',
            'age',
            'school',
            'grd_yr',
            // 'employed',
            // 'married',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
