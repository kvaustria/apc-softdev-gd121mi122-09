<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SM FOUNDATION ONLINE APPLICATION FORM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-application">
	<h1><?= Html::encode($this->title) ?></h1>
	<h3>A. PERSONAL BACKGROUND</h3>
	
	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'application-form']); ?>
				<?= $form->field($model, 'last_name') ?>
				<?= $form->field($model, 'first_name') ?>
				<?= $form->field($model, 'middle_name') ?>
				<?= $form->field($model, 'city_address') ?>
				<?= $form->field($model, 'telephone_no') ?>
				<?= $form->field($model, 'email') ?>
				<?= $form->field($model, 'cellphone_no') ?>
				<?= $form->field($model, 'birth_month') ?>
				<?= $form->field($model, 'birth_date') ?>
				<?= $form->field($model, 'birth_year') ?>
				<?= $form->field($model, 'status') ?>
				<?= $form->field($model, 'sex') ?>
				<?= $form->field($model, 'birth_place') ?>
				<?= $form->field($model, 'nationality') ?>
				<?= $form->field($model, 'height') ?>
				<?= $form->field($model, 'weight') ?>
				<?= $form->field($model, 'religion') ?>


	<h3>B. ACADEMIC BACKGROUND </h3>

				<?= $form->field($model, 'name_of_public_high_school_graduating_from') ?>
				<?= $form->field($model, 'section') ?>
				<?= $form->field($model, 'complete_address_of_school') ?>
				<?= $form->field($model, 'name_of_principal') ?>
				<?= $form->field($model, 'telephone_numbers') ?>

	<h4>Membership in Organizations in and outside the school (current year)</h4>
				<?= $form->field($model, 'organization') ?>
				<?= $form->field($model, 'position_held') ?>

	<h3>C. COLLEGE PLAN </h3>
	<h5>Kindly refer to the attached guidelines for the list of schools and courses</h5><br/>
				<?= $form->field($model, 'school_you_want_to_enroll_in') ?>
				<?= $form->field($model, 'course_you_plan_to_take') ?>
			


				<div class="form-group">
					<?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'application-button']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
