<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIAESTADO */

$this->title = 'Update Auditoriaestado: ' . ' ' . $model->AES_ID;
$this->params['breadcrumbs'][] = ['label' => 'Auditoriaestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AES_ID, 'url' => ['view', 'id' => $model->AES_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auditoriaestado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
