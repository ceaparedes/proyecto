<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOS */
/* @var $form ActiveForm */
?>
<div class="HISTORIALESTADOS">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'HES_ID') ?>
        <?= $form->field($model, 'REC_NUMERO') ?>
        <?= $form->field($model, 'EST_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'HES_COMENTARIO') ?>
        <?= $form->field($model, 'HES_FECHAYHORA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- HISTORIALESTADOS -->
