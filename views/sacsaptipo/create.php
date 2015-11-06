<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SACSAPTIPO */

$this->title = 'Create Sacsaptipo';
$this->params['breadcrumbs'][] = ['label' => 'Sacsaptipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsaptipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
