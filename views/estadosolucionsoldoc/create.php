<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ESTADOSOLUCIONSOLDOC */

$this->title = 'Create Estadosolucionsoldoc';
$this->params['breadcrumbs'][] = ['label' => 'Estadosolucionsoldocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionsoldoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
