<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALSOLICITUD */

$this->title = 'Create Historialsolicitud';
$this->params['breadcrumbs'][] = ['label' => 'Historialsolicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historialsolicitud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
