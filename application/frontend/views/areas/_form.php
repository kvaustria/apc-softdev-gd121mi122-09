<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Areas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NCR')->dropDownList([ 'METRO MANILA/RIZAL' => 'METRO MANILA/RIZAL', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ISABELA')->dropDownList([ 'CAUAYAN' => 'CAUAYAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'CAR')->dropDownList([ 'BAGUIO' => 'BAGUIO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'PANGASINAN')->dropDownList([ 'ROSALES' => 'ROSALES', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ZAMBALES')->dropDownList([ 'OLONGAPO' => 'OLONGAPO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'NUEVA_ECIJA')->dropDownList([ 'CABANATUAN' => 'CABANATUAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'TARLAC')->dropDownList([ 'TARLAC' => 'TARLAC', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'PAMPANGA')->dropDownList([ 'CLARK' => 'CLARK', 'SAN FERNANDO' => 'SAN FERNANDO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'BULACAN')->dropDownList([ 'BALIWAG' => 'BALIWAG', 'MARILAO' => 'MARILAO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'CAVITE')->dropDownList([ 'BACOOR' => 'BACOOR', 'DASMARINAS' => 'DASMARINAS', 'MOLINO' => 'MOLINO', 'ROSARIO' => 'ROSARIO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'LAGUNA')->dropDownList([ 'STA ROSA' => 'STA ROSA', 'CALAMBA' => 'CALAMBA', 'SAN PABLO' => 'SAN PABLO', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'BATANGAS')->dropDownList([ 'BATANGAS' => 'BATANGAS', 'LIPA' => 'LIPA', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'QUEZON')->dropDownList([ 'LUCENA' => 'LUCENA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'CAMARINES SUR')->dropDownList([ 'NAGA' => 'NAGA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'NEGROS_OCCIDENTAL')->dropDownList([ 'BACOLOD' => 'BACOLOD', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ILOILO')->dropDownList([ 'ILOILO' => 'ILOILO', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'CEBU')->dropDownList([ 'CEBU' => 'CEBU', 'CONSOLACION' => 'CONSOLACION', 'SRP' => 'SRP', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'LEYTE')->dropDownList([ 'HERNANI' => 'HERNANI', 'TACLOBAN' => 'TACLOBAN', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'PALAWAN')->dropDownList([ 'PUERTO PRINCESA' => 'PUERTO PRINCESA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'DAVAO')->dropDownList([ 'DAVAO' => 'DAVAO', 'LANANG' => 'LANANG', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'SOUTH_COTABATO')->dropDownList([ 'GENSAN' => 'GENSAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'MISAMIS_ORIENTAL')->dropDownList([ 'CDO' => 'CDO', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
