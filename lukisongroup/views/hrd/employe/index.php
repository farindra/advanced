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
$Combo_Corp = ArrayHelper::map(Corp::find()->orderBy('SORT')->asArray()->all(), 'CORP_NM','CORP_NM');
$Combo_Dept = ArrayHelper::map(Dept::find()->orderBy('SORT')->asArray()->all(), 'DEP_NM','DEP_NM');
$Combo_Jab = ArrayHelper::map(Jabatan::find()->orderBy('SORT')->asArray()->all(), 'JAB_NM','JAB_NM');
$Combo_Status = ArrayHelper::map(Status::find()->orderBy('SORT')->asArray()->all(), 'STS_NM','STS_NM');

    //print_r($dataProvider);												/*SHOW ARRAY YII Author: -Devandro-*/
	//echo  \yii\helpers\Json::encode($dataProvider->getModels());			/*SHOW ARRAY JESON Author: -ptr.nov-*/
    $tab_employe= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],            
			[
				/*Author -ptr.nov- image*/
               'attribute' => 'PIC',
               'format' => 'html', //'format' => 'image',
               'value'=>function($data){
                            return Html::img(Yii::getAlias('@HRD_EMP_UploadUrl') . '/'. $data->EMP_IMG, ['width'=>'40']);
                        },
            ],  
				'EMP_ID',
				'EMP_NM',
				'EMP_NM_BLK',			
            [
				/*Author -ptr.nov-*/
				'attribute' =>'corpOne.CORP_NM',
				'filter' => $Combo_Corp,
			],
            [
				/*Author -ptr.nov-*/
				'attribute' =>'deptOne.DEP_NM',
				'filter' => $Combo_Dept,
			],
			[
				/*Author -ptr.nov-*/
				'attribute' =>'jabOne.JAB_NM',
				'filter' => $Combo_Jab,
			],
			[
				/*Author -ptr.nov-*/
				'attribute' =>'sttOne.STS_NM',
				'filter' => $Combo_Status,
			],
			[				
				'attribute' =>'EMP_JOIN_DATE',
				'filterType'=> \kartik\grid\GridView::FILTER_DATE_RANGE,
				'filterWidgetOptions' =>([
					'attribute' =>'EMP_JOIN_DATE',
					'presetDropdown'=>TRUE,                
					'convertFormat'=>true,                
					'pluginOptions'=>[				
						'format'=>'Y-m-d',
						'separator' => ' TO ',
						'opens'=>'left'
					],
				//'pluginEvents' => [
				//	"apply.daterangepicker" => "function() { aplicarDateRangeFilter('EMP_JOIN_DATE') }",
				//] 
				]),
				
			],
            [
				'class' => 'yii\grid\ActionColumn',
				'template' => '{view} {update}',
				//Yii::t('app', 'Emplo'),
			],
            //['class' => 'yii\grid\CheckboxColumn'],
            //['class' => '\kartik\grid\RadioColumn'],
        ],
        'panel'=>[
            //'heading' =>true,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
            'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
            //'after'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add', '#', ['class'=>'btn btn-success']) . ' ' .
                //Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary']) . ' ' .
            //    Html::a('<i class="glyphicon glyphicon-remove"></i> Delete  ', '#', ['class'=>'btn btn-danger'])
			'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app', 'Create {modelClass}',
					['modelClass' => 'Employe',]),
					['create'], ['class' => 'btn btn-success']),
        ],
		'pjax'=>true,
        'hover'=>true, //cursor select
        'responsive'=>true,
        'bordered'=>true,
        'striped'=>true,	
    ]);

