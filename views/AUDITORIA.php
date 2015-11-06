<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIA */
/* @var $form ActiveForm */
?>
<div class="AUDITORIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'AUD_NUMERO') ?>
        <?= $form->field($model, 'AES_ID') ?>
        <?= $form->field($model, 'AAU_ID') ?>
        <?= $form->field($model, 'DOC_CODIGO') ?>
        <?= $form->field($model, 'VER_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'USU_USU_RUT') ?>
        <?= $form->field($model, 'AUD_OBJETIVO') ?>
        <?= $form->field($model, 'AUD_ALCANCE') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- AUDITORIA -->
