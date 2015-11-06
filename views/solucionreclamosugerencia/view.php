<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIA */

$this->title = $model->SOR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Solucionreclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionreclamosugerencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SOR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SOR_ID], [
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
            'SOR_ID',
            'USU_RUT',
            'REC_NUMERO',
            'ERS_ID',
            'SOR_PROCEDE',
            'SOR_COMENTARIO',
            'SOR_ANTECEDENTES',
            'SOR_ACUERDO',
            'SOR_FECHA',
            'SOR_RESULTADOS',
        ],
    ]) ?>

</div>
