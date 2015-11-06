<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UNIDADORIGENDOCUMENTO */
/* @var $form ActiveForm */
?>
<div class="UNIDADORIGENDOCUMENTO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'UOD_ID') ?>
        <?= $form->field($model, 'UOD_UNIDAD') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- UNIDADORIGENDOCUMENTO -->
