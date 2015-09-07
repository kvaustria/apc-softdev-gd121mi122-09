<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FamilySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'father_name') ?>

    <?= $form->field($model, 'father_occupation') ?>

    <?= $form->field($model, 'father_company') ?>

    <?= $form->field($model, 'father_contact') ?>

    <?php // echo $form->field($model, 'father_birthdate') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_occupation') ?>

    <?php // echo $form->field($model, 'mother_company') ?>

    <?php // echo $form->field($model, 'mother_contact') ?>

    <?php // echo $form->field($model, 'mother_birthdate') ?>

    <?php // echo $form->field($model, 'guardian_name') ?>

    <?php // echo $form->field($model, 'guardian_occupation') ?>

    <?php // echo $form->field($model, 'guardian_company') ?>

    <?php // echo $form->field($model, 'guardian_contact') ?>

    <?php // echo $form->field($model, 'guardian_birthdate') ?>

    <?php // echo $form->field($model, 'sibling') ?>

    <?php // echo $form->field($model, 'household_income') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
