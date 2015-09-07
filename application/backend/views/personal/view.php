<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Personal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-view">

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
            'firstname',
            'middlename',
            'lastname',
            'house_num1',
            'st_add1',
            'brgy_add1',
            'city_add1',
            'house_num2',
            'st_add2',
            'brgy_add2',
            'city_add2',
            'telno',
            'email_add:email',
            'celno',
            'birthdate',
            'age',
            'status',
            'sex',
            'birthplace',
            'nationality',
            'height',
            'weight',
            'religion',
        ],
    ]) ?>

</div>
