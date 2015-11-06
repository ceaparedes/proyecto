<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ORIGENACCIONSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Origenaccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="origenaccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Origenaccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OAC_ID',
            'OAC_ORIGEN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
