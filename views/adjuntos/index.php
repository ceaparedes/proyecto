<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ADJUNTOSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adjuntos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adjuntos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Adjuntos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ADJ_ID',
            'SOL_ID',
            'ADJ_URL:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
