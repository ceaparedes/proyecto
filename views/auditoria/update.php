<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIA */

$this->title = 'Update Auditoria: ' . ' ' . $model->AUD_NUMERO;
$this->params['breadcrumbs'][] = ['label' => 'Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AUD_NUMERO, 'url' => ['view', 'id' => $model->AUD_NUMERO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auditoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
