<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ADJUNTOS */

$this->title = $model->ADJ_ID;
$this->params['breadcrumbs'][] = ['label' => 'Adjuntos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adjuntos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ADJ_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ADJ_ID], [
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
            'ADJ_ID',
            'SOL_ID',
            'ADJ_URL:url',
        ],
    ]) ?>

</div>
