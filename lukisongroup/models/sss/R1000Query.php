<?php

namespace lukisongroup\models\sss;

/**
 * This is the ActiveQuery class for [[R1000]].
 *
 * @see R1000
 */
class R1000Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/


    public function all($db = null)
    {
        return parent::all($db);
    }


    public function one($db = null)
    {
        return parent::one($db);
    }

    public function findMenu($kdmenu)
    {
        $this->where(['=','kd_menu', $kdmenu]);
        return $this;
    }
    /*
        daily_trans_hour()*
        daily_trans_hour_7()*
        week_trans_day()*
        week_trans_day_month()*
        daily_sales()*
        daily_trans()*
        Top5_Member()*
        top5_member_new()*
        daily_member_all()*
        top5_member_month()*
        top5_member_year()*
        Top5_Tenant()*
        top5_tenant_month()*
        top5_tenant_year()*
        top5_tenant_new()*
        Trans_Years_All()*
    */
    public function daily_trans_hour()
    {
        $this->where(['=','VAL_NM', 'Total_Hour_Hari']);
        return $this;
    }

    public function daily_trans_hour_7()
    {
        $this->where(['=','VAL_NM', 'Total_Hour_Hari_7']);
        return $this;
    }

    public function week_trans_day()
    {
        $this->where(['=','VAL_NM', 'Total_Grand_Weekly']);
        return $this;
    }

    public function week_trans_day_month()
    {
        $this->where(['=','VAL_NM', 'Total_Grand_Weekly_Month']);
        return $this;
    }

    public function daily_sales()
    {
        $this->where(['=','VAL_NM', 'Total_Grand_Hari']);
        return $this;
    }

    public function daily_trans()
    {
        $this->where(['=','VAL_NM', 'Total_Trans_Hari']);
        return $this;
    }

    public function Top5_Member()
    {
        $this->where(['=','VAL_NM', 'Top5_Member']);
        return $this;
    }

    public function top5_member_new()
    {
        $this->where(['=','VAL_NM', 'Top5_Member_New']);


        return $this;
    }

    public function daily_member_all()
    {
        $this->where(['=','VAL_NM', 'Member']);
        return $this;
    }

    public function top5_member_month()
    {
        $this->where(['=','VAL_NM', 'Top5_Member_Month']);
        return $this;
    }

    public function top5_member_year()
    {
        $this->where(['=','VAL_NM', 'Top5_Member_Year']);
        return $this;
    }

    public function Top5_Tenant()
    {
        $this->where(['=','VAL_NM', 'Top5_Tenant']);
        return $this;
    }

    public function top5_tenant_month()
    {
        $this->where(['=','VAL_NM', 'Top5_Tenant_Month']);
        return $this;
    }

    public function top5_tenant_year()
    {
        $this->where(['=','VAL_NM', 'Top5_Tenant_Year']);
        return $this;
    }

    public function top5_tenant_new()
    {
        $this->where(['=','VAL_NM', 'Top5_Tenant_New']);
        return $this;
    }

    public function Trans_Years_All()
    {
        $this->where(['=','VAL_NM', 'Trans_Years_All']);
        return $this;
    }


}
