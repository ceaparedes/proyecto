<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AUD_NUMERO')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'AES_ID')->textInput() ?>

    <?= $form->field($model, 'AAU_ID')->textInput() ?>

    <?= $form->field($model, 'DOC_CODIGO')->textInput() ?>

    <?= $form->field($model, 'VER_ID')->textInput() ?>

    <?= $form->field($model, 'USU_USU_RUT')->textInput() ?>

    <?= $form->field($model, 'AUD_OBJETIVO')->textInput() ?>

    <?= $form->field($model, 'AUD_ALCANCE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
