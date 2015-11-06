<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ESTADOSOLUCIONRECLAMOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estadosolucionreclamos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionreclamo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estadosolucionreclamo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ERS_ID',
            'ERS_ESTADO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
