<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTO */

$this->title = $model->DOC_CODIGO;
$this->params['breadcrumbs'][] = ['label' => 'Versiondocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versiondocumento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'DOC_CODIGO' => $model->DOC_CODIGO, 'VER_ID' => $model->VER_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'DOC_CODIGO' => $model->DOC_CODIGO, 'VER_ID' => $model->VER_ID], [
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
            'DOC_CODIGO',
            'VER_ID',
            'VER_DESCRIPCION',
            'VER_NUMEROCOPIA',
            'VER_URL:url',
        ],
    ]) ?>

</div>
