<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SACSAPDIMENSION */

$this->title = 'Create Sacsapdimension';
$this->params['breadcrumbs'][] = ['label' => 'Sacsapdimensions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsapdimension-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
