<?php

namespace lukisongroup\controllers\master;

use Yii;
use app\models\master\Barangumum;
use app\models\master\BarangumumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BarangumumController implements the CRUD actions for Barangumum model.
 */
class BarangumumController extends Controller
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
     * Lists all Barangumum models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BarangumumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Barangumum model.
     * @param string $id
     * @param string $kd_barang
     * @return mixed
     */
    public function actionView($id, $kd_barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $kd_barang),
        ]);
    }

    /**
     * Creates a new Barangumum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Barangumum();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_barang' => $model->kd_barang]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Barangumum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $kd_barang
     * @return mixed
     */
    public function actionUpdate($id, $kd_barang)
    {
        $model = $this->findModel($id, $kd_barang);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_barang' => $model->kd_barang]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Barangumum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $kd_barang
     * @return mixed
     */
    public function actionDelete($id, $kd_barang)
    {
        $this->findModel($id, $kd_barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Barangumum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $kd_barang
     * @return Barangumum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $kd_barang)
    {
        if (($model = Barangumum::findOne(['id' => $id, 'kd_barang' => $kd_barang])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
