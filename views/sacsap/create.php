<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SACSAP */

$this->title = 'Create Sacsap';
$this->params['breadcrumbs'][] = ['label' => 'Sacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
