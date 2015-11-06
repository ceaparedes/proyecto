<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIA */
/* @var $form ActiveForm */
?>
<div class="RECLAMOSUGERENCIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'REC_NUMERO') ?>
        <?= $form->field($model, 'TSR_ID') ?>
        <?= $form->field($model, 'TIR_ID') ?>
        <?= $form->field($model, 'EST_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'REC_REPARTICION') ?>
        <?= $form->field($model, 'REC_MOTIVO') ?>
        <?= $form->field($model, 'REC_VISTOBUENO') ?>
        <?= $form->field($model, 'REC_FECHA') ?>
        <?= $form->field($model, 'REC_HORA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- RECLAMOSUGERENCIA -->
