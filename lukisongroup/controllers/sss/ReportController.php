<?php

namespace lukisongroup\controllers\sss;

use Yii;
use lukisongroup\models\sss\R1000;
use lukisongroup\models\system\side_menu\M1000;
use lukisongroup\assets\sss\ReportAsset;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;


class ReportController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $model= new R1000();

        $side_menu=M1000::find()->findMenu('sss_report')->one()->jval;
        $side_menu=json_decode($side_menu,true);

        $daily_trans_hour=R1000::find()->daily_trans_hour()->one()->VAL_JSON;
        $daily_trans_hour_7=R1000::find()->daily_trans_hour_7()->one()->VAL_JSON;
        $week_trans_day=R1000::find()->week_trans_day()->one()->VAL_JSON;
        $week_trans_day_month=R1000::find()->week_trans_day_month()->one()->VAL_JSON;
        $daily_sales=R1000::find()->daily_sales()->one()->VAL_1;
        $daily_trans=R1000::find()->daily_trans()->one()->VAL_1;
        $Top5_Member=R1000::find()->Top5_Member()->one()->VAL_JSON;
        $top5_member_new=$this->set_table_member_new(R1000::find()->top5_member_new()->one()->VAL_JSON);
        $daily_member_all=R1000::find()->daily_member_all()->one()->VAL_1;
        $top5_member_month=$this->set_table_member_month(R1000::find()->top5_member_month()->one()->VAL_JSON);
        $top5_member_year=$this->set_table_member_month(R1000::find()->top5_member_year()->one()->VAL_JSON);
        $Top5_Tenant=R1000::find()->Top5_Tenant()->one()->VAL_JSON;
        $top5_tenant_month=$this->set_table_tenant(R1000::find()->top5_tenant_month()->one()->VAL_JSON);
        $top5_tenant_year=$this->set_table_tenant(R1000::find()->top5_tenant_year()->one()->VAL_JSON);
        $top5_tenant_new=$this->set_table_tenant_new(R1000::find()->top5_tenant_new()->one()->VAL_JSON);
        $Trans_Years_All=R1000::find()->Trans_Years_All()->one()->VAL_JSON;

        return $this->render(
            'index',
            [   'side_menu'=>$side_menu,
                'daily_trans_hour'=>$daily_trans_hour,
                'daily_trans_hour_7'=>$daily_trans_hour_7,
                'week_trans_day'=>$week_trans_day,
                'week_trans_day_month'=>$week_trans_day_month,
                'daily_sales'=>$daily_sales,
                'daily_trans'=>$daily_trans,
                'Top5_Member'=>$Top5_Member,
                'top5_member_new'=>$top5_member_new,
                'daily_member_all'=>$daily_member_all,
                'top5_member_month'=>$top5_member_month,
                'top5_member_year'=>$top5_member_year,
                'Top5_Tenant'=>$Top5_Tenant,
                'top5_tenant_month'=>$top5_tenant_month,
                'top5_tenant_year'=>$top5_tenant_year,
                'top5_tenant_new'=>$top5_tenant_new,
                'Trans_Years_All'=>$Trans_Years_All
            ]);
    }
    public function set_table_member_new($listdata){
        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>Join Date</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($listdata);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';
        return ($fillhead.$fillbody);
    }

    public function set_table_member_month($listdata){
        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $parsed_json = json_decode($listdata);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    public function set_table_tenant($listdata){
        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $parsed_json = json_decode($listdata);
        foreach ($parsed_json as $key => $value) {
        $nourut+= 1;
        $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    public function set_table_tenant_new($listdata){
        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>Kode Tenant</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $parsed_json = json_decode($listdata);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }
}
