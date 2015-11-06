<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIA */

$this->title = 'Update Reclamosugerencia: ' . ' ' . $model->REC_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Reclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REC_NUMERO, 'url' => ['view', 'id' => $model->REC_NUMERO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reclamosugerencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
