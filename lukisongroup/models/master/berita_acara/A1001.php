<?php

namespace lukisongroup\models\master\berita_acara;

use Yii;

/**
 * This is the model class for table "a1001".
 *
 * @property string $id
 * @property string $kd_berita
 * @property string $id_user
 * @property integer $type
 * @property integer $status
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_at
 */
class A1001 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a1001';
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
            [['kd_berita', 'id_user'], 'required'],
            [['id_user', 'type', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['kd_berita'], 'string', 'max' => 20],
            [['created_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_berita' => 'Kd Berita',
            'id_user' => 'Id User',
            'type' => 'Type',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return A1001Query the active query used by this AR class.
     */
    public static function find()
    {
        return new A1001Query(get_called_class());
    }
}
