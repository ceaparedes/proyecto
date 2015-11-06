<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPSOLUCION */
/* @var $form ActiveForm */
?>
<div class="SACSAPSOLUCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SSS_ID') ?>
        <?= $form->field($model, 'SAC_ID') ?>
        <?= $form->field($model, 'SSS_SOLUCION') ?>
        <?= $form->field($model, 'SSS_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SACSAPSOLUCION -->
