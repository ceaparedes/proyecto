<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SOLICITUDSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicituds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SOL_ID',
            'DOC_CODIGO',
            'VER_ID',
            'ESO_ID',
            'USU_RUT',
            // 'OAC_ID',
            // 'TAC_ID',
            // 'SOL_FECHA',
            // 'SOL_UNIDAD',
            // 'SOL_FUNDAMENTO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
