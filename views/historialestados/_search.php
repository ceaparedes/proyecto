<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOSSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historialestados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HES_ID') ?>

    <?= $form->field($model, 'REC_NUMERO') ?>

    <?= $form->field($model, 'EST_ID') ?>

    <?= $form->field($model, 'USU_RUT') ?>

    <?= $form->field($model, 'HES_FECHAYHORA') ?>

    <?php // echo $form->field($model, 'HES_COMENTARIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
