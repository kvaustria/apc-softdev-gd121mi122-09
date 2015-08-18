<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fileserver */

$this->title = $model->fileserver_id;
$this->params['breadcrumbs'][] = ['label' => 'Fileservers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fileserver-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fileserver_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fileserver_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::button('Done', array('onclick' => 'js:document.location.href="index.php?r=site/about"', 'class' => 'btn btn-info')); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fileserver_id',
            'f138',
            'photo',
            'certificate', 
            'photo1', 
            'taxreturn', 
            'photo2', 
        ],
    ]) ?>

</div>
