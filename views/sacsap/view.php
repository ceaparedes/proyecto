<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAP */

$this->title = $model->SAC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SAC_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SAC_ID], [
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
            'SST_ID',
            'USU_RUT',
            'SOR_ID',
            'HAL_NUMERO',
            'SSO_ID',
            'SAC_FECHA',
        ],
    ]) ?>

</div>
