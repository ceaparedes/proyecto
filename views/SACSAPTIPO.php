<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPTIPO */
/* @var $form ActiveForm */
?>
<div class="SACSAPTIPO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'SST_ID') ?>
        <?= $form->field($model, 'SST_TIPO') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SACSAPTIPO -->
