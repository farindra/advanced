<?php

namespace lukisongroup\controllers\hrd;

use Yii;
use app\models\hrd\Employe;
use app\models\hrd\Pendidikan;
use app\models\hrd\EmployeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\SqlDataProvider;

/**
 * MaxiprodakController implements the CRUD actions for Maxiprodak model.
 */
class EmployeController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(['Employe','Pendidikan']),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Maxiprodak models.
     * @return mixed
     */
    public function actionIndex()
    {
	
		
		//print_r($command->queryRow());
		
		$searchModel = new EmployeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		//$sql4="select * from employe";
		//$dataProvider=new SqlDataProvider($sql4,array(
		//'KeyField'=>'EMP_ID',
		//)
		//);
		//echo  \yii\helpers\Json::encode($dataProvider->getModels());
		//echo  \yii\helpers\Json::encode($dataProvider->getModels('search'));
		
		print_r($dataProvider->getModels());
        return $this->render('index', [
			//'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
		
    }

    /**
     * Displays a single Maxiprodak model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Maxiprodak model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Employe();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->BRG_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Maxiprodak model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->BRG_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Maxiprodak model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Maxiprodak model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Maxiprodak the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
