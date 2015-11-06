<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solucionsoldocumento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SSD_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'ESD_ID')->textInput() ?>

    <?= $form->field($model, 'SOL_ID')->textInput() ?>

    <?= $form->field($model, 'SSD_FECHAINICIO')->textInput() ?>

    <?= $form->field($model, 'SSD_FECHATERMINO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
