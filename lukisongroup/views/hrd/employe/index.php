<?php
/*
 * By ptr.nov
 * Load Config CSS/JS
 */
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\hrd\Corp;
use app\models\hrd\Dept;
use app\models\hrd\Jabatan;
use app\models\hrd\Status;
use backend\assets\AppAsset;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use yii\widgets\Breadcrumbs;
use kartik\nav\NavX;
use kartik\sidenav\SideNav;
use yii\bootstrap\NavBar;
use \kartik\date\DatePicker;
use kartik\builder\Form;


AppAsset::register($this);


/* @var $this yii\web\View */
/* @var $searchModel app\models\maxi\MaxiprodakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employe');
$this->params['breadcrumbs'][] = $this->title;
$Combo_Corp = ArrayHelper::map(Corp::find()->orderBy('SORT')->asArray()->all(), 'CORP_NM','CORP_NM');
$Combo_Dept = ArrayHelper::map(Dept::find()->orderBy('SORT')->asArray()->all(), 'DEP_NM','DEP_NM');
$Combo_Jab = ArrayHelper::map(Jabatan::find()->orderBy('SORT')->asArray()->all(), 'JAB_NM','JAB_NM');
$Combo_Status = ArrayHelper::map(Status::find()->orderBy('SORT')->asArray()->all(), 'STS_NM','STS_NM');
//$Tgl= DatePicker::widget([
	//'name' => 'check_issue_date', 
	//'value' => date('d-M-Y', strtotime('+2 days')),
	//'options' => ['placeholder' => 'Select issue date ...'],
//	'	ns' => [
//		'format' => 'yyyy-mm-dd',
//		'todayHighlight' => true
//	]
//]);
    //print_r($dataProvider);
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
                            return Html::img(Yii::getAlias('@path_emp') . '/'. $data->EMP_IMG, ['width'=>'40']);
                        },
            ],  
				'EMP_ID',
				'EMP_NM',
				'EMP_NM_BLK',			
            [
				/*Author -ptr.nov-*/
				'attribute' =>'corpOne.CORP_NM',
				'filter' => $Combo_Corp,
				//'attribute' =>'corpOne',
				//'value'=>'corpOne.CORP_NM',
				//'attribute' =>'corpName',
				//'attribute' =>'CORP_NM',
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
        'hover'=>true, //cursor selec
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
use kartik\sortable\Sortable;
/*
	$sortImg= Sortable::widget(['type'=>'grid',
		'items'=>[['content'=>'<div class="grid-item text-danger">Item 1</div>'],
			['content'=>'<div class="grid-item text-danger">Item 2</div>'],
			['content'=>'<div class="grid-item text-danger">Item 3</div>'],
			['content'=>'<div class="grid-item text-danger">Item 4</div>'],
			['content'=>'<div class="grid-item text-danger">Item 5</div>'],
			['content'=>'<div class="grid-item text-danger">Item 6</div>'],
			['content'=>'<div class="grid-item text-danger">Item 7</div>'],
			['content'=>'<div class="grid-item text-danger">Item 8</div>'],
			['content'=>'<div class="grid-item text-danger">Item 9</div>'],
			['content'=>'<div class="grid-item text-danger">Item 10</div>'],
		]
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

use kartik\rating\StarRating;

	// Usage with ActiveForm and model
	/*echo $form->field($model, 'rating')->widget(StarRating::classname(), [
		'pluginOptions' => ['size'=>'lg']
	]);
	*/

	// With model & without ActiveForm
	$strRat= StarRating::widget([
		'name' => 'rating_1',
		'pluginOptions' => ['disabled'=>true, 'showClear'=>false]
	]);
	
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
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Alrt','content'=>$ingatan,//$sortImg,// ,
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

