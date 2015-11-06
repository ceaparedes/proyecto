<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VERSIONDOCUMENTO */

$this->title = 'Create Versiondocumento';
$this->params['breadcrumbs'][] = ['label' => 'Versiondocumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versiondocumento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
