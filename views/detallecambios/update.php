<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DETALLECAMBIOS */

$this->title = 'Update Detallecambios: ' . ' ' . $model->ACC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Detallecambios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ACC_ID, 'url' => ['view', 'id' => $model->ACC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detallecambios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
