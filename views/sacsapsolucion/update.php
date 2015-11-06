<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPSOLUCION */

$this->title = 'Update Sacsapsolucion: ' . ' ' . $model->SSS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsapsolucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SSS_ID, 'url' => ['view', 'id' => $model->SSS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sacsapsolucion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
