<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\USUARIO */
/* @var $form ActiveForm */
?>
<div class="USUARIO">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'USU_RUT') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- USUARIO -->
