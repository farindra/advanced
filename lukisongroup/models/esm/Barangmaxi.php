<?php

namespace app\models\esm;

use Yii;

/**
 * This is the model class for table "b0002".
 *
 * @property integer $idBarang
 * @property string $kodeBarang
 * @property string $namaBarang
 */
class Barangmaxi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b0002';
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
            [['kodeBarang', 'namaBarang'], 'required'],
            [['kodeBarang', 'namaBarang'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBarang' => 'Id Barang',
            'kodeBarang' => 'Kode Barang',
            'namaBarang' => 'Nama Barang',
        ];
    }
}
