<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SACSAPDIMENSIONSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sacsapdimensions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsapdimension-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sacsapdimension', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SAC_ID',
            'DIM_ID',
            'SSD_DIMENSION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
