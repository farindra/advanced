<?php

namespace lukisongroup\models\master\berita_acara;

/**
 * This is the ActiveQuery class for [[A1000]].
 *
 * @see A1000
 */
class A1000Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return A1000[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return A1000|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}