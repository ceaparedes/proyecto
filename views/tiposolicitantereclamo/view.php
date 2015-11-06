<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOSOLICITANTERECLAMO */

$this->title = $model->TSR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tiposolicitantereclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposolicitantereclamo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->TSR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TSR_ID], [
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
            'TSR_ID',
            'TSR_TIPO',
        ],
    ]) ?>

</div>
