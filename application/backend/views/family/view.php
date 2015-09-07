<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Family */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'father_name',
            'father_occupation',
            'father_company',
            'father_contact',
            'father_birthdate',
            'mother_name',
            'mother_occupation',
            'mother_company',
            'mother_contact',
            'mother_birthdate',
            'guardian_name',
            'guardian_occupation',
            'guardian_company',
            'guardian_contact',
            'guardian_birthdate',
            'sibling',
            'household_income',
        ],
    ]) ?>

</div>
