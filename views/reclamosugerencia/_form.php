<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reclamosugerencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'REC_NUMERO')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'EST_ID')->textInput() ?>

    <?= $form->field($model, 'TSR_ID')->textInput() ?>

    <?= $form->field($model, 'TIR_ID')->textInput() ?>

    <?= $form->field($model, 'REC_FECHA')->textInput() ?>

    <?= $form->field($model, 'REC_REPARTICION')->textInput() ?>

    <?= $form->field($model, 'REC_HORA')->textInput() ?>

    <?= $form->field($model, 'REC_MOTIVO')->textInput() ?>

    <?= $form->field($model, 'REC_VISTOBUENO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
