<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECOMENDACIONESAUDITORIA */
/* @var $form ActiveForm */
?>
<div class="RECOMENDACIONESAUDITORIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'REA_ID') ?>
        <?= $form->field($model, 'AUD_NUMERO') ?>
        <?= $form->field($model, 'REA_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- RECOMENDACIONESAUDITORIA -->
