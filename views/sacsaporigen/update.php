<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SACSAPORIGEN */

$this->title = 'Update Sacsaporigen: ' . ' ' . $model->SSO_ID;
$this->params['breadcrumbs'][] = ['label' => 'Sacsaporigens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SSO_ID, 'url' => ['view', 'id' => $model->SSO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sacsaporigen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
