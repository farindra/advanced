<?php

namespace lukisongroup\models\master\berita_acara;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "a1000".
 *
 * @property string $id
 * @property string $kd_berita
 * @property string $judul
 * @property string $isi
 * @property string $kd_corp
 * @property string $kd_cab
 * @property string $kd_dep
 * @property string $data_pict
 * @property string $data_file
 * @property integer $status
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $data_all
 */
class A1000 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $touser;
    public $data_files;
    //public $file;

    public static function tableName()
    {
        return 'a1000';
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
            [['kd_berita'], 'required'],
            [['isi', 'data_all','data_file'], 'string'],
            [['data_files'], 'safe'],
            [['data_pict','data_files'], 'file', 'maxFiles' => 10],
            [['status'], 'integer'],
            [['time_at','created_at', 'updated_at'], 'safe'],
            [['kd_berita', 'kd_corp', 'kd_cab', 'kd_dep'], 'string', 'max' => 20],
            [['judul'], 'string', 'max' => 200],
            [['created_by'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Header Berita Acara',
            'kd_berita' => 'Kd Berita',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'kd_corp' => 'Kd Corp',
            'kd_cab' => 'Kd Cab',
            'kd_dep' => 'Kd Dep',
            'data_pict' => 'Data Pict',
            'data_file' => 'Data File',
            'status' => 'Status',
            'time_at' => 'Time At',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'data_all' => 'Data All',
        ];
    }

    /**
     * @inheritdoc
     * @return A1000Query the active query used by this AR class.
     */
    public static function find()
    {
        return new A1000Query(get_called_class());
    }

    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->data_files as $file) {
                $file->saveAs(yii::$app->params['uploadPathBa']. $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}
