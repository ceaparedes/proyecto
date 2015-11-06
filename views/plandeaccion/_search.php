<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCIONSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plandeaccion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PDA_ID') ?>

    <?= $form->field($model, 'ESP_ID') ?>

    <?= $form->field($model, 'CAU_ID') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'USU_USU_RUT') ?>

    <?php // echo $form->field($model, 'TDA_ID') ?>

    <?php // echo $form->field($model, 'PDA_FECHA') ?>

    <?php // echo $form->field($model, 'PDA_FECHAIMPLEMENTACION') ?>

    <?php // echo $form->field($model, 'PDA_OBSERVACIONES') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
