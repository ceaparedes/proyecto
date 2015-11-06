<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOACCION */

$this->title = $model->OAC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tipoaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoaccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'OAC_ID' => $model->OAC_ID, 'TAC_ID' => $model->TAC_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'OAC_ID' => $model->OAC_ID, 'TAC_ID' => $model->TAC_ID], [
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
            'OAC_ID',
            'TAC_ID',
            'TAC_ACCION',
        ],
    ]) ?>

</div>
