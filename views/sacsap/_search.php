<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sacsap-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SAC_ID') ?>

    <?= $form->field($model, 'SST_ID') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'SOR_ID') ?>

    <?= $form->field($model, 'HAL_NUMERO') ?>

    <?php // echo $form->field($model, 'SSO_ID') ?>

    <?php // echo $form->field($model, 'SAC_FECHA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
