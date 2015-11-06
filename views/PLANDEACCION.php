<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCION */
/* @var $form ActiveForm */
?>
<div class="PLANDEACCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'PDA_ID') ?>
        <?= $form->field($model, 'ESP_ID') ?>
        <?= $form->field($model, 'TDA_ID') ?>
        <?= $form->field($model, 'CAU_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'USU_USU_RUT') ?>
        <?= $form->field($model, 'PDA_OBSERVACIONES') ?>
        <?= $form->field($model, 'PDA_FECHA') ?>
        <?= $form->field($model, 'PDA_FECHAIMPLEMENTACION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- PLANDEACCION -->
