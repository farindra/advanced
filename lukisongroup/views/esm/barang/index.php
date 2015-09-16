<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\esm\Barang;
use app\models\esm\Distributor;

/* @var $this yii\web\View */
/* @var $searchModel app\models\esm\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kdBrg',
			[
				'attribute' => 'Nama Prodak',
				'value' => 'brg.namaBarang',
			],
//            'nmBrg',
			[
				'attribute' => 'Nama DIstributor',
				'value' => 'dbtr.nmDbtr',
			],
			[
				'attribute' => 'Status Barang',
				'value' => 'unitb.nmUnit',
			],
		
            // 'hpp',
            // 'harga',
            // 'note',
            // 'status',
            // 'createdBy',
            // 'createdAt',
            // 'updateAt',
            // 'data_all',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
