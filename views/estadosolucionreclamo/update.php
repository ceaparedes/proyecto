<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONRECLAMO */

$this->title = 'Update Estadosolucionreclamo: ' . ' ' . $model->ERS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionreclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ERS_ID, 'url' => ['view', 'id' => $model->ERS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estadosolucionreclamo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
