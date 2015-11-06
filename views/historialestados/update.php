<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOS */

$this->title = 'Update Historialestados: ' . ' ' . $model->HES_ID;
$this->params['breadcrumbs'][] = ['label' => 'Historialestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HES_ID, 'url' => ['view', 'id' => $model->HES_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historialestados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
