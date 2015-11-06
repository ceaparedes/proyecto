<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONRECLAMO */
/* @var $form ActiveForm */
?>
<div class="ESTADOSOLUCIONRECLAMO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ERS_ID') ?>
        <?= $form->field($model, 'ERS_ESTADO') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ESTADOSOLUCIONRECLAMO -->
