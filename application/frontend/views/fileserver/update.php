<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fileserver */

$this->title = 'Update Fileserver: ' . ' ' . $model->fileserver_id;
$this->params['breadcrumbs'][] = ['label' => 'Fileservers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fileserver_id, 'url' => ['view', 'id' => $model->fileserver_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fileserver-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
