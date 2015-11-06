<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIAESTADO */

$this->title = $model->AES_ID;
$this->params['breadcrumbs'][] = ['label' => 'Auditoriaestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditoriaestado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AES_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AES_ID], [
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
            'AES_ID',
            'AES_ESTADO',
        ],
    ]) ?>

</div>
