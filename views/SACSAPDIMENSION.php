<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPDIMENSION */
/* @var $form ActiveForm */
?>
<div class="SACSAPDIMENSION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SAC_ID') ?>
        <?= $form->field($model, 'DIM_ID') ?>
        <?= $form->field($model, 'SSD_DIMENSION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SACSAPDIMENSION -->
