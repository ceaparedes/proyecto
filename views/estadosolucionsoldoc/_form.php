<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONSOLDOC */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estadosolucionsoldoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ESD_ID')->textInput() ?>

    <?= $form->field($model, 'ESD_DESCRIPCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
