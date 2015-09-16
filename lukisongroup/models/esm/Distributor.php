<?php

namespace app\models\esm;

use Yii;

/**
 * This is the model class for table "d0001".
 *
 * @property string $idDbtr
 * @property string $kdDbtr
 * @property string $nmDbtr
 * @property string $alamat
 * @property string $pic
 * @property string $tlp1
 * @property string $tlp2
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $note
 * @property integer $status
 * @property string $createBy
 * @property string $createAt
 * @property string $updateAt
 * @property string $data_all
 */
class distributor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd0001';
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
            [['kdDbtr', 'nmDbtr', 'alamat', 'pic', 'tlp1', 'tlp2', 'fax', 'email', 'website', 'note', 'status', 'createBy', 'createAt', 'updateAt', 'data_all'], 'string'],
            [['kdDbtr', 'nmDbtr', 'alamat', 'pic', 'tlp1', 'tlp2', 'status'], 'required'],
 //           [['alamat', 'note'], 'string'],
            [['tlp1', 'tlp2', 'fax', 'status'], 'integer'],
            [['kdDbtr'], 'string', 'max' => 50],
 //           [['nmDbtr', 'pic', 'email', 'website', 'createBy', 'createAt', 'updateAt', 'data_all'], 'string', 'max' => 255]
			
			[['createBy'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDbtr' => 'Id Dbtr',
            'kdDbtr' => 'Kode Distributor',
            'nmDbtr' => 'Nama Distributor',
            'alamat' => 'Alamat Distributor',
            'pic' => 'Penanggung Jawab',
            'tlp1' => 'Telephone 1',
            'tlp2' => 'Telephone 2',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'note' => 'Note',
            'status' => 'Status Distributor',
            'createBy' => 'Create By',
            'createAt' => 'Create At',
            'updateAt' => 'Update At',
            'data_all' => 'Data All',
        ];
    }
}
