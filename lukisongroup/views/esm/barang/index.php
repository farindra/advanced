<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\esm\Barang;

/* @var $this yii\web\View */
/* @var $searchModel app\models\esm\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->mddPage = 'esm';
$this->title = 'Barang';
$this->params['breadcrumbs'][] = $this->title;
?>

<aside class="main-sidebar">
    <?php
		/*variable Dropdown*/
		use lukisongroup\models\system\side_menu\M1000;
		use kartik\sidenav\SideNav;
		$side_menu=\yii\helpers\Json::decode(M1000::find()->findMenu('esm')->one()->jval);		
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

<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

	
	<?php  
		print_r($querys); 
		echo $querys[0]['HARGA'];
		
	?>
	

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'KD_BARANG',
			[
				'attribute' => 'Nama Prodak',
				'value' => 'brg.NM_BARANG',
			],
//            'NM_BARANG',
			[
				'attribute' => 'Nama DIstributor',
				'value' => 'dbtr.NM_DISTRIBUTOR',
			],
			[
				'attribute' => 'STATUS Barang',
				'value' => 'unitb.NM_UNIT',
			],
		
            // 'HPP',
            // 'HARGA',
            // 'NOTE',
            // 'STATUS',
            // 'createdBy',
            // 'createdAt',
            // 'updateAt',
            // 'DATA_ALL',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
