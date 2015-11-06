<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DOCUMENTO */
/* @var $form ActiveForm */
?>
<div class="DOCUMENTO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'DOC_CODIGO') ?>
        <?= $form->field($model, 'ODO_ID') ?>
        <?= $form->field($model, 'UOD_ID') ?>
        <?= $form->field($model, 'DOC_TITULO') ?>
        <?= $form->field($model, 'DOC_TIPO') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- DOCUMENTO -->
