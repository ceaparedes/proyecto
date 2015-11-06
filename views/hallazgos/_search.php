<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HALLAZGOSSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hallazgos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HAL_NUMERO') ?>

    <?= $form->field($model, 'AUD_NUMERO') ?>

    <?= $form->field($model, 'HAL_TIPO') ?>

    <?= $form->field($model, 'HAL_REQUISITO') ?>

    <?= $form->field($model, 'HAL_DESCRIPCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
