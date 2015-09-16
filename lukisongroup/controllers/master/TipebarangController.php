<?php

namespace lukisongroup\controllers\master;

use Yii;
use app\models\master\Tipebarang;
use app\models\master\TipebarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipebarangController implements the CRUD actions for Tipebarang model.
 */
class TipebarangController extends Controller
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
     * Lists all Tipebarang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TipebarangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tipebarang model.
     * @param string $id
     * @param string $kd_type
     * @return mixed
     */
    public function actionView($id, $kd_type)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $kd_type),
        ]);
    }

    /**
     * Creates a new Tipebarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tipebarang();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_type' => $model->kd_type]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tipebarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $kd_type
     * @return mixed
     */
    public function actionUpdate($id, $kd_type)
    {
        $model = $this->findModel($id, $kd_type);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_type' => $model->kd_type]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tipebarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $kd_type
     * @return mixed
     */
    public function actionDelete($id, $kd_type)
    {
        $this->findModel($id, $kd_type)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tipebarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $kd_type
     * @return Tipebarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $kd_type)
    {
        if (($model = Tipebarang::findOne(['id' => $id, 'kd_type' => $kd_type])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
