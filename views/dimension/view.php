<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DIMENSION */

$this->title = $model->DIM_ID;
$this->params['breadcrumbs'][] = ['label' => 'Dimensions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dimension-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->DIM_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DIM_ID], [
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
            'DIM_ID',
            'DIM_DESCRIPCION',
        ],
    ]) ?>

</div>
