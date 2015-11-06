<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DETALLECAMBIOSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallecambios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecambios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detallecambios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ACC_ID',
            'SOL_ID',
            'ACC_CAMBIOS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
