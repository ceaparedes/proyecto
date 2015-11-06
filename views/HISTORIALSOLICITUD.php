<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALSOLICITUD */
/* @var $form ActiveForm */
?>
<div class="HISTORIALSOLICITUD">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'HSO_ID') ?>
        <?= $form->field($model, 'ESO_ID') ?>
        <?= $form->field($model, 'SOL_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'HSO_COMENTARIO') ?>
        <?= $form->field($model, 'HSO_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- HISTORIALSOLICITUD -->
