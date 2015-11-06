<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLICITUD */
/* @var $form ActiveForm */
?>
<div class="ESTADOSOLICITUD">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ESO_ID') ?>
        <?= $form->field($model, 'ESO_ESTADO') ?>
        <?= $form->field($model, 'ESO_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ESTADOSOLICITUD -->
