<?php

namespace lukisongroup\controllers\system\side_menu;

use Yii;
use lukisongroup\models\system\side_menu\M1000;
use lukisongroup\models\system\side_menu\M1000Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * M1000Controller implements the CRUD actions for M1000 model.
 */
class M1000Controller extends Controller
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
     * Lists all M1000 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new M1000Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single M1000 model.
     * @param string $id
     * @param string $kd_menu
     * @return mixed
     */
    public function actionView($id, $kd_menu)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $kd_menu),
        ]);
    }

    /**
     * Creates a new M1000 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new M1000();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_menu' => $model->kd_menu]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing M1000 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @param string $kd_menu
     * @return mixed
     */
    public function actionUpdate($id, $kd_menu)
    {
        $model = $this->findModel($id, $kd_menu);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'kd_menu' => $model->kd_menu]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing M1000 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @param string $kd_menu
     * @return mixed
     */
    public function actionDelete($id, $kd_menu)
    {
        $this->findModel($id, $kd_menu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the M1000 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @param string $kd_menu
     * @return M1000 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $kd_menu)
    {
        if (($model = M1000::findOne(['id' => $id, 'kd_menu' => $kd_menu])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
