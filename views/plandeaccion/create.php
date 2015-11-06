<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PLANDEACCION */

$this->title = 'Create Plandeaccion';
$this->params['breadcrumbs'][] = ['label' => 'Plandeaccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plandeaccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