/*Employe Profile Author: -ptr.nov */
    //print_r($dataProvider);
    $tab_profile= GridView::widget([
        'dataProvider' => $dataProvider1,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            /*Author -ptr.nov- image*/
            'emp.EMP_ID',
            array(
                'format' => 'html',
                //'format' => 'image',
                // 'value'=>function($data) { return Html::img(Yii::getAlias('@path_emp') . '/'. $data->emp->EMP_IMG, ['width'=>'40']); },
                //'value'=>function($data) { return Html::img('http://192.168.56.101/advanced/lukisongroup/web/upload/image/'.$data->EMP_IMAGE, ['class'=>'img-circle pull-left','width'=>'40']); },
            ),

            'emp.EMP_NM',
            'user.username',
            'emp.EMP_IMG',
            //	'EMP_TLP',
            'NILAI',

            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\CheckboxColumn'],
            ['class' => '\kartik\grid\RadioColumn'],
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

<?php
use kartik\rating\StarRating;

use kartik\sortable\Sortable;
// With model & without ActiveForm
	$strRat= StarRating::widget([
		'name' => 'rating_1',
		'pluginOptions' => ['disabled'=>true, 'showClear'=>false]
	]);
/*
	use kartik\sortinput\SortableInput;
	
	//$model = Employe::find();
$sortImg= SortableInput::widget([
    //'model' => $model,
    //'attribute' => 'EMP_IMG',
    'hideInput' => false,
    'delimiter' => '~',
    'items' => [['content' =>$Combo_Corp]]
     
]);
*/

use kartik\affix\Affix;
	$content = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.';
	$items = [[
		'url' => '#sec-1',
		'label' => 'Section 1',
		'icon' => 'play-circle',
		'content' => $content,
		'items' => [
			['url' => '#sec-1-1', 'label' => 'Section 1.1', 'content' => $content],
			['url' => '#sec-1-2', 'label' => 'Section 1.2', 'content' => $content],
			['url' => '#sec-1-3', 'label' => 'Section 1.3', 'content' => $content],
			['url' => '#sec-1-4', 'label' => 'Section 1.4', 'content' => $content],
			['url' => '#sec-1-5', 'label' => 'Section 1.5', 'content' => $content],
		],
	],
	[
		'url' => '#sec-2',
		'label' => 'Section 2',
		'icon' => 'play-circle',
		'content' => $content,
		'items' => [
			['url' => '#sec-2-1', 'label' => 'Section 2.1', 'content' => $content],
			['url' => '#sec-2-2', 'label' => 'Section 2.2', 'content' => $content],
			['url' => '#sec-2-3', 'label' => 'Section 2.3', 'content' => $content],
			['url' => '#sec-2-4', 'label' => 'Section 2.4', 'content' => $content],
			['url' => '#sec-2-5', 'label' => 'Section 2.5', 'content' => $content],
		],
	]];
	$KiriMenu= Affix::widget([
		'items' => $items, 
		'type' => 'menu'
	]);
	
	$affk= Affix::widget([
		'items' => $items, 
		'type' => 'body'
	]);
	
use kartik\alert\Alert;

	$ingatan= Alert::widget([
		'type' => Alert::TYPE_INFO,
		'title' => 'Note',
		'titleOptions' => ['icon' => 'info-sign'],
		'body' => 'This is an informative alert sss'
	]);
	use kartik\alert\AlertBlock;

	$ingatanBlock= AlertBlock::widget([
		'type' => AlertBlock::TYPE_ALERT,
		'useSessionFlash' => true
	]);



	// Usage with ActiveForm and model
	/*echo $form->field($model, 'rating')->widget(StarRating::classname(), [
		'pluginOptions' => ['size'=>'lg']
	]);
	*/

	
	
?>





<div class="panel panel-default" style="margin-top: 0px">
     <div class="panel-body">
        <?php
            /* echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]);
			*/
            $items=[
                [
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Employe List','content'=>$tab_employe,
                    'active'=>true,

                ],
                [
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Employe Grids','content'=>$tab_profile,
                ],
				[
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Test Affix','content'=>$KiriMenu.$affk,//$sortImg,// ,
                ],
				[
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Alrt','content'=>$strRat,//$sortImg,// ,
                ],
				[
                    'label'=>'<i class="glyphicon glyphicon-home"></i> RATING','content'=>$strRat,//$sortImg,// ,
                ],

            ];



            echo TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
				//'height'=>'tab-height-xs',
                'bordered'=>true,
                'encodeLabels'=>false,
                //'align'=>TabsX::ALIGN_LEFT,

            ]);
		
        ?>

     </div>
	 
</div>

