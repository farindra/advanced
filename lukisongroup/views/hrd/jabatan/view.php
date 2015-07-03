<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\hrd\Jabatan;
use kartik\detail\DetailView;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\icons\Icon;
use kartik\widgets\Growl;

//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maxiprodaks'), 'url' => ['prodak']];
//$this->params['breadcrumbs'][] = $this->title;
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
			$Jabatan_MDL = Jabatan::find()->where(['JAB_ID'=>$model->JAB_ID])->orderBy('SORT')->one();
			$Val_Jabatan=$Jabatan_MDL->JAB_NM;
			$attribute = [
				[
					'attribute' =>'JAB_ID',
					//'inputWidth'=>'20%'
				],	
				[
					'attribute' =>	'JAB_NM',
					//'inputWidth'=>'40%'					
				],
				[
					'attribute' =>	'JAB_DCRP',
					'format'=>'raw',
					//'value'=>'JAB_DCRP',
					'type'=>DetailView::INPUT_TEXTAREA, 
					'widgetOptions'=>[
						'data'=>'JAB_DCRP',
						'options'=>['placeholder'=>'Position Description ...'],
						'pluginOptions'=>['allowClear'=>true],
					],
				],
				[
					'attribute' =>	'SORT',
					//'inputWidth'=>'40%'
				],			
			];
			echo DetailView::widget([
				'model' => $model,
				
				'condensed'=>true,
				'hover'=>true,
				'mode'=>DetailView::MODE_VIEW,
				'panel'=>[
					'heading'=>$model->JAB_ID . '| '.$model->JAB_NM,
					'type'=>DetailView::TYPE_INFO,
				],	
				'attributes'=>$attribute,
			]);			
		?>
	</div>
</div>

