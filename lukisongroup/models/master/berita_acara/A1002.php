<?php

namespace lukisongroup\models\master\berita_acara;

use Yii;

/**
 * This is the model class for table "a1002".
 *
 * @property string $id
 * @property string $kd_berita
 * @property string $id_user
 * @property string $chat
 * @property integer $status
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_at
 */
class A1002 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a1002';
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
            [['id_user', 'status'], 'integer'],
            [['chat'], 'string'],
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
            'id' => 'Detail Berita Acara - Chat',
            'kd_berita' => 'Kd Berita',
            'id_user' => 'Id User',
            'chat' => 'Chat',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return A1002Query the active query used by this AR class.
     */
    public static function find()
    {
        return new A1002Query(get_called_class());
    }
}
