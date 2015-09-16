<?php

namespace app\models\master;

use Yii;

/**
 * This is the model class for table "b1003".
 *
 * @property string $id
 * @property string $kd_unit
 * @property string $nm_unit
 * @property string $size
 * @property double $wight
 * @property string $color
 * @property string $note
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $status
 */
class Unitbarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b1003';
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
            [['kd_unit', 'nm_unit', 'status'], 'required'],
            [['wight'], 'number'],
            [['note'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['kd_unit'], 'string', 'max' => 5],
            [['nm_unit'], 'string', 'max' => 200],
            [['size', 'color', 'created_by', 'updated_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_unit' => 'Kode Unit',
            'nm_unit' => 'Nama Unit',
            'size' => 'Size',
            'wight' => 'Wight',
            'color' => 'Color',
            'note' => 'Note',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
