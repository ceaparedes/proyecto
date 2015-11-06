<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLICITUD */
/* @var $form ActiveForm */
?>
<div class="SOLICITUD">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SOL_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'OAC_ID') ?>
        <?= $form->field($model, 'TAC_ID') ?>
        <?= $form->field($model, 'DOC_CODIGO') ?>
        <?= $form->field($model, 'VER_ID') ?>
        <?= $form->field($model, 'ESO_ID') ?>
        <?= $form->field($model, 'SOL_UNIDAD') ?>
        <?= $form->field($model, 'SOL_FUNDAMENTO') ?>
        <?= $form->field($model, 'SOL_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SOLICITUD -->
