<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SOLUCIONSOLDOCUMENTOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solucionsoldocumentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solucionsoldocumento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solucionsoldocumento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SSD_ID',
            'USU_RUT',
            'ESD_ID',
            'SOL_ID',
            'SSD_FECHAINICIO',
            // 'SSD_FECHATERMINO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
