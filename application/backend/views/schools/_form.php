<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Schools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schools')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->dropDownList([ 'NCR' => 'NCR', 'PROVINCIAL' => 'PROVINCIAL', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
