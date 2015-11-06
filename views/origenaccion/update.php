<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ORIGENACCION */

$this->title = 'Update Origenaccion: ' . ' ' . $model->OAC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Origenaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OAC_ID, 'url' => ['view', 'id' => $model->OAC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="origenaccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
