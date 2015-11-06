<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIA */
/* @var $form ActiveForm */
?>
<div class="SOLUCIONRECLAMOSUGERENCIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SOR_ID') ?>
        <?= $form->field($model, 'USU_RUT') ?>
        <?= $form->field($model, 'REC_NUMERO') ?>
        <?= $form->field($model, 'ERS_ID') ?>
        <?= $form->field($model, 'SOR_PROCEDE') ?>
        <?= $form->field($model, 'SOR_ACUERDO') ?>
        <?= $form->field($model, 'SOR_COMENTARIO') ?>
        <?= $form->field($model, 'SOR_ANTECEDENTES') ?>
        <?= $form->field($model, 'SOR_RESULTADOS') ?>
        <?= $form->field($model, 'SOR_FECHA') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SOLUCIONRECLAMOSUGERENCIA -->
