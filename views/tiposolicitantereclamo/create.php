<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TIPOSOLICITANTERECLAMO */

$this->title = 'Create Tiposolicitantereclamo';
$this->params['breadcrumbs'][] = ['label' => 'Tiposolicitantereclamos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposolicitantereclamo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
