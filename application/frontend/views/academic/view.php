<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Academic */

$this->title = $model->academic_id;
$this->params['breadcrumbs'][] = ['label' => 'Academics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->academic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->academic_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::button('Next (College Plan)', array('onclick' => 'js:document.location.href="index.php?r=college/create"', 'class' => 'btn btn-info')); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Public_high_school_graduating_from',
            'complete_school_address',
            'principal_fullname',
            'section_no',
            'second_grading_grade', 
            'third_grading_grade',
            'high_school_gpa',
            'organization:ntext',
            'position_held:ntext',
            'academic_id',
        ],
    ]) ?>

</div>
