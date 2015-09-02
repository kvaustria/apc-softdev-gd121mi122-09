<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AreasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Areas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Areas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'area_id',
            'NCR',
            'ISABELA',
            'CAR',
            'PANGASINAN',
            // 'ZAMBALES',
            // 'NUEVA_ECIJA',
            // 'TARLAC',
            // 'PAMPANGA',
            // 'BULACAN',
            // 'CAVITE',
            // 'LAGUNA',
            // 'BATANGAS',
            // 'QUEZON',
            // 'CAMARINES SUR',
            // 'NEGROS_OCCIDENTAL',
            // 'ILOILO',
            // 'CEBU',
            // 'LEYTE',
            // 'PALAWAN',
            // 'DAVAO',
            // 'SOUTH_COTABATO',
            // 'MISAMIS_ORIENTAL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
