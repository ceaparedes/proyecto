<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ESTADORECLAMOSUGERENCIA */

$this->title = 'Create Estadoreclamosugerencia';
$this->params['breadcrumbs'][] = ['label' => 'Estadoreclamosugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadoreclamosugerencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
