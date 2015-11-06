<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTOSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="versiondocumento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DOC_CODIGO') ?>

    <?= $form->field($model, 'VER_ID') ?>

    <?= $form->field($model, 'VER_DESCRIPCION') ?>

    <?= $form->field($model, 'VER_NUMEROCOPIA') ?>

    <?= $form->field($model, 'VER_URL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
