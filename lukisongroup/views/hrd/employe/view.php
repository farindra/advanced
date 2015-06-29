<?php


use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\icons\Icon;
use kartik\widgets\Growl;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\maxi\Maxiprodak */

//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maxiprodaks'), 'url' => ['prodak']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default" style="margin-top: 0px">
     <div class="panel-body">
		<?php
			echo DetailView::widget([
				'model' => $model,
				
				'condensed'=>true,
				'hover'=>true,
				'mode'=>DetailView::MODE_VIEW,
				'panel'=>[
					'heading'=>$model->EMP_NM . ' '.$model->EMP_NM_BLK,
					'type'=>DetailView::TYPE_INFO,
				],	
				
				
				
				'attributes' => [
					'EMP_ID',		
					'EMP_NM',					
					'EMP_NM_BLK',
					'EMP_IMG',

					// Employe Coorporation - Author: -ptr.nov-
					'EMP_CORP_ID' ,
					'DEP_ID',
					'EMP_GENDER',
					'EMP_STS',
					'JAB_ID' ,
					'EMP_IMG' ,
					//Employe Profile - Author: -ptr.nov-
					'EMP_KTP' ,
					'EMP_ALAMAT' ,
					'EMP_ZIP' ,
					'EMP_TLP' ,
					'EMP_HP' ,
					'EMP_EMAIL' ,
					'GRP_NM',
					'EMP_JOIN_DATE',
					//Join
					//'corpOne.CORP_NM' ,
					//'deptOne.DEP_NM' ,
					//'jabOne.JAB_NM' ,
					//'sttOne.STS_NM',	
				],
				
			]);			
		?>
	</div>
</div>

