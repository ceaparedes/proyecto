<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historialestados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HES_ID')->textInput() ?>

    <?= $form->field($model, 'REC_NUMERO')->textInput() ?>

    <?= $form->field($model, 'EST_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'HES_FECHAYHORA')->textInput() ?>

    <?= $form->field($model, 'HES_COMENTARIO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
