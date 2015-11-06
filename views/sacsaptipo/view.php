<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPTIPO */

$this->title = $model->SST_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsaptipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsaptipo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SST_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SST_ID], [
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
            'SST_ID',
            'SST_TIPO',
        ],
    ]) ?>

</div>
