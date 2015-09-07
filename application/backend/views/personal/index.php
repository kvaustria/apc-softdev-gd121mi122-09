<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstname',
            'middlename',
            'lastname',
            'house_num1',
            // 'st_add1',
            // 'brgy_add1',
            // 'city_add1',
            // 'house_num2',
            // 'st_add2',
            // 'brgy_add2',
            // 'city_add2',
            // 'telno',
            // 'email_add:email',
            // 'celno',
            // 'birthdate',
            // 'age',
            // 'status',
            // 'sex',
            // 'birthplace',
            // 'nationality',
            // 'height',
            // 'weight',
            // 'religion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
