<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Academic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Public_high_school_graduating_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complete_school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principal_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_no')->textInput() ?>

    <?= $form->field($model, 'organization')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position_held')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
