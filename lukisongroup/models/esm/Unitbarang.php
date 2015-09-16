<?php

namespace app\models\esm;

use Yii;

/**
 * This is the model class for table "ub0001".
 *
 * @property string $id
 * @property string $kdUnit
 * @property string $nmUnit
 * @property string $qty
 * @property integer $size
 * @property integer $weight
 * @property string $color
 * @property string $note
 * @property integer $status
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_at
 */
class Unitbarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ub0001';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_esm');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kdUnit', 'nmUnit', 'qty'], 'required'],
            [['qty'], 'integer'],
            [['note','size', 'weight', 'color', 'note', 'status', 'created_by', 'created_at', 'updated_at'], 'string'],
            [['kdUnit'], 'string', 'max' => 25],
            [['nmUnit'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kdUnit' => 'Kode Unit',
            'nmUnit' => 'Nama Unit',
            'qty' => 'Quantity',
            'size' => 'Ukuran',
            'weight' => 'Berat',
            'color' => 'Warna',
            'note' => 'Note',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
