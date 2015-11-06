<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTO */

$this->title = 'Update Solucionsoldocumento: ' . ' ' . $model->SSD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Solucionsoldocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SSD_ID, 'url' => ['view', 'id' => $model->SSD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solucionsoldocumento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
