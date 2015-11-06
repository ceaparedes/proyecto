<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ORIGENDOCUMENTO */

$this->title = 'Update Origendocumento: ' . ' ' . $model->ODO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Origendocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ODO_ID, 'url' => ['view', 'id' => $model->ODO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="origendocumento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
