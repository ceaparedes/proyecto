<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECOMENDACIONESAUDITORIASearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recomendacionesauditoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'REA_ID') ?>

    <?= $form->field($model, 'AUD_NUMERO') ?>

    <?= $form->field($model, 'REA_DESCRIPCION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
