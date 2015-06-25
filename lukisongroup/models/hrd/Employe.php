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
	
	
	 
	public function getPen()
	{
		//return $this->hasOne(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
		return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
	}
	 
	
	   
   
	
	
	
	
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMP_ID'], 'required'],
            [['EMP_ID'], 'string', 'max' => 10],
            [['EMP_NM'], 'string', 'max' => 50], 
			//[['employedata.EMP_ALAMAT'], 'string', 'max' => 100],
            [['EMP_AVATAR'], 'string', 'max' => 50],
            [['EMP_IMG'], 'string', 'max' => 50],
			//[['pendidikan.PEN_NM'],'safe'],
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
            'EMP_ID' => Yii::t('app', 'Brg  ID'),
            'EMP_NM' => Yii::t('app', 'Brg  Nm'),
			'EMP_IMG' => Yii::t('app', 'PICTURE'),
			//'pendidikan.PEN_NM' => Yii::t('app', 'Nama Sekolah'),
        ];
    }
	 
	 public function getFormAttribs() 
	 {
        return [
            'EMP_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter username...']],
            'EMP_NM'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter password...']],
            'EMP_IMG'=>['type'=>Form::INPUT_TEXT],
           // 'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Submit', ['class'=>'btn btn-primary'])];
        ];
    }   
	public function getimageurl()
   {
      // return your image url here
      //return \Yii::$app->request->BaseUrl.'/upload_img/'.$this->IMG_IMAGE;
   }
     
}


