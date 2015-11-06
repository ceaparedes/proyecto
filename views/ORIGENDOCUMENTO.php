<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ORIGENDOCUMENTO */
/* @var $form ActiveForm */
?>
<div class="ORIGENDOCUMENTO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ODO_ID') ?>
        <?= $form->field($model, 'ODO_ORIGEN') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ORIGENDOCUMENTO -->
