<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAP */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sacsap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SAC_ID')->textInput() ?>

    <?= $form->field($model, 'SST_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'SOR_ID')->textInput() ?>

    <?= $form->field($model, 'HAL_NUMERO')->textInput() ?>

    <?= $form->field($model, 'SSO_ID')->textInput() ?>

    <?= $form->field($model, 'SAC_FECHA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
