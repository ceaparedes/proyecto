<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ORIGENDOCUMENTO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="origendocumento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ODO_ID')->textInput() ?>

    <?= $form->field($model, 'ODO_ORIGEN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
