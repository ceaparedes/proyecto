<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SACSAPSOLUCION */

$this->title = 'Create Sacsapsolucion';
$this->params['breadcrumbs'][] = ['label' => 'Sacsapsolucions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsapsolucion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
