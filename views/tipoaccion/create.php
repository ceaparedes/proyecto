<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TIPOACCION */

$this->title = 'Create Tipoaccion';
$this->params['breadcrumbs'][] = ['label' => 'Tipoaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoaccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
