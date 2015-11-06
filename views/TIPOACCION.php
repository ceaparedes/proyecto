<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOACCION */
/* @var $form ActiveForm */
?>
<div class="TIPOACCION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'OAC_ID') ?>
        <?= $form->field($model, 'TAC_ID') ?>
        <?= $form->field($model, 'TAC_ACCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TIPOACCION -->
