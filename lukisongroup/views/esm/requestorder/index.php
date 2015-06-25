
<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Modal;  
/* @var $this yii\web\View */
/* @var $searchModel app\models\esm\ro\RequestorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Request Order';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requestorder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
		
<?php
Modal::begin([
    'id' => 'myModal',
    'header' => '<h4 class="modal-title">Buat Request Order</h4>',
]);
 
 require("_form.php");
 
Modal::end();
?>


<?php


/*
Modal::begin([
    'id' => 'mview',
    'header' => '<h4 class="modal-title">Buat Request Order</h4>',
]);

 require("detail.php");
 
Modal::end();
 
$this->registerJs("
    $('#mview').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var title = button.data('title') 
        var href = button.attr('href') 
        modal.find('.modal-title').html(title)
        modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
        $.post(href)
            .done(function( data ) {
                modal.find('.modal-body').html(data)
            });
        })
");
*/
?>

    <p>
        <?= Html::a('Create Request Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
			['class' => 'yii\grid\SerialColumn'],

//			'ID',
			'KD_RO',
			'NOTE:ntext',
			'ID_USER',
			'KD_CORP',
			// 'KD_CAB',
			// 'KD_DEP',
			// 'STATUS',
			// 'CREATED_AT',
			// 'UPDATED_ALL',
			// 'DATA_ALL:ntext',
		[
			'class' => 'yii\grid\ActionColumn',
			/*
			'template' => '{view} {update} {delete} {link}',
			'buttons' => [
			
				'view' => function ($url,$model,$key) {
					return Html::a('', $url, ['class' => 'glyphicon glyphicon-search', 
								'data-toggle'=>"modal",
								'data-target'=>"#mview",
								'data-title'=>"Detail ".$model->KD_RO,] );
//					'<span class="glyphicon glyphicon-search"></span>', 
//					$url);
				},
				
				'update' => function ($url,$model) {
				return Html::a(
				'<span class="glyphicon glyphicon-user"></span>', 
				$url);
				},
				
				'link' => function ($url,$model,$key) {
				return Html::a('Action', $url);
				},
			],
			*/
		],
	
        ],
    ]); ?>

</div>
