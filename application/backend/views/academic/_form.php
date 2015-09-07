<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Academic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'MAPSA' => 'MAPSA', 'Public School' => 'Public School', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section')->textInput() ?>

    <?= $form->field($model, 'hs_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_no')->textInput() ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
