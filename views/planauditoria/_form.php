<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANAUDITORIA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planauditoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AAU_ID')->textInput() ?>

    <?= $form->field($model, 'AAU_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'AAU_FECHAEJECUCION')->textInput() ?>

    <?= $form->field($model, 'AAU_FECHACIERRE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
