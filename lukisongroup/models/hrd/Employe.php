<?php

namespace app\models\hrd;
use kartik\builder\Form;
use Yii;

/**
 * This is the model class for table "{{%maxi_b0001}}".
 *
 * @property string $BRG_ID
 * @property string $BRG_NM
 */
class Employe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 public static function getDb()
	{
		/* Author -ptr.nov- : HRD | Dashboard I */
		return \Yii::$app->db2;  
	}
	
	public static function tableName()
    {
        return '{{%a0001}}';
    }

    /* Join Class Pendidikan */
	public function getPen()
	{
		return $this->hasOne(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
		//return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
	}

    /* Join Class Coorporation */    
	public function getCorpOne()
    {
        return $this->hasOne(Corp::className(), ['CORP_ID' => 'EMP_CORP_ID']);
    }
		
    /* Join Class Department */
    public function getDeptOne()
    {
        return $this->hasOne(Dept::className(), ['DEP_ID' => 'DEP_ID']);
    }

	/* Join Class Jabatan Employe */
    public function getJabOne()
    {
        return $this->hasOne(Jabatan::className(), ['JAB_ID' => 'JAB_ID']);
    }
	
    /* Join Class Status Employe */
    public function getSttOne()
    {
        return $this->hasOne(Status::className(), ['STS_ID' => 'EMP_STS']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMP_ID'], 'required'],
            [['EMP_ID','EMP_ZIP','EMP_CORP_ID'], 'string', 'max' => 10],
            [['EMP_NM','EMP_NM_BLK','EMP_IMG','EMP_KTP','GRP_NM'], 'string', 'max' => 20], 
			[['DEP_ID','JAB_ID'], 'string', 'max' => 5], 
			[['EMP_STS'], 'integer'],
			[['EMP_JOIN_DATE','EMP_TGL_LAHIR','EMP_RESIGN_DATE'], 'safe'],
			[['EMP_JOIN_DATE','EMP_TGL_LAHIR','EMP_RESIGN_DATE'], 'date','format' => 'yyyy-mm-dd'], 
			[['EMP_ALAMAT'], 'string'], 
			[['EMP_TLP','EMP_HP'], 'string', 'max' => 15], 
			[['EMP_GENDER'], 'string', 'max' => 6], 
			[['EMP_EMAIL'], 'string', 'max' => 30],  			
		    [['EMP_ZIP'], 'string', 'max' => 50],
            [['EMP_IMG'], 'string', 'max' => 50],
			
			//[['pendidikan.PEN_NM'],'safe'],
				//[['employedata.EMP_ALAMAT'], 'string', 'max' => 100],
        
        ];
    }

	//public function proc_dashboard($username)
	//{
	
		//return $command = Yii::app()->db2->createCommand('call DashboardLogin($username)')->queryAll();

		//$command->execute();
	//}
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			// Employe Identity - Author: -ptr.nov-
            'EMP_ID' => Yii::t('app', 'Employee.ID'),
            'EMP_NM' => Yii::t('app', 'First Name'),
            'EMP_NM_BLK' => Yii::t('app', 'Last Name'),
            'EMP_IMG' => Yii::t('app', 'Pic'),
			
			// Employe Coorporation - Author: -ptr.nov-
			'EMP_CORP_ID' => Yii::t('app', 'Corp.ID'),
            'DEP_ID' => Yii::t('app', 'Department'),
			'EMP_GENDER' => Yii::t('app', 'Jenis Kelamin'),
			'EMP_STS' => Yii::t('app', 'Status'),
			'JAB_ID' => Yii::t('app', 'Jabatan'),
						
			//Employe Profile - Author: -ptr.nov-
            'EMP_KTP' => Yii::t('app', 'No.KTP'),
            'EMP_ALAMAT' => Yii::t('app', 'Alamat'),
			'EMP_ZIP' => Yii::t('app', 'Telphone'),
            'EMP_TLP' => Yii::t('app', 'Telphone'),
            'EMP_HP' => Yii::t('app', 'Handphone'),
            'EMP_EMAIL' => Yii::t('app', 'Email'),
            'GRP_NM' => Yii::t('app', 'Modul'),
			'EMP_JOIN_DATE' => Yii::t('app', 'Join Date'),
			//JOIN DROP DOWN - Author: -ptr.nov-
				//join Corp b0001
            'corpOne.CORP_NM' => Yii::t('app', 'Company'),
				//join Dept a0002
            'deptOne.DEP_NM' => Yii::t('app', 'Department'),
				//join Dept a000
			'jabOne.JAB_NM' => Yii::t('app', 'Position'),
				//join Dept a0009
            'sttOne.STS_NM' => Yii::t('app', 'Status'),
            
            
        ];
    }
	 
	 public function getFormAttribs() 
	 {
        return [
            'EMP_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ...']],
            'EMP_NM'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ...']],
            'EMP_IMG'=>['type'=>Form::INPUT_TEXT],
           // 'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Submit', ['class'=>'btn btn-primary'])];
        ];
    }   

}


