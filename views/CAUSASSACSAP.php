<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CAUSASSACSAP */
/* @var $form ActiveForm */
?>
<div class="CAUSASSACSAP">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'CAU_ID') ?>
        <?= $form->field($model, 'SAC_ID') ?>
        <?= $form->field($model, 'CAU_CAUSASIDENTIFICADAS') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- CAUSASSACSAP -->
