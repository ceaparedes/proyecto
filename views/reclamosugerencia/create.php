<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RECLAMOSUGERENCIA */

$this->title = 'Create Reclamosugerencia';
$this->params['breadcrumbs'][] = ['label' => 'Reclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclamosugerencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
