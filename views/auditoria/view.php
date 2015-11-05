<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIA */

$this->title = $model->AUD_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AUD_NUMERO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AUD_NUMERO], [
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
            'AUD_NUMERO',
            'USU_RUT',
            'AES_ID',
            'AAU_ID',
            'DOC_CODIGO',
            'VER_ID',
            'USU_USU_RUT',
            'AUD_OBJETIVO',
            'AUD_ALCANCE',
        ],
    ]) ?>

</div>
