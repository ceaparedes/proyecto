<?php

namespace app\controllers;

use Yii;
use app\models\TIPOACCION;
use app\models\TIPOACCIONSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TIPOACCIONController implements the CRUD actions for TIPOACCION model.
 */
class TIPOACCIONController extends Controller
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
     * Lists all TIPOACCION models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TIPOACCIONSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TIPOACCION model.
     * @param integer $OAC_ID
     * @param integer $TAC_ID
     * @return mixed
     */
    public function actionView($OAC_ID, $TAC_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($OAC_ID, $TAC_ID),
        ]);
    }

    /**
     * Creates a new TIPOACCION model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TIPOACCION();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'OAC_ID' => $model->OAC_ID, 'TAC_ID' => $model->TAC_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TIPOACCION model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $OAC_ID
     * @param integer $TAC_ID
     * @return mixed
     */
    public function actionUpdate($OAC_ID, $TAC_ID)
    {
        $model = $this->findModel($OAC_ID, $TAC_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'OAC_ID' => $model->OAC_ID, 'TAC_ID' => $model->TAC_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TIPOACCION model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $OAC_ID
     * @param integer $TAC_ID
     * @return mixed
     */
    public function actionDelete($OAC_ID, $TAC_ID)
    {
        $this->findModel($OAC_ID, $TAC_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TIPOACCION model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $OAC_ID
     * @param integer $TAC_ID
     * @return TIPOACCION the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($OAC_ID, $TAC_ID)
    {
        if (($model = TIPOACCION::findOne(['OAC_ID' => $OAC_ID, 'TAC_ID' => $TAC_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
