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
class Jabatan extends \yii\db\ActiveRecord
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
        return '{{%b0003}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['JAB_ID'], 'required'],
            [['JAB_ID'], 'string', 'max' => 5],
            [['JAB_NM'], 'string', 'max' => 30],
			[['SORT'], 'integer'],
            // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'JAB_ID' => Yii::t('app', 'Dept.ID'),
            'JAB_NM' => Yii::t('app', 'Name'),
            'JAB_STS' => Yii::t('app', 'Status'),
            'JAB_AVATAR' => Yii::t('app', 'Avatar'),
            'JAB_DCRP' => Yii::t('app', 'Description'),
            'SORT' => Yii::t('app', 'Sorting'),
        ];
    }
}


