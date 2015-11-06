<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DETALLECAMBIOS */
/* @var $form ActiveForm */
?>
<div class="DETALLECAMBIOS">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ACC_ID') ?>
        <?= $form->field($model, 'SOL_ID') ?>
        <?= $form->field($model, 'ACC_CAMBIOS') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- DETALLECAMBIOS -->
