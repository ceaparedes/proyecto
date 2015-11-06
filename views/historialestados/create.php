<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HISTORIALESTADOS */

$this->title = 'Create Historialestados';
$this->params['breadcrumbs'][] = ['label' => 'Historialestados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historialestados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
