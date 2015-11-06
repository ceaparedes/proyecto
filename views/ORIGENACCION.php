<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ORIGENACCION */
/* @var $form ActiveForm */
?>
<div class="ORIGENACCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'OAC_ID') ?>
        <?= $form->field($model, 'OAC_ORIGEN') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ORIGENACCION -->
