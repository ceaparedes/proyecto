<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VERSIONDOCUMENTOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Versiondocumentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="versiondocumento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Versiondocumento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'DOC_CODIGO',
            'VER_ID',
            'VER_DESCRIPCION',
            'VER_NUMEROCOPIA',
            'VER_URL:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
