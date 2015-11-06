<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ADJUNTOS */
/* @var $form ActiveForm */
?>
<div class="ADJUNTOS">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ADJ_ID') ?>
        <?= $form->field($model, 'SOL_ID') ?>
        <?= $form->field($model, 'ADJ_URL') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ADJUNTOS -->
