<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ADJUNTOS */

$this->title = 'Update Adjuntos: ' . ' ' . $model->ADJ_ID;
$this->params['breadcrumbs'][] = ['label' => 'Adjuntos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ADJ_ID, 'url' => ['view', 'id' => $model->ADJ_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adjuntos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
