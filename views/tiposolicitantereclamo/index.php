<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TIPOSOLICITANTERECLAMOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tiposolicitantereclamos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiposolicitantereclamo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tiposolicitantereclamo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TSR_ID',
            'TSR_TIPO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
