<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIASearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reclamosugerencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'REC_NUMERO') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'EST_ID') ?>

    <?= $form->field($model, 'TSR_ID') ?>

    <?= $form->field($model, 'TIR_ID') ?>

    <?php // echo $form->field($model, 'REC_FECHA') ?>

    <?php // echo $form->field($model, 'REC_REPARTICION') ?>

    <?php // echo $form->field($model, 'REC_HORA') ?>

    <?php // echo $form->field($model, 'REC_MOTIVO') ?>

    <?php // echo $form->field($model, 'REC_VISTOBUENO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
