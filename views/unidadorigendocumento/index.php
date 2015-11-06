<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UNIDADORIGENDOCUMENTOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidadorigendocumentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadorigendocumento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Unidadorigendocumento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'UOD_ID',
            'UOD_UNIDAD',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
