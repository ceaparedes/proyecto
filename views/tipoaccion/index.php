<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TIPOACCIONSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipoaccions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoaccion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipoaccion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'OAC_ID',
            'TAC_ID',
            'TAC_ACCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
