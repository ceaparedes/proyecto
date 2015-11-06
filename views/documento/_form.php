<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DOCUMENTO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DOC_CODIGO')->textInput() ?>

    <?= $form->field($model, 'ODO_ID')->textInput() ?>

    <?= $form->field($model, 'UOD_ID')->textInput() ?>

    <?= $form->field($model, 'DOC_TITULO')->textInput() ?>

    <?= $form->field($model, 'DOC_TIPO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
