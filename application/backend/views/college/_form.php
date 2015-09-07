<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\College */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="college-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'college_to_apply1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'college_to_apply2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_to_take1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_to_take2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
