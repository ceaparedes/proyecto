<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONRECLAMOSUGERENCIA */

$this->title = 'Create Solucionreclamosugerencia';
$this->params['breadcrumbs'][] = ['label' => 'Solucionreclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionreclamosugerencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
