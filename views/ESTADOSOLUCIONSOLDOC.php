<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONSOLDOC */
/* @var $form ActiveForm */
?>
<div class="ESTADOSOLUCIONSOLDOC">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ESD_ID') ?>
        <?= $form->field($model, 'ESD_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ESTADOSOLUCIONSOLDOC -->
