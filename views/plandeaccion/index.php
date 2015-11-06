<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PLANDEACCIONSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plandeaccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plandeaccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Plandeaccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PDA_ID',
            'ESP_ID',
            'CAU_ID',
            'USU_RUT',
            'USU_USU_RUT',
            // 'TDA_ID',
            // 'PDA_FECHA',
            // 'PDA_FECHAIMPLEMENTACION',
            // 'PDA_OBSERVACIONES',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
