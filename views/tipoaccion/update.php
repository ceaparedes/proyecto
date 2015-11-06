<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOACCION */

$this->title = 'Update Tipoaccion: ' . ' ' . $model->OAC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tipoaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->OAC_ID, 'url' => ['view', 'OAC_ID' => $model->OAC_ID, 'TAC_ID' => $model->TAC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoaccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
