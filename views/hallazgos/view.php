<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HALLAZGOS */

$this->title = $model->HAL_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Hallazgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hallazgos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->HAL_NUMERO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->HAL_NUMERO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'HAL_NUMERO',
            'AUD_NUMERO',
            'HAL_TIPO',
            'HAL_REQUISITO',
            'HAL_DESCRIPCION',
        ],
    ]) ?>

</div>
