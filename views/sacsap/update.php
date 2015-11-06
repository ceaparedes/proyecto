<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAP */

$this->title = 'Update Sacsap: ' . ' ' . $model->SAC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SAC_ID, 'url' => ['view', 'id' => $model->SAC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sacsap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
