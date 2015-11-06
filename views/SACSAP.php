<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAP */
/* @var $form ActiveForm */
?>
<div class="SACSAP">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SAC_ID') ?>
        <?= $form->field($model, 'SST_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'SSO_ID') ?>
        <?= $form->field($model, 'SOR_ID') ?>
        <?= $form->field($model, 'HAL_NUMERO') ?>
        <?= $form->field($model, 'SAC_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SACSAP -->
