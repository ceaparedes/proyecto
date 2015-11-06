<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CAUSASSACSAP */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="causassacsap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CAU_ID')->textInput() ?>

    <?= $form->field($model, 'SAC_ID')->textInput() ?>

    <?= $form->field($model, 'CAU_CAUSASIDENTIFICADAS')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
