<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\master\Barangumum;

/* @var $this yii\web\View */
/* @var $searchModel app\models\master\BarangumumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Umum';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangumum-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barang Umum', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'kd_barang',
            'nm_barang',
 //           'kd_type',
			[
				'attribute' => 'Type',
				'value' => 'type.nm_type',
			],
			[
				'attribute' => 'Kategori',
				'value' => 'kategori.nm_kategori',
			],
 //           'kd_kategori',
            // 'kd_unit',
            // 'kd_supplier',
            // 'kd_distributor',
            // 'parent',
            // 'hpp',
            // 'harga',
            // 'barcode',
            // 'image',
            // 'note:ntext',
            // 'kd_corp',
            // 'kd_cab',
            // 'kd_dep',
            // 'status',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'data_all:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
