<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RECOMENDACIONESAUDITORIA */

$this->title = 'Create Recomendacionesauditoria';
$this->params['breadcrumbs'][] = ['label' => 'Recomendacionesauditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recomendacionesauditoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
