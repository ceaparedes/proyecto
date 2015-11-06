<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DETALLECAMBIOSSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecambios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ACC_ID') ?>

    <?= $form->field($model, 'SOL_ID') ?>

    <?= $form->field($model, 'ACC_CAMBIOS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
