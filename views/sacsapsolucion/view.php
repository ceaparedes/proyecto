<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPSOLUCION */

$this->title = $model->SSS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsapsolucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsapsolucion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SSS_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SSS_ID], [
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
            'SSS_ID',
            'SAC_ID',
            'SSS_SOLUCION',
            'SSS_FECHA',
        ],
    ]) ?>

</div>
