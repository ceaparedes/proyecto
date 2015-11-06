<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOPLANDEACCION */

$this->title = 'Update Estadoplandeaccion: ' . ' ' . $model->ESP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadoplandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ESP_ID, 'url' => ['view', 'id' => $model->ESP_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estadoplandeaccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
