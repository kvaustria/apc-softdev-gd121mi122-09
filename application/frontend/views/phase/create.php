<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Phase */

$this->title = 'Create Phase';
$this->params['breadcrumbs'][] = ['label' => 'Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
