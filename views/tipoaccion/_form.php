<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOACCION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipoaccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OAC_ID')->textInput() ?>

    <?= $form->field($model, 'TAC_ID')->textInput() ?>

    <?= $form->field($model, 'TAC_ACCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
