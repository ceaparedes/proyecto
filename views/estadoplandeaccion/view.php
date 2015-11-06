<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOPLANDEACCION */

$this->title = $model->ESP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadoplandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadoplandeaccion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ESP_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ESP_ID], [
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
            'ESP_ID',
            'ESP_DESCRIPCION',
        ],
    ]) ?>

</div>
