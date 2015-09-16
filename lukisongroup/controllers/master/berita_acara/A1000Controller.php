<?php

namespace lukisongroup\controllers\master\berita_acara;

use Yii;
use lukisongroup\models\master\berita_acara\A1000;
use lukisongroup\models\master\berita_acara\A1000Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * A1000Controller implements the CRUD actions for A1000 model.
 */
class A1000Controller extends Controller
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
     * Lists all A1000 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new A1000Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single A1000 model.
     * @param string $id
     * @param string $kd_berita
     * @return mixed
     */
    public function actionView($id, $kd_berita)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $kd_berita),
        ]);
    }

    /**
     * Creates a new A1000 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new A1000();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_berita' => $model->kd_berita]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing A1000 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $kd_berita
     * @return mixed
     */
    public function actionUpdate($id, $kd_berita)
    {
        $model = $this->findModel($id, $kd_berita);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_berita' => $model->kd_berita]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing A1000 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $kd_berita
     * @return mixed
     */
    public function actionDelete($id, $kd_berita)
    {
        $this->findModel($id, $kd_berita)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the A1000 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $kd_berita
     * @return A1000 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $kd_berita)
    {
        if (($model = A1000::findOne(['id' => $id, 'kd_berita' => $kd_berita])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
