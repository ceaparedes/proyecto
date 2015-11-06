<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTO */
/* @var $form ActiveForm */
?>
<div class="SOLUCIONSOLDOCUMENTO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SSD_ID') ?>
        <?= $form->field($model, 'ESD_ID') ?>
        <?= $form->field($model, 'SOL_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'SSD_FECHAINICIO') ?>
        <?= $form->field($model, 'SSD_FECHATERMINO') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SOLUCIONSOLDOCUMENTO -->
