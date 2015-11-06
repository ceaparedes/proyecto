<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONRECLAMO */

$this->title = $model->ERS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionreclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionreclamo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ERS_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ERS_ID], [
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
            'ERS_ID',
            'ERS_ESTADO',
        ],
    ]) ?>

</div>
