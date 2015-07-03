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
use app\models\hrd\Userlogin;
/*	KARTIK WIDGET -> Penambahan componen dari yii2 dan nampak lebih cantik*/
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;

use backend\assets\AppAsset; 	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
AppAsset::register($this);		/* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/

/*Title page Modul*/
$this->title = Yii::t('app', 'Department');
$this->params['breadcrumbs'][] = $this->title;
?>
<aside class="main-sidebar">
    <?php
		/*variable Dropdown*/
		use lukisongroup\models\system\side_menu\M1000;
		use kartik\sidenav\SideNav;
		$side_menu=\yii\helpers\Json::decode(M1000::find()->findMenu('hrd')->one()->jval);		
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
				'dataProvider' => $dataProvider_Userlogin,
				'filterModel' => $searchModel_Userlogin,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					'id',
					'username',
					'auth_key',
					//'password_hash',
					//'password_reset_token',
					'email',
					'status',
					'created_at',
					'updated_at',
					'EMP_ID',
					'avatar',
					'avatarImage',
					[
						'class' => 'yii\grid\ActionColumn',
						'template' => '{view}',
					],
				],
				'panel'=>[
					'heading' =>false,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
					'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
					'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app', 'Create {modelClass}',
					['modelClass' => 'User Login',]),
					['create'], ['class' => 'btn btn-success']),
				],
				'hover'=>true, //cursor selec
				'responsive'=>true,
				'bordered'=>true,
				'striped'=>true,
			]);
		?>
	</div>
</div>
