<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RECLAMOSUGERENCIASearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reclamosugerencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reclamosugerencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reclamosugerencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'REC_NUMERO',
            'USU_RUT',
            'EST_ID',
            'TSR_ID',
            'TIR_ID',
            // 'REC_FECHA',
            // 'REC_REPARTICION',
            // 'REC_HORA',
            // 'REC_MOTIVO',
            // 'REC_VISTOBUENO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
