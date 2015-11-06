<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UNIDADORIGENDOCUMENTO */

$this->title = 'Update Unidadorigendocumento: ' . ' ' . $model->UOD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Unidadorigendocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UOD_ID, 'url' => ['view', 'id' => $model->UOD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidadorigendocumento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
