<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Area;

/* @var $this yii\web\View */
/* @var $model common\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <h2>Personal</h2>
	
	<?= $form->field($model2, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'lastname')->textInput(['maxlength' => true]) ?>
	
	PRIMARY ADDRESS
    <?= $form->field($model2, 'house_num1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'st_add1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'brgy_add1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'city_add1')->textInput(['maxlength' => true]) ?>
	
	SECONDARY ADDRESS
    <?= $form->field($model2, 'house_num2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'st_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'brgy_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'city_add2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'telno')->textInput() ?>

    <?= $form->field($model2, 'email_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'celno')->textInput() ?>

    <?= $form->field($model2, 'birthdate')->textInput() ?>

    <?= $form->field($model2, 'age')->textInput() ?>

    <?= $form->field($model2, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', ], ['prompt' => '']) ?>

    <?= $form->field($model2, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model2, 'birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'nationality')->textInput(['maxlength' => true]) ?>
	
	<p>(in cm)</p>
    <?= $form->field($model2, 'height')->textInput() ?>
	<p>(in kg)</p>
    <?= $form->field($model2, 'weight')->textInput() ?>

    <?= $form->field($model2, 'religion')->textInput(['maxlength' => true]) ?>
	
	<h2>Academic Background</h2>
	<?= $form->field($model3, 'location')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model3, 'location')->dropDownList(
	ArrayHelper::map(Area::find()->all(), 'id','location'),
	['prompt'=>'Select HS location']
	) ?>

    <?= $form->field($model3, 'type')->dropDownList([ 'MAPSA' => 'MAPSA', 'Public School' => 'Public School', ], ['prompt' => '']) ?>

    <?= $form->field($model3, 'hs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model3, 'section')->textInput() ?>

    <?= $form->field($model3, 'hs_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model3, 'principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model3, 'tel_no')->textInput() ?>

    <?= $form->field($model3, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model3, 'position')->textInput(['maxlength' => true]) ?>
	
    <div class="form-group">
        <?= Html::submitButton($model1->isNewRecord ? 'Create' : 'Update', ['class' => $model1->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
