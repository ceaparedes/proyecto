<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCION */

$this->title = 'Update Plandeaccion: ' . ' ' . $model->PDA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Plandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PDA_ID, 'url' => ['view', 'id' => $model->PDA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plandeaccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
