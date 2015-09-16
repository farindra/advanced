<?php

namespace app\models\master;

use Yii;
use app\models\master\Perusahaan;

/**
 * This is the model class for table "s1000".
 *
 * @property string $id
 * @property string $kd_supplier
 * @property string $nm_supplier
 * @property string $alamat
 * @property string $kota
 * @property string $tlp
 * @property string $mobile
 * @property string $fax
 * @property string $email
 * @property string $website
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
class Suplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's1000';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db4');
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
            [['kd_supplier', 'nm_supplier'], 'required'],
            [['alamat', 'note', 'data_all'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['kd_supplier', 'kd_corp', 'kd_cab', 'kd_dep'], 'string', 'max' => 5],
            [['nm_supplier', 'website', 'image'], 'string', 'max' => 200],
            [['kota', 'tlp', 'mobile', 'fax', 'email', 'created_by', 'updated_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_supplier' => 'Kode Supplier',
            'nm_supplier' => 'Nama Supplier',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'tlp' => 'Telephone',
            'mobile' => 'Mobile',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'image' => 'Image',
            'note' => 'Note',
            'kd_corp' => 'Kode Corporasi',
            'kd_cab' => 'Kode Cab',
            'kd_dep' => 'Kode Dep',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'data_all' => 'Data All',
        ];
    }
}
