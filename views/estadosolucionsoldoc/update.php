<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONSOLDOC */

$this->title = 'Update Estadosolucionsoldoc: ' . ' ' . $model->ESD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionsoldocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ESD_ID, 'url' => ['view', 'id' => $model->ESD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estadosolucionsoldoc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
