<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AUDITORIAESTADO */

$this->title = 'Create Auditoriaestado';
$this->params['breadcrumbs'][] = ['label' => 'Auditoriaestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditoriaestado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
