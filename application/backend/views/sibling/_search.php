<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiblingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sibling-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sibling_name') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'school') ?>

    <?= $form->field($model, 'grd_yr') ?>

    <?php // echo $form->field($model, 'employed') ?>

    <?php // echo $form->field($model, 'married') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
