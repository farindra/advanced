<?php

namespace app\models\hrd;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use app\models\hrd\Employe;
use app\models\hrd\Pendidikan;

/**
 * MaxiprodakSearch represents the model behind the search form about `app\models\maxi\Maxiprodak`.
 */
class EmployeSearch extends Employe
{

	 public $emp;
     public $pen;
	 public $user;
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['EMP_ID', 'EMP_NM'], 'safe'],
			// [['employe', 'employedata'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
	
		//$query = Employe::find();
		///$subquery=Pendidikan::find()->select('*');
		
	//		$query ->leftJoin(['EMP'=>$subquery], 'EMP.EMP_ID=a0001.EMP_ID');
		
		
		//$query = Pendidikan::find()->JoinWith('emp',false,'INNER JOIN')
		//			->Where(['a0001.EMP_ID'=>'LG.0005']);
		
		//$query =  self::find()->select('*')->from('a0001')->Join('INNER JOIN','a0002', 'a0002.EMP_ID=a0001.EMP_ID')->where(['a0001.EMP_ID'=>'a0002.Emp_ID']);
		
		
		//$query = Itprogramer::findOne('EMP_ID');
		//$query = Itprogramer::find()
			//->select('employe.*')
			//->leftJoin('employe_data', 'employe_data.EMP_ID = employe.EMP_ID')
			//->where(['order.status' => Order::STATUS_ACTIVE])
			//->with('employe_data')
			//->all();
			
		//echo  \yii\helpers\Json::encode($query);
		
		
	/*
		$query = Employe::find()->select('*')->from('a0001')
			->join( 'INNER JOIN', 'a0002', 'a0002.EMP_ID = a0001.EMP_ID')
			->where(['a0001.EMP_ID' => 'LG.0005']);//->all();
			//print_r($query);
		$command = $query->createCommand();
		//$data= $command->queryAll(); 
		
	*/	
		
		
		//$query = Employe::find();
		$query = Pendidikan::find()->JoinWith('emp',true,'INNER JOIN')
												->JoinWith('user',true,'INNER JOIN')
												;//->Where(['a0001.EMP_ID'=>'LG.0005']);
        $dataProvider = new ActiveDataProvider([
           'query' => $query,
        ]);
		
		//$dataProvider = new SqlDataProvider([
		//	'sql' => 'SELECT * FROM employe',
		//]);
       // $this->load($params);

       //if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
        //    return $dataProvider;
        //}

        //$query->andFilterWhere(['like', 'EMP_ID', $this->EMP_ID])
        //    ->andFilterWhere(['like', 'EMP_NM', $this->EMP_NM]);
		//echo  \yii\helpers\Json::encode($dataProvider);
        return $dataProvider;
    }
}
