<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPDIMENSION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sacsapdimension-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SAC_ID')->textInput() ?>

    <?= $form->field($model, 'DIM_ID')->textInput() ?>

    <?= $form->field($model, 'SSD_DIMENSION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
