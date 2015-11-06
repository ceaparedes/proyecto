<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CAUSASSACSAP */

$this->title = 'Update Causassacsap: ' . ' ' . $model->CAU_ID;
$this->params['breadcrumbs'][] = ['label' => 'Causassacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CAU_ID, 'url' => ['view', 'id' => $model->CAU_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="causassacsap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
