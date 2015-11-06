<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIA */

$this->title = 'Update Solucionreclamosugerencia: ' . ' ' . $model->SOR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Solucionreclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SOR_ID, 'url' => ['view', 'id' => $model->SOR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solucionreclamosugerencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
