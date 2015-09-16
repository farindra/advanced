<?php

namespace app\models\master;

use Yii;

/**
 * This is the model class for table "c1000".
 *
 * @property integer $id
 * @property string $kd_corp
 * @property string $nm_corp
 */
class Perusahaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c1000';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db4');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kd_corp', 'nm_corp'], 'required'],
            [['id'], 'integer'],
            [['kd_corp'], 'string', 'max' => 50],
            [['nm_corp'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_corp' => 'Kd Corp',
            'nm_corp' => 'Nm Corp',
        ];
    }
}
