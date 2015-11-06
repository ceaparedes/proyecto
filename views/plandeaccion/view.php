<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCION */

$this->title = $model->PDA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Plandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plandeaccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PDA_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PDA_ID], [
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
            'PDA_ID',
            'ESP_ID',
            'CAU_ID',
            'USU_RUT',
            'USU_USU_RUT',
            'TDA_ID',
            'PDA_FECHA',
            'PDA_FECHAIMPLEMENTACION',
            'PDA_OBSERVACIONES',
        ],
    ]) ?>

</div>
