<?php

namespace app\controllers;

use Yii;
use app\models\SACSAPDIMENSION;
use app\models\SACSAPDIMENSIONSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SACSAPDIMENSIONController implements the CRUD actions for SACSAPDIMENSION model.
 */
class SACSAPDIMENSIONController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SACSAPDIMENSION models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SACSAPDIMENSIONSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SACSAPDIMENSION model.
     * @param integer $DIM_ID
     * @param integer $SAC_ID
     * @return mixed
     */
    public function actionView($DIM_ID, $SAC_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($DIM_ID, $SAC_ID),
        ]);
    }

    /**
     * Creates a new SACSAPDIMENSION model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SACSAPDIMENSION();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DIM_ID' => $model->DIM_ID, 'SAC_ID' => $model->SAC_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SACSAPDIMENSION model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $DIM_ID
     * @param integer $SAC_ID
     * @return mixed
     */
    public function actionUpdate($DIM_ID, $SAC_ID)
    {
        $model = $this->findModel($DIM_ID, $SAC_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DIM_ID' => $model->DIM_ID, 'SAC_ID' => $model->SAC_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SACSAPDIMENSION model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $DIM_ID
     * @param integer $SAC_ID
     * @return mixed
     */
    public function actionDelete($DIM_ID, $SAC_ID)
    {
        $this->findModel($DIM_ID, $SAC_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SACSAPDIMENSION model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $DIM_ID
     * @param integer $SAC_ID
     * @return SACSAPDIMENSION the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($DIM_ID, $SAC_ID)
    {
        if (($model = SACSAPDIMENSION::findOne(['DIM_ID' => $DIM_ID, 'SAC_ID' => $SAC_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
