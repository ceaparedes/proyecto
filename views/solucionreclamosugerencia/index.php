<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SOLUCIONRECLAMOSUGERENCIASearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solucionreclamosugerencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionreclamosugerencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solucionreclamosugerencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SOR_ID',
            'USU_RUT',
            'REC_NUMERO',
            'ERS_ID',
            'SOR_PROCEDE',
            // 'SOR_COMENTARIO',
            // 'SOR_ANTECEDENTES',
            // 'SOR_ACUERDO',
            // 'SOR_FECHA',
            // 'SOR_RESULTADOS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
