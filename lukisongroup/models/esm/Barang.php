<?php

namespace app\models\esm;

use Yii;

/**
 * This is the model class for table "b0001".
 *
 * @property string $id
 * @property string $kdBrg
 * @property string $nmBrg
 * @property string $kdSuplier
 * @property string $kdDbtr
 * @property string $hpp
 * @property integer $harga
 * @property integer $barcode
 * @property integer $note
 * @property integer $status
 * @property integer $createdBy
 * @property integer $createdAt
 * @property integer $updateAt
 * @property string $data_all
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b0001';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_esm');
    }
	
	public function getUnitb()
    {
        return $this->hasOne(Unitbarang::className(), ['id' => 'kdUnit']);
    }
	
	public function getDbtr()
    {
        return $this->hasOne(Distributor::className(), ['kdDbtr' => 'kdDbtr']);
    }
	
	public function getBrg()
    {
        return $this->hasOne(Barangmaxi::className(), ['kodeBarang' => 'nmBrg']);
    }
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kdBrg', 'nmBrg', 'hpp', 'harga', 'barcode', 'note', 'status','kdUnit','kdDbtr'], 'required'],
            [['hpp', 'harga', 'barcode'], 'integer'],
            [['createdBy', 'updateAt', 'kdSuplier', 'kdDbtr'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'kdBrg' => 'Kode Barang',
            'nmBrg' => 'Nama Barang',
            'kdUnit' => 'Kode Unit',
            'kdSuplier' => 'Kode Supplier',
            'kdDbtr' => 'Kode Distributor',
            'hpp' => 'HPP',
            'harga' => 'Harga Jual',
            'barcode' => 'Barcode',
            'note' => 'Note',
            'status' => 'Status',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
            'updateAt' => 'Update At',
            'data_all' => 'Data All',
        ];
    }
}
