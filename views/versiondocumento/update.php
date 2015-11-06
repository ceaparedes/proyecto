<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTO */

$this->title = 'Update Versiondocumento: ' . ' ' . $model->DOC_CODIGO;
$this->params['breadcrumbs'][] = ['label' => 'Versiondocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DOC_CODIGO, 'url' => ['view', 'DOC_CODIGO' => $model->DOC_CODIGO, 'VER_ID' => $model->VER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="versiondocumento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
