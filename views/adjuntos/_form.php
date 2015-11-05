<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ADJUNTOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adjuntos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ADJ_ID')->textInput() ?>

    <?= $form->field($model, 'SOL_ID')->textInput() ?>

    <?= $form->field($model, 'ADJ_URL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
