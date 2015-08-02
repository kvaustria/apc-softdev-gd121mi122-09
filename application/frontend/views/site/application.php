<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SM Foundation Online Application Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-application">
	<h1><?= Html::encode($this->title) ?></h1>
	<h4>A. Personal Background</h4><br>
	
	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'application-form']); ?>
				<?= $form->field($model, 'last_name') ?>
				<?= $form->field($model, 'first_name') ?>
				<?= $form->field($model, 'middle_name') ?>
				<?= $form->field($model, 'city_address') ?>
				<?= $form->field($model, 'telephone_no') ?>
				<?= $form->field($model, 'cellphone_no') ?>
				<?= $form->field($model, 'date_of_birth') ?>
				<?= $form->field($model, 'age') ?>
				<?= $form->field($model, 'status') ?>
				<?= $form->field($model, 'sex') ?>
				<?= $form->field($model, 'place_of_birth') ?>
				<?= $form->field($model, 'nationality') ?>
				<?= $form->field($model, 'height') ?>
				<?= $form->field($model, 'weight') ?>
				<?= $form->field($model, 'religion') ?>


				<div class="form-group">
					<?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'application-button']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
