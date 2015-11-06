<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PLANAUDITORIA */

$this->title = 'Update Planauditoria: ' . ' ' . $model->AAU_ID;
$this->params['breadcrumbs'][] = ['label' => 'Planauditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AAU_ID, 'url' => ['view', 'id' => $model->AAU_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planauditoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
