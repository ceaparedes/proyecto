<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solucionreclamosugerencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SOR_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'REC_NUMERO')->textInput() ?>

    <?= $form->field($model, 'ERS_ID')->textInput() ?>

    <?= $form->field($model, 'SOR_PROCEDE')->textInput() ?>

    <?= $form->field($model, 'SOR_COMENTARIO')->textInput() ?>

    <?= $form->field($model, 'SOR_ANTECEDENTES')->textInput() ?>

    <?= $form->field($model, 'SOR_ACUERDO')->textInput() ?>

    <?= $form->field($model, 'SOR_FECHA')->textInput() ?>

    <?= $form->field($model, 'SOR_RESULTADOS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
