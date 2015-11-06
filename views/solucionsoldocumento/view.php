<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTO */

$this->title = $model->SSD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Solucionsoldocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionsoldocumento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SSD_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SSD_ID], [
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
            'SSD_ID',
            'USU_RUT',
            'ESD_ID',
            'SOL_ID',
            'SSD_FECHAINICIO',
            'SSD_FECHATERMINO',
        ],
    ]) ?>

</div>
