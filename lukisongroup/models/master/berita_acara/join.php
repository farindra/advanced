<?php

namespace lukisongroup\models\master\berita_acara;

use Yii;

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
class data1 extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->get('db4');
    }

    public function getTable2()
    {
        return $this->hasMany(data2::class, ['id' => 'id']);
    }
}

class data2 extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->get('db_sss');
    }
}