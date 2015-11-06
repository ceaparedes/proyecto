<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TIPORECLAMOSUGERENCIA */

$this->title = 'Create Tiporeclamosugerencia';
$this->params['breadcrumbs'][] = ['label' => 'Tiporeclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiporeclamosugerencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
