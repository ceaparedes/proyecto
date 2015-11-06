<?php

namespace app\controllers;

use Yii;
use app\models\VERSIONDOCUMENTO;
use app\models\VERSIONDOCUMENTOSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VERSIONDOCUMENTOController implements the CRUD actions for VERSIONDOCUMENTO model.
 */
class VERSIONDOCUMENTOController extends Controller
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
     * Lists all VERSIONDOCUMENTO models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VERSIONDOCUMENTOSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VERSIONDOCUMENTO model.
     * @param integer $DOC_CODIGO
     * @param integer $VER_ID
     * @return mixed
     */
    public function actionView($DOC_CODIGO, $VER_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($DOC_CODIGO, $VER_ID),
        ]);
    }

    /**
     * Creates a new VERSIONDOCUMENTO model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VERSIONDOCUMENTO();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DOC_CODIGO' => $model->DOC_CODIGO, 'VER_ID' => $model->VER_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing VERSIONDOCUMENTO model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $DOC_CODIGO
     * @param integer $VER_ID
     * @return mixed
     */
    public function actionUpdate($DOC_CODIGO, $VER_ID)
    {
        $model = $this->findModel($DOC_CODIGO, $VER_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DOC_CODIGO' => $model->DOC_CODIGO, 'VER_ID' => $model->VER_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing VERSIONDOCUMENTO model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $DOC_CODIGO
     * @param integer $VER_ID
     * @return mixed
     */
    public function actionDelete($DOC_CODIGO, $VER_ID)
    {
        $this->findModel($DOC_CODIGO, $VER_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VERSIONDOCUMENTO model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $DOC_CODIGO
     * @param integer $VER_ID
     * @return VERSIONDOCUMENTO the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($DOC_CODIGO, $VER_ID)
    {
        if (($model = VERSIONDOCUMENTO::findOne(['DOC_CODIGO' => $DOC_CODIGO, 'VER_ID' => $VER_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
