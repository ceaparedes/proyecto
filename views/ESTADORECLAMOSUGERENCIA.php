<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADORECLAMOSUGERENCIA */
/* @var $form ActiveForm */
?>
<div class="ESTADORECLAMOSUGERENCIA">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'EST_ID') ?>
        <?= $form->field($model, 'EST_DESCRIPCION') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ESTADORECLAMOSUGERENCIA -->
