<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANAUDITORIASearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planauditoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AAU_ID') ?>

    <?= $form->field($model, 'AAU_FECHAINICIO') ?>

    <?= $form->field($model, 'AAU_FECHAEJECUCION') ?>

    <?= $form->field($model, 'AAU_FECHACIERRE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
