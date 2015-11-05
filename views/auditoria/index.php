<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AUDITORIASearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auditorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auditoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'AUD_NUMERO',
            'USU_RUT',
            'AES_ID',
            'AAU_ID',
            'DOC_CODIGO',
            // 'VER_ID',
            // 'USU_USU_RUT',
            // 'AUD_OBJETIVO',
            // 'AUD_ALCANCE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
