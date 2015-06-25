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
class Corp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function getDb()
    {
        /* Author -ptr.nov- : HRD | Dashboard I */
        return \Yii::$app->db4;
    }

    public static function tableName()
    {
        return '{{dbm000.a0001}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CORP_ID'], 'required'],
            [['CORP_ID'], 'string', 'max' => 5],
            [['CORP_NM'], 'string', 'max' => 30],
            // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CORP_ID' => Yii::t('app', 'Corp.ID'),
            'CORP_NM' => Yii::t('app', 'Corp.Name'),
            'CORP_STS' => Yii::t('app', 'Status'),
            'CORP_AVATAR' => Yii::t('app', 'Avatar'),
            'CORP_DCRP' => Yii::t('app', 'Description'),
            'SORT' => Yii::t('app', 'Sorting'),
        ];
    }
}


