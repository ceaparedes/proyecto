<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALSOLICITUD */

$this->title = 'Update Historialsolicitud: ' . ' ' . $model->HSO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Historialsolicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HSO_ID, 'url' => ['view', 'id' => $model->HSO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historialsolicitud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
