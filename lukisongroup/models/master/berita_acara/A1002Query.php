<?php

namespace lukisongroup\models\master\berita_acara;

/**
 * This is the ActiveQuery class for [[A1002]].
 *
 * @see A1002
 */
class A1002Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return A1002[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return A1002|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}