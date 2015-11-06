<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPORECLAMOSUGERENCIA */
/* @var $form ActiveForm */
?>
<div class="TIPORECLAMOSUGERENCIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TIR_ID') ?>
        <?= $form->field($model, 'TIR_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- TIPORECLAMOSUGERENCIA -->
