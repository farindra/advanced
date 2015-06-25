<?php

namespace app\models\hrd;
//use yii\data\ActiveDataProvider;
use kartik\builder\Form;
use Yii;

/**
 * This is the model class for table "{{%maxi_b0001}}".
 *
 * @property string $BRG_ID
 * @property string $BRG_NM
 */
class Pendidikan extends \yii\db\ActiveRecord
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
        return '{{%a0002}}';
    }

	public function getEmp()
	{
		return $this->hasOne(Employe::className(), ['EMP_ID' => 'EMP_ID']);
	}
	
	public function getUser()
	{
		return $this->hasOne(Userlogin::className(), ['EMP_ID' => 'EMP_ID']);
	}
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp.EMP_ID'], 'required'],
            [['emp.EMP_ID'], 'string', 'max' => 10],
           // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp.EMP_ID' => Yii::t('app', 'EMP ID'),
            'PEN_ID' => Yii::t('app', 'PENDIDIKAN'),
			'PEN_NM' => Yii::t('app', 'PEN_NM'),
			'TGL_MASUK' => Yii::t('app', 'TGL_MASUK'),
			'TGL_KELUAR' => Yii::t('app', 'TGL_KELUAR'),
			'NILAI' => Yii::t('app', 'NILAI'),
        ];
    } 
	 
     
}


