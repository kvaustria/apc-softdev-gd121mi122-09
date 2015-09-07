<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Applicant */

$this->title = 'Create Applicant';
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model1' => $model1,
		'model2' => $model2,
		'model3' => $model3,
    ]) ?>

</div>
