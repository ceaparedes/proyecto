<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SACSAPTIPOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sacsaptipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sacsaptipo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sacsaptipo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SST_ID',
            'SST_TIPO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
