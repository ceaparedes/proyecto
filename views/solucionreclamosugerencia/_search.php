<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIASearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solucionreclamosugerencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SOR_ID') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'REC_NUMERO') ?>

    <?= $form->field($model, 'ERS_ID') ?>

    <?= $form->field($model, 'SOR_PROCEDE') ?>

    <?php // echo $form->field($model, 'SOR_COMENTARIO') ?>

    <?php // echo $form->field($model, 'SOR_ANTECEDENTES') ?>

    <?php // echo $form->field($model, 'SOR_ACUERDO') ?>

    <?php // echo $form->field($model, 'SOR_FECHA') ?>

    <?php // echo $form->field($model, 'SOR_RESULTADOS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
