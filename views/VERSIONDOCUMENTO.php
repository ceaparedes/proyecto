<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTO */
/* @var $form ActiveForm */
?>
<div class="VERSIONDOCUMENTO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'DOC_CODIGO') ?>
        <?= $form->field($model, 'VER_ID') ?>
        <?= $form->field($model, 'VER_NUMEROCOPIA') ?>
        <?= $form->field($model, 'VER_DESCRIPCION') ?>
        <?= $form->field($model, 'VER_URL') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- VERSIONDOCUMENTO -->
