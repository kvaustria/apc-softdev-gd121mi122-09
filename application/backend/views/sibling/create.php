<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sibling */

$this->title = 'Create Sibling';
$this->params['breadcrumbs'][] = ['label' => 'Siblings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sibling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
