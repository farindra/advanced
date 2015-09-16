<?php

namespace app\models\master;

use Yii;

use app\models\master\Kategori;
use app\models\master\Unitbarang;
use app\models\master\Suplier;
use app\models\master\Perusahaan;
use app\models\master\Tipebarang;

/**
 * This is the model class for table "b1000".
 *
 * @property string $id
 * @property string $kd_barang
 * @property string $nm_barang
 * @property string $kd_type
 * @property string $kd_kategori
 * @property string $kd_unit
 * @property string $kd_supplier
 * @property string $kd_distributor
 * @property string $parent
 * @property double $hpp
 * @property double $harga
 * @property string $barcode
 * @property string $image
 * @property string $note
 * @property string $kd_corp
 * @property string $kd_cab
 * @property string $kd_dep
 * @property integer $status
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property string $data_all
 */
class Barangumum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b1000';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db4');
    }

	public function getType()
    {
        return $this->hasOne(Tipebarang::className(), ['kd_type' => 'kd_type']);
    }

	public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['kd_kategori' => 'kd_kategori']);
    }

	public function getUnit()
    {
        return $this->hasOne(Unitbarang::className(), ['kd_unit' => 'kd_unit']);
    }

	public function getSuplier()
    {
        return $this->hasOne(Suplier::className(), ['kd_supplier' => 'kd_supplier']);
    }

	public function getPerusahaan()
    {
        return $this->hasOne(Perusahaan::className(), ['kd_corp' => 'kd_corp']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_barang', 'nm_barang','status','kd_type','kd_kategori','kd_unit', 'kd_supplier','kd_corp'], 'required'],
            [['hpp', 'harga'], 'number'],
            [['hpp', 'harga'], 'required'],
            [['note', 'data_all'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['kd_barang', 'parent'], 'string', 'max' => 20],
            [['nm_barang', 'image'], 'string', 'max' => 200],
            [['kd_type', 'kd_kategori', 'kd_unit', 'kd_supplier', 'kd_distributor', 'kd_corp', 'kd_cab', 'kd_dep'], 'string', 'max' => 5],
            [['barcode'], 'string', 'max' => 15],
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
            'kd_barang' => 'Kode Barang',
            'nm_barang' => 'Nama Barang',
            'kd_type' => 'Kode Type',
            'kd_kategori' => 'Kode Kategori',
            'kd_unit' => 'Kode Unit',
            'kd_supplier' => 'Kode Supplier',
            'kd_distributor' => 'Kode Distributor',
            'parent' => 'Parent',
            'hpp' => 'Hpp',
            'harga' => 'Harga',
            'barcode' => 'Barcode',
            'image' => 'Image',
            'note' => 'Note',
            'kd_corp' => 'Kd Corp',
            'kd_cab' => 'Kd Cab',
            'kd_dep' => 'Kd Dep',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'data_all' => 'Data All',
        ];
    }
}
