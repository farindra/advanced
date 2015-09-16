<?php

namespace lukisongroup\models\master\berita_acara;

/**
 * This is the ActiveQuery class for [[A1001]].
 *
 * @see A1001
 */
class A1001Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return A1001[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return A1001|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}