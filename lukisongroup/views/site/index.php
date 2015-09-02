<?php
use kartik\helpers\Html;
use kartik\detail\DetailView;
use yii\bootstrap\Modal;
use kartik\widgets\ActiveField;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\FileInput;
use kartik\builder\FormGrid;
$form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL,'options'=>['enctype'=>'multipart/form-data']]);
$ProfAttribute1 = [
    [
        'label'=>'',
        'attribute' =>'EMP_IMG',
        'value'=>Yii::getAlias('@HRD_EMP_UploadUrl') .'/'.$model->EMP_IMG,
        //'group'=>true ,
        //'groupOptions'=>[
        //	'value'=>Yii::getAlias('@HRD_EMP_UploadUrl') .'/'.$model->EMP_IMG,
        //],
        'format'=>['image',['width'=>'auto','height'=>'auto']],
        //'inputWidth'=>'20%'
        //'inputContainer' => ['class'=>'col-md-1'],
    ],
];
$this->title = 'Workbench <i class="fa  fa fa-coffee"></i> ' . $model->EMP_NM . ' ' . $model->EMP_NM_BLK .'</a>';
$prof=$this->render('login_index/_info', [
    'model' => $model,
]);
?>

<div class="container-fluid" style="padding-left: 20px; padding-right: 20px" >
		<div class="row">

					<?php
					echo Html::panel(
						[
							'heading' => $this->title,
							'body'=>$prof,
						],
						Html::TYPE_INFO
					);
					?>
		</div>
		 <div class="col-xs-12 col-sm-6 col-dm-4  col-lg-4" >
			<?php
				echo Html::panel([
						'id'=>'home1',
						'heading' => 'Tools',
						'postBody' => Html::listGroup([
								[
									'content' => 'Memo ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Notulen ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Berita Acara',
									'url' => '#',
									'badge' => '2'
								],
								[
									'content' => 'Chating',
									'url' => '#',
									'badge' => '2'
								],

							]),
					],
					Html::TYPE_INFO
				);
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-dm-4  col-lg-4" >
			<?php
				echo Html::panel([
						'id'=>'home1',
						'heading' => 'Tools',
						'postBody' => Html::listGroup([
								[
									'content' => 'Memo ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Notulen ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Berita Acara',
									'url' => '#',
									'badge' => '2'
								],
								[
									'content' => 'Chating',
									'url' => '#',
									'badge' => '2'
								],

							]),
					],
					Html::TYPE_INFO
				);
			?>
		</div>
		<div class="col-xs-12 col-sm-6 col-dm-4  col-lg-4" >
			<?php
				echo Html::panel([
						'id'=>'home1',
						'heading' => 'Tools',
						'postBody' => Html::listGroup([
								[
									'content' => 'Memo ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Notulen ',
									'url' => '#',
									'badge' => '14'
								],
								[
									'content' => 'Berita Acara',
									'url' => '#',
									'badge' => '2'
								],
								[
									'content' => 'Chating',
									'url' => '#',
									'badge' => '2'
								],

							]),
					],
					Html::TYPE_INFO
				);
			?>
		</div>
 </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
    </html>
<?php ActiveForm::end(); ?>