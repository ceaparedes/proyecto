<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLICITUD */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estadosolicitud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ESO_ID')->textInput() ?>

    <?= $form->field($model, 'ESO_ESTADO')->textInput() ?>

    <?= $form->field($model, 'ESO_FECHA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
