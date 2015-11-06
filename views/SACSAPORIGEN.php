<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPORIGEN */
/* @var $form ActiveForm */
?>
<div class="SACSAPORIGEN">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SSO_ID') ?>
        <?= $form->field($model, 'SSO_ORIGEN') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SACSAPORIGEN -->
