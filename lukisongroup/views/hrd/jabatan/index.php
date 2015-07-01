<?php
/*
 * By ptr.nov
 * Load Config CSS/JS
 */
/* YII CLASS */
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* TABLE CLASS DEVELOPE -> |DROPDOWN,PRIMARYKEY-> ATTRIBUTE */
use app\models\hrd\Employe;
use app\models\hrd\Corp;
use app\models\hrd\Dept;
use app\models\hrd\Jabatan;
use app\models\hrd\Status;
use lukisongroup\models\system\side_menu\M1000;

/*	KARTIK WIDGET -> Penambahan componen dari yii2 dan nampak lebih cantik*/
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
use kartik\sidenav\SideNav;

use backend\assets\AppAsset; 	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
AppAsset::register($this);		/* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/

/*Title page Modul*/
$this->title = Yii::t('app', 'Employe');
$this->params['breadcrumbs'][] = $this->title;

/*variable Dropdown*/
$side_menu=\yii\helpers\Json::decode(M1000::find()->findMenu('hrd')->one()->jval);
?>
<aside class="main-sidebar">
    <?php	
		if (!Yii::$app->user->isGuest) {
			echo SideNav::widget([
				'items' => $side_menu,
				'encodeLabels' => false,
				//'heading' => $heading,
				'type' => SideNav::TYPE_DEFAULT,
				'options' => ['class' => 'sidebar-nav'],
			]);
		};
    ?>
</aside>
<div class="panel panel-default" style="margin-top: 0px">
     <div class="panel-body">
		<?php
			/*DEPARTMENT Author: -ptr.nov */
			//print_r($dataProvider);
			echo GridView::widget([
				'dataProvider' => $dataProvider_Dept,
				'filterModel' => $searchModel_Dept,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					'DEP_ID',
					'DEP_NM',
					'DEP_DCRP',
					'SORT',
					['class' => 'yii\grid\ActionColumn'],
					//['class' => 'yii\grid\CheckboxColumn'],
					//['class' => '\kartik\grid\RadioColumn'],
				],
				'panel'=>[
					'heading' =>true,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
					'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
					'after'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add', '#', ['class'=>'btn btn-success']) . ' ' .
						//Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary']) . ' ' .
						Html::a('<i class="glyphicon glyphicon-remove"></i> Delete  ', '#', ['class'=>'btn btn-danger'])
				],
				'hover'=>true, //cursor selec
				'responsive'=>true,
				'bordered'=>true,
				'striped'=>true,
			]);
		?>
	</div>
</div>

