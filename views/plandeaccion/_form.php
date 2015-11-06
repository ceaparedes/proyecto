<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plandeaccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PDA_ID')->textInput() ?>

    <?= $form->field($model, 'ESP_ID')->textInput() ?>

    <?= $form->field($model, 'CAU_ID')->textInput() ?>

    <?= $form->field($model, 'USU_RUT')->textInput() ?>

    <?= $form->field($model, 'USU_USU_RUT')->textInput() ?>

    <?= $form->field($model, 'TDA_ID')->textInput() ?>

    <?= $form->field($model, 'PDA_FECHA')->textInput() ?>

    <?= $form->field($model, 'PDA_FECHAIMPLEMENTACION')->textInput() ?>

    <?= $form->field($model, 'PDA_OBSERVACIONES')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
