<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTOSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solucionsoldocumento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SSD_ID') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'ESD_ID') ?>

    <?= $form->field($model, 'SOL_ID') ?>

    <?= $form->field($model, 'SSD_FECHAINICIO') ?>

    <?php // echo $form->field($model, 'SSD_FECHATERMINO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
