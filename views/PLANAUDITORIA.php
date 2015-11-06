<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANAUDITORIA */
/* @var $form ActiveForm */
?>
<div class="PLANAUDITORIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'AAU_ID') ?>
        <?= $form->field($model, 'AAU_FECHAINICIO') ?>
        <?= $form->field($model, 'AAU_FECHAEJECUCION') ?>
        <?= $form->field($model, 'AAU_FECHACIERRE') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- PLANAUDITORIA -->
