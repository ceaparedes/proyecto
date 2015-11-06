<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UNIDADORIGENDOCUMENTO */

$this->title = 'Create Unidadorigendocumento';
$this->params['breadcrumbs'][] = ['label' => 'Unidadorigendocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadorigendocumento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
