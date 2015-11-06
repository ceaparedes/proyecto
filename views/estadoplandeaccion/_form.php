<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOPLANDEACCION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estadoplandeaccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ESP_ID')->textInput() ?>

    <?= $form->field($model, 'ESP_DESCRIPCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
