<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIA */

$this->title = $model->REC_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Reclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclamosugerencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->REC_NUMERO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->REC_NUMERO], [
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
            'REC_NUMERO',
            'USU_RUT',
            'EST_ID',
            'TSR_ID',
            'TIR_ID',
            'REC_FECHA',
            'REC_REPARTICION',
            'REC_HORA',
            'REC_MOTIVO',
            'REC_VISTOBUENO',
        ],
    ]) ?>

</div>
