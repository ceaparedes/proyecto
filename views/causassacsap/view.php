<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CAUSASSACSAP */

$this->title = $model->CAU_ID;
$this->params['breadcrumbs'][] = ['label' => 'Causassacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="causassacsap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CAU_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CAU_ID], [
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
            'CAU_ID',
            'SAC_ID',
            'CAU_CAUSASIDENTIFICADAS',
        ],
    ]) ?>

</div>
