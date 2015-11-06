<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONRECLAMO */

$this->title = 'Create Estadosolucionreclamo';
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionreclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionreclamo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
