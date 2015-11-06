<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="versiondocumento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DOC_CODIGO')->textInput() ?>

    <?= $form->field($model, 'VER_ID')->textInput() ?>

    <?= $form->field($model, 'VER_DESCRIPCION')->textInput() ?>

    <?= $form->field($model, 'VER_NUMEROCOPIA')->textInput() ?>

    <?= $form->field($model, 'VER_URL')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
