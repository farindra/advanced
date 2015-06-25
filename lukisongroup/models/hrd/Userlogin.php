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
class Userlogin extends \yii\db\ActiveRecord
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
        return '{{%user}}';
    }

		
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['username'], 'string', 'max' => 50],
           // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'USERNAME'),
        ];
    } 
	 
     
}


