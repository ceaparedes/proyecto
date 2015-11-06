<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DETALLECAMBIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecambios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ACC_ID')->textInput() ?>

    <?= $form->field($model, 'SOL_ID')->textInput() ?>

    <?= $form->field($model, 'ACC_CAMBIOS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
