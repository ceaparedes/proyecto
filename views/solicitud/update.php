<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SOLICITUD */

$this->title = 'Update Solicitud: ' . ' ' . $model->SOL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SOL_ID, 'url' => ['view', 'id' => $model->SOL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
