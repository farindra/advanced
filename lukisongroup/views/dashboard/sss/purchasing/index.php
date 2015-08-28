<?php
/*
 * By ptr.nov
 * Load Config CSS/JS
 */
/* YII CLASS */
//use yii\helpers\Html;
use kartik\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* TABLE CLASS DEVELOPE -> |DROPDOWN,PRIMARYKEY-> ATTRIBUTE */
use app\models\hrd\Dept;
/*	KARTIK WIDGET -> Penambahan componen dari yii2 dan nampak lebih cantik*/
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
//use dosamigos\chartjs\Chart;
//use miloschuman\highcharts\Highcharts;
//use yii\web\JsExpression;
//CLASS Chart GoogleChart
use scotthuangzl\googlechart\GoogleChart;

use backend\assets\AppAsset; 	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
AppAsset::register($this);		/* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/
$this->mddPage = 'sss_purchasing';
$this->title = Yii::t('app', 'SSS - Purchasing Dashboard ');
$this->params['breadcrumbs'][] = $this->title;

echo Html::panel(
    ['heading' => Html::encode($this->title) ],
    Html::TYPE_DANGER
);
				$pertama= GoogleChart::widget(array('visualization' => 'PieChart',
					'data' => array(
						array('Task', 'Hours per Day'),
						array('Work', 11),
						array('Eat', 2),
						array('Commute', 2),
						array('Watch TV', 2),
						array('Sleep', 7)
					),
				//'options' => array('title' => 'Employee Properties')
                ));


				$kedua= GoogleChart::widget(array('visualization' => 'PieChart',
					'data' => array(
						array('Task', 'Hours per Day'),
						array('Work', 11),
						array('Eat', 2),
						array('Commute', 2),
						array('Watch TV', 2),
						array('Sleep', 7)
					),
				//'options' => array('title' => 'Employee Status')
                ));
			?>


<div class="body-content">
    <div class="row" style="padding-left: 5px; padding-right: 5px">

        <div class="col-sm-4 col-md-4 col-lg-4 ">
            <?php
            echo Html::panel(
                ['heading' => 'Employee Status', 'body' => $pertama],
                Html::TYPE_SUCCESS
            );
            ?>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <?php
            echo Html::panel(
                ['heading' => 'Employee Properties', 'body' =>$kedua],
                Html::TYPE_SUCCESS
            );
            ?>
        </div>
    </div>
</div>