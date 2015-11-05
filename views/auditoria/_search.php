<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIASearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AUD_NUMERO') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'AES_ID') ?>

    <?= $form->field($model, 'AAU_ID') ?>

    <?= $form->field($model, 'DOC_CODIGO') ?>

    <?php // echo $form->field($model, 'VER_ID') ?>

    <?php // echo $form->field($model, 'USU_USU_RUT') ?>

    <?php // echo $form->field($model, 'AUD_OBJETIVO') ?>

    <?php // echo $form->field($model, 'AUD_ALCANCE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
