<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ORIGENDOCUMENTO */

$this->title = 'Create Origendocumento';
$this->params['breadcrumbs'][] = ['label' => 'Origendocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="origendocumento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
