<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AreasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'area_id') ?>

    <?= $form->field($model, 'NCR') ?>

    <?= $form->field($model, 'ISABELA') ?>

    <?= $form->field($model, 'CAR') ?>

    <?= $form->field($model, 'PANGASINAN') ?>

    <?php // echo $form->field($model, 'ZAMBALES') ?>

    <?php // echo $form->field($model, 'NUEVA_ECIJA') ?>

    <?php // echo $form->field($model, 'TARLAC') ?>

    <?php // echo $form->field($model, 'PAMPANGA') ?>

    <?php // echo $form->field($model, 'BULACAN') ?>

    <?php // echo $form->field($model, 'CAVITE') ?>

    <?php // echo $form->field($model, 'LAGUNA') ?>

    <?php // echo $form->field($model, 'BATANGAS') ?>

    <?php // echo $form->field($model, 'QUEZON') ?>

    <?php // echo $form->field($model, 'CAMARINES SUR') ?>

    <?php // echo $form->field($model, 'NEGROS_OCCIDENTAL') ?>

    <?php // echo $form->field($model, 'ILOILO') ?>

    <?php // echo $form->field($model, 'CEBU') ?>

    <?php // echo $form->field($model, 'LEYTE') ?>

    <?php // echo $form->field($model, 'PALAWAN') ?>

    <?php // echo $form->field($model, 'DAVAO') ?>

    <?php // echo $form->field($model, 'SOUTH_COTABATO') ?>

    <?php // echo $form->field($model, 'MISAMIS_ORIENTAL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
