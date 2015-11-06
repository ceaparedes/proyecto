<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DIMENSION */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dimension-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DIM_ID')->textInput() ?>

    <?= $form->field($model, 'DIM_DESCRIPCION')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
