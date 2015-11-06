<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOS */

$this->title = $model->HES_ID;
$this->params['breadcrumbs'][] = ['label' => 'Historialestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historialestados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->HES_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->HES_ID], [
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
            'HES_ID',
            'REC_NUMERO',
            'EST_ID',
            'USU_RUT',
            'HES_FECHAYHORA',
            'HES_COMENTARIO',
        ],
    ]) ?>

</div>
