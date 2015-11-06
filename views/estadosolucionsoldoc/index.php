<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ESTADOSOLUCIONSOLDOCSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estadosolucionsoldocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosolucionsoldoc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estadosolucionsoldoc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ESD_ID',
            'ESD_DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
