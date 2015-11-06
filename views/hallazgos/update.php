<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HALLAZGOS */

$this->title = 'Update Hallazgos: ' . ' ' . $model->HAL_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Hallazgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HAL_NUMERO, 'url' => ['view', 'id' => $model->HAL_NUMERO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hallazgos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
