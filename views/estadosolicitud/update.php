<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLICITUD */

$this->title = 'Update Estadosolicitud: ' . ' ' . $model->ESO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadosolicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ESO_ID, 'url' => ['view', 'id' => $model->ESO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estadosolicitud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
