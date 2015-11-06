<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPORECLAMOSUGERENCIA */

$this->title = 'Update Tiporeclamosugerencia: ' . ' ' . $model->TIR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tiporeclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TIR_ID, 'url' => ['view', 'id' => $model->TIR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiporeclamosugerencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
