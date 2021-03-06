	<?php
use kartik\helpers\Html;
use kartik\detail\DetailView;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;
	/*
	$attribute = [
		[
			'attribute' =>'EMP_ID',
			//'inputWidth'=>'20%'
			//'inputContainer' => ['class'=>'col-md-1'],
		],
		[
			'attribute' =>	'EMP_NM',
			//'inputWidth'=>'40%'
		],
		[
			'attribute' =>	'EMP_NM_BLK',
			//'inputWidth'=>'40%'
		],
		[
			'attribute' =>	'EMP_KTP' ,
		],
		[
			'attribute' =>	'EMP_ALAMAT' ,
		],
		[
			'attribute' =>	'EMP_ZIP' ,
		],
		[
			'attribute' =>	'EMP_TLP' ,
		],
		[
			'attribute' =>	'EMP_HP' ,
		],
	];
	$form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);

	$test1= DetailView::widget([
		'model' => $model,
		'condensed'=>true,
		'hover'=>true,
		'mode'=>DetailView::MODE_VIEW,
		'panel'=>[
			'heading'=>$model->EMP_NM . ' '.$model->EMP_NM_BLK,
			'type'=>DetailView::TYPE_INFO,
		],

			'attributes'=>$attribute,


		'deleteOptions'=>[
			'url'=>['delete', 'id' => $model->EMP_ID],
			'data'=>[
				'confirm'=>Yii::t('app', 'Are you sure you want to delete this record?'),
				'method'=>'post',
			],
		],
	]);
ActiveForm::end();

	*/

	?>
	
	<div class="col-xs-12 col-sm-3 col-dm-2 col-lg-2"  style="valign:bottom; margin-left:0 ; text-align: center"  >
      	<img src="<?= Yii::getAlias('@HRD_EMP_UploadUrl') .'/'. $model->EMP_IMG; ?>" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px"/>
	</div>
	
    <div class="col-xs-12 col-sm-5 col-dm-3 col-lg-3"  style="margin-left:0 ;padding-left: 0; padding-top:10px; margin-bottom: 20px">

      <table id="table1" style="display:block;padding-left: 0; color: darkred">
          <tr>
              <td colspan = "3" width="auto"  valign="top" style="color: #000000"><b>LG23423432</b>  </td>
          </tr>
          <tr>
              <td colspan = "3" width="auto"  valign="top" style="color:red"><b>PITER NOVIAN</b>  </td>
          </tr>



		<tr>
			<td width="auto"  valign="top">Job Title</td>
			<td valign="top" style="padding-left: 2px"><b> :</b> </td>
			<td  width="auto" style="padding-left: 2px">CTO</td>
		</tr>
		<tr>
			<td width="auto"  valign="top">Job Level</td>
			<td valign="top" style="padding-left: 2px"><b> :</b> </td>
			<td  width="auto" style="padding-left: 2px">Manager</td>
		</tr>
		<tr>
			<td width="auto"  valign="top">Organization</td>
			<td valign="top" style="padding-left: 2px"><b> :</b> </td>
			<td  width="auto" style="padding-left: 2px">IT Department</td>
		</tr>

	</table>

    </div>
    <div class=" col-xs-12 col-sm-4 col-dm-3 col-lg-3"  style="padding-left:0"  >
     <table id="table1" style="display:block;; color: darkred">
         <tr>
             <td width="auto"  valign="top">Company  </td>
             <td valign="top" style="padding-left: 2px"><b> :</b> </td>
             <td  width="auto" style="padding-left: 2px">PT.Sarana Sinar Surya</td>
         </tr>
         <tr>
             <td width="auto"  valign="top">Location  </td>
             <td valign="top" style="padding-left: 2px"><b> :</b> </td>
             <td  width="auto" style="padding-left: 2px">Demension c12</td>
         </tr>
         <tr>
             <td width="auto"  valign="top">Join Date</td>
             <td valign="top" style="padding-left: 2px"><b> :</b> </td>
             <td  width="auto" style="padding-left: 2px">03/03/2013</td>
         </tr>
         <tr>
             <td width="auto"  valign="top">Emp. Status</td>
             <td valign="top" style="padding-left: 2px"><b> :</b> </td>
             <td  width="auto" style="padding-left: 2px">Permanent</td>
         </tr>
         <tr>
             <td width="auto"  valign="top">e-Mail</td>
             <td valign="top" style="padding-left: 2px"><b> :</b> </td>
             <td  width="auto" style="padding-left: 2px">piter@lukison.com</td>
         </tr>
	</table>
    </div>
   