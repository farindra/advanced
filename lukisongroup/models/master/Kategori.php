<?php

namespace app\models\master;

use Yii;

/**
 * This is the model class for table "b1002".
 *
 * @property string $id
 * @property string $kd_kategori
 * @property string $nm_kategori
 * @property string $note
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $status
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b1002';
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
            [['kd_kategori', 'nm_kategori'], 'required'],
            [['note'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['status'], 'required'],
            [['kd_kategori'], 'string', 'max' => 5],
            [['nm_kategori'], 'string', 'max' => 200],
            [['created_by', 'updated_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_kategori' => 'Kode Kategori',
            'nm_kategori' => 'Nama Kategori',
            'note' => 'Note',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
