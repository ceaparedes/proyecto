<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RECOMENDACIONESAUDITORIASearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recomendacionesauditorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recomendacionesauditoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Recomendacionesauditoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'REA_ID',
            'AUD_NUMERO',
            'REA_DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
