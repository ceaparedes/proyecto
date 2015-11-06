<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPORIGEN */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sacsaporigen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SSO_ID')->textInput() ?>

    <?= $form->field($model, 'SSO_ORIGEN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
