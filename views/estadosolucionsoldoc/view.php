<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONSOLDOC */

$this->title = $model->ESD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionsoldocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionsoldoc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ESD_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ESD_ID], [
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
            'ESD_ID',
            'ESD_DESCRIPCION',
        ],
    ]) ?>

</div>
