<?php
/**
 * NOTE: Nama Class harus diawali Hurup Besar
 * Server Linux 	: hurup besar/kecil bermasalah -case sensitif-
 * Server Windows 	: hurup besar/kecil tidak bermasalah
 * Author: -ptr.nov-
*/

namespace app\models\hrd;
use Yii;

/**
 * EMPLOYE CLASS  Author: -ptr.nov-
 */
class Employe extends \yii\db\ActiveRecord
{
	/* [1] SOURCE DB */
    public static function getDb()
	{
		/* Author -ptr.nov- : HRD */
		return \Yii::$app->db2;  
	}
	
	/* [2] TABLE SELECT */
	public static function tableName()
    {
        return '{{%a0001}}';
    }   
    
	/* [3] RULE SCENARIO -> DetailView */
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
        ];
    }

	/* [4] ATRIBUTE LABEL  -> DetailView/GridView */
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
			//UMUM
            'corpOne.CORP_NM' => Yii::t('app', 'Company'),
			//UMUM
            'deptOne.DEP_NM' => Yii::t('app', 'Department'),
			//UMUM
			'jabOne.JAB_NM' => Yii::t('app', 'Position'),
			//UMUM
            'sttOne.STS_NM' => Yii::t('app', 'Status'),      
        ];
    }
	 
	 /* [5] ATRIBUTE LABEL DIRECT -> DetailView/GridView */
	 public function getFormAttribs() 
	 {
        return [
            'EMP_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ...']],
            'EMP_NM'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter ...']],
            'EMP_IMG'=>['type'=>Form::INPUT_TEXT],
           // 'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Submit', ['class'=>'btn btn-primary'])];
        ];
    }   
	
	/* [6] JOIN CLASS TABLE */
		 /* Join Class Table Pendidikan */
		public function getPen()
		{
			return $this->hasOne(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
			//return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
		}
		/* Join Class Table Coorporation */    
		public function getCorpOne()
		{
			return $this->hasOne(Corp::className(), ['CORP_ID' => 'EMP_CORP_ID']);
		}		
		/* Join Class Table Department */
		public function getDeptOne()
		{
			return $this->hasOne(Dept::className(), ['DEP_ID' => 'DEP_ID']);
		}
		/* Join Class Table Jabatan Employe */
		public function getJabOne()
		{
			return $this->hasOne(Jabatan::className(), ['JAB_ID' => 'JAB_ID']);
		}	
		/* Join Class Table tatus Employe */
		public function getSttOne()
		{
			return $this->hasOne(Status::className(), ['STS_ID' => 'EMP_STS']);
		}

}


