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
class Dept extends \yii\db\ActiveRecord
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
        return '{{%b0002}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEP_ID'], 'required'],
            [['DEP_ID'], 'string', 'max' => 5],
            [['DEP_NM'], 'string', 'max' => 30],
            // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEP_ID' => Yii::t('app', 'Dept.ID'),
            'DEP_NM' => Yii::t('app', 'Name'),
            'DEP_STS' => Yii::t('app', 'Status'),
            'DEP_AVATAR' => Yii::t('app', 'Avatar'),
            'DEP_DCRP' => Yii::t('app', 'Description'),
            'SORT' => Yii::t('app', 'Sorting'),
        ];
    }
}


