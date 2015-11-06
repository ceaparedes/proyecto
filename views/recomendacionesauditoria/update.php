<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RECOMENDACIONESAUDITORIA */

$this->title = 'Update Recomendacionesauditoria: ' . ' ' . $model->REA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Recomendacionesauditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REA_ID, 'url' => ['view', 'id' => $model->REA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="recomendacionesauditoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
