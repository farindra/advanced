<?php
/*
 * By ptr.nov
 * Load Config CSS/JS
 */
use backend\assets\AppAsset;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
AppAsset::register($this);

use yii\helpers\Html;
/*use yii\grid\GridView;*/

/* @var $this yii\web\View */
/* @var $searchModel app\models\maxi\MaxiprodakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employe');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default" style="margin-top: 0px">
 <div class="panel-body">
    <?php //echo 'DASHBOARD '. $model->CORP_NM; 
		 echo Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]);
				
				
				?> 

			<?php
			
				print_r($dataProvider);
				echo GridView::widget([
					'dataProvider' => $dataProvider,
					
					//'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],
						/*Author -ptr.nov- image*/
						array(
							'format' => 'html',
							//'format' => 'image',
							//'value'=>function($data) { return Html::img(Yii::getAlias('@path_emp') . '/'. $data->EMP_IMG, ['width'=>'20']); },
							//'value'=>function($data) { return Html::img('http://192.168.56.101/advanced/lukisongroup/web/upload/image/'.$data->EMP_IMAGE, ['class'=>'img-circle pull-left','width'=>'40']); },
						 ),
						'emp.EMP_ID',
						'emp.EMP_NM',
						'user.username',
						'emp.EMP_IMG',
					//	'EMP_TLP',
						'NILAI',
						
						['class' => 'yii\grid\ActionColumn'],
						['class' => 'yii\grid\CheckboxColumn'],
						['class' => '\kartik\grid\RadioColumn'],
					],
					
					/*
					'panel'=>[
						'heading' =>true,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
					    'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
						'before'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add New', '#', ['class'=>'btn btn-success']) . ' ' . 
								Html::a('<i class="glyphicon glyphicon-remove"></i> Delete', '#', ['class'=>'btn btn-danger']) . ' ' .
								Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary'])
					],
					'hover'=>true, //cursor selec
					'responsive'=>true,
					'bordered'=>true,
					'striped'=>true,
					*/
				]);
			?>
	</div>
</div>













