<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DETALLECAMBIOS */

$this->title = $model->ACC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Detallecambios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecambios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ACC_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ACC_ID], [
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
            'ACC_ID',
            'SOL_ID',
            'ACC_CAMBIOS',
        ],
    ]) ?>

</div>
