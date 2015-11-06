<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ESTADOPLANDEACCION */

$this->title = 'Create Estadoplandeaccion';
$this->params['breadcrumbs'][] = ['label' => 'Estadoplandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadoplandeaccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
