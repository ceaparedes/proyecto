<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLICITUD */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SOL_ID')->textInput() ?>

    <?= $form->field($model, 'DOC_CODIGO')->textInput() ?>

    <?= $form->field($model, 'VER_ID')->textInput() ?>

    <?= $form->field($model, 'ESO_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'OAC_ID')->textInput() ?>

    <?= $form->field($model, 'TAC_ID')->textInput() ?>

    <?= $form->field($model, 'SOL_FECHA')->textInput() ?>

    <?= $form->field($model, 'SOL_UNIDAD')->textInput() ?>

    <?= $form->field($model, 'SOL_FUNDAMENTO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
