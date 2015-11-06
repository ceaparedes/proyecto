<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HALLAZGOS */
/* @var $form ActiveForm */
?>
<div class="HALLAZGOS">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'HAL_NUMERO') ?>
        <?= $form->field($model, 'AUD_NUMERO') ?>
        <?= $form->field($model, 'HAL_TIPO') ?>
        <?= $form->field($model, 'HAL_REQUISITO') ?>
        <?= $form->field($model, 'HAL_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- HALLAZGOS -->
