<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOPLANDEACCION */
/* @var $form ActiveForm */
?>
<div class="ESTADOPLANDEACCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ESP_ID') ?>
        <?= $form->field($model, 'ESP_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ESTADOPLANDEACCION -->
