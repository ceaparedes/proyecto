<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RECOMENDACIONESAUDITORIA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recomendacionesauditoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'REA_ID')->textInput() ?>

    <?= $form->field($model, 'AUD_NUMERO')->textInput() ?>

    <?= $form->field($model, 'REA_DESCRIPCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
