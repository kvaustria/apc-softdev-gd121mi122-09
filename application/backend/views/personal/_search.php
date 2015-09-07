<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'middlename') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'house_num1') ?>

    <?php // echo $form->field($model, 'st_add1') ?>

    <?php // echo $form->field($model, 'brgy_add1') ?>

    <?php // echo $form->field($model, 'city_add1') ?>

    <?php // echo $form->field($model, 'house_num2') ?>

    <?php // echo $form->field($model, 'st_add2') ?>

    <?php // echo $form->field($model, 'brgy_add2') ?>

    <?php // echo $form->field($model, 'city_add2') ?>

    <?php // echo $form->field($model, 'telno') ?>

    <?php // echo $form->field($model, 'email_add') ?>

    <?php // echo $form->field($model, 'celno') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthplace') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
