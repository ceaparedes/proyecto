<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPODEACCION */
/* @var $form ActiveForm */
?>
<div class="TIPODEACCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TDA_ID') ?>
        <?= $form->field($model, 'TDA_ACCION') ?>
        <?= $form->field($model, 'TDA_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TIPODEACCION -->
