<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DIMENSION */
/* @var $form ActiveForm */
?>
<div class="DIMENSION">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'DIM_ID') ?>
        <?= $form->field($model, 'DIM_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- DIMENSION -->
