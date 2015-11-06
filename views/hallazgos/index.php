<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HALLAZGOSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hallazgos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hallazgos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hallazgos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HAL_NUMERO',
            'AUD_NUMERO',
            'HAL_TIPO',
            'HAL_REQUISITO',
            'HAL_DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
