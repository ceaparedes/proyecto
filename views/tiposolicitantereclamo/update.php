<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOSOLICITANTERECLAMO */

$this->title = 'Update Tiposolicitantereclamo: ' . ' ' . $model->TSR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Tiposolicitantereclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TSR_ID, 'url' => ['view', 'id' => $model->TSR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiposolicitantereclamo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
