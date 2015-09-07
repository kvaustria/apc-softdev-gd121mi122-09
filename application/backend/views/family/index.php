<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Families';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Family', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'father_name',
            'father_occupation',
            'father_company',
            'father_contact',
            // 'father_birthdate',
            // 'mother_name',
            // 'mother_occupation',
            // 'mother_company',
            // 'mother_contact',
            // 'mother_birthdate',
            // 'guardian_name',
            // 'guardian_occupation',
            // 'guardian_company',
            // 'guardian_contact',
            // 'guardian_birthdate',
            // 'sibling',
            // 'household_income',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
