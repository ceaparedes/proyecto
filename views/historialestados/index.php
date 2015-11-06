<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HISTORIALESTADOSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Historialestados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historialestados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Historialestados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'HES_ID',
            'REC_NUMERO',
            'EST_ID',
            'USU_RUT',
            'HES_FECHAYHORA',
            // 'HES_COMENTARIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
