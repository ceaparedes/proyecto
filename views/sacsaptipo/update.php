<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPTIPO */

$this->title = 'Update Sacsaptipo: ' . ' ' . $model->SST_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsaptipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SST_ID, 'url' => ['view', 'id' => $model->SST_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sacsaptipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
