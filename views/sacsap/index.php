<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SACSAPSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sacsaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sacsap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SAC_ID',
            'SST_ID',
            'USU_RUT',
            'SOR_ID',
            'HAL_NUMERO',
            // 'SSO_ID',
            // 'SAC_FECHA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
