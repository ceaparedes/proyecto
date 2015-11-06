<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DOCUMENTO */

$this->title = 'Update Documento: ' . ' ' . $model->DOC_CODIGO;
$this->params['breadcrumbs'][] = ['label' => 'Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DOC_CODIGO, 'url' => ['view', 'id' => $model->DOC_CODIGO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="documento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
