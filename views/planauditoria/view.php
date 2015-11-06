<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PLANAUDITORIA */

$this->title = $model->AAU_ID;
$this->params['breadcrumbs'][] = ['label' => 'Planauditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planauditoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AAU_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AAU_ID], [
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
            'AAU_ID',
            'AAU_FECHAINICIO',
            'AAU_FECHAEJECUCION',
            'AAU_FECHACIERRE',
        ],
    ]) ?>

</div>
