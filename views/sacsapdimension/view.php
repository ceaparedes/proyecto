<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPDIMENSION */

$this->title = $model->DIM_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsapdimensions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsapdimension-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'DIM_ID' => $model->DIM_ID, 'SAC_ID' => $model->SAC_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'DIM_ID' => $model->DIM_ID, 'SAC_ID' => $model->SAC_ID], [
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
            'SAC_ID',
            'DIM_ID',
            'SSD_DIMENSION',
        ],
    ]) ?>

</div>
