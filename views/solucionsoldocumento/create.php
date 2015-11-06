<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SOLUCIONSOLDOCUMENTO */

$this->title = 'Create Solucionsoldocumento';
$this->params['breadcrumbs'][] = ['label' => 'Solucionsoldocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionsoldocumento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
