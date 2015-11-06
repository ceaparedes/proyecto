<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UNIDADORIGENDOCUMENTO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidadorigendocumento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UOD_ID')->textInput() ?>

    <?= $form->field($model, 'UOD_UNIDAD')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
