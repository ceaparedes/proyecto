<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SACSAPORIGEN */

$this->title = 'Create Sacsaporigen';
$this->params['breadcrumbs'][] = ['label' => 'Sacsaporigens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsaporigen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
