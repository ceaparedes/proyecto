<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOSOLICITANTERECLAMO */
/* @var $form ActiveForm */
?>
<div class="TIPOSOLICITANTERECLAMO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TSR_ID') ?>
        <?= $form->field($model, 'TSR_TIPO') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TIPOSOLICITANTERECLAMO -->
