 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fileserver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fileserver-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'f138')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput();	?>

    <hr/><br/>

    <?= $form->field($model, 'certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file2')->fileInput();	?>

    <br/><hr/>

    <?= $form->field($model, 'taxreturn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file3')->fileInput();	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>