<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPODEACCION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipodeaccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TDA_ID')->textInput() ?>

    <?= $form->field($model, 'TDA_ACCION')->textInput() ?>

    <?= $form->field($model, 'TDA_DESCRIPCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
