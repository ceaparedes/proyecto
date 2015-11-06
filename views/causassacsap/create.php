<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CAUSASSACSAP */

$this->title = 'Create Causassacsap';
$this->params['breadcrumbs'][] = ['label' => 'Causassacsaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="causassacsap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
