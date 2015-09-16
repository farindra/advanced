<?php

namespace lukisongroup\models\sss;

use Yii;

/**
 * This is the model class for table "r1000".
 *
 * @property integer $ID
 * @property string $VAL_NM
 * @property integer $VAL_1
 * @property string $UPDT
 * @property string $VAL_JSON
 */
class R1000 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'r1000';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_sss');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VAL_1'], 'integer'],
            [['UPDT'], 'safe'],
            [['VAL_JSON'], 'string'],
            [['VAL_NM'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'tabel reporting',
            'VAL_NM' => 'Val  Nm',
            'VAL_1' => 'Val 1',
            'UPDT' => 'Updt',
            'VAL_JSON' => 'Val  Json',
        ];
    }

    public static function find()
    {
        return new R1000Query(get_called_class());
    }
}
