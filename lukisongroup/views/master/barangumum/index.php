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

//            'ID',
            'KD_BARANG',
            'NM_BARANG',
 //           'KD_TYPE',
			[
				'attribute' => 'Type',
				'value' => 'type.NM_TYPE',
			],
			[
				'attribute' => 'Kategori',
				'value' => 'kategori.NM_KATEGORI',
			],
 //           'KD_KATEGORI',
            // 'KD_UNIT',
            // 'KD_SUPPLIER',
            // 'KD_DISTRIBUTOR',
            // 'PARENT',
            // 'HPP',
            // 'HARGA',
            // 'BARCODE',
            // 'IMAGE',
            // 'NOTE:ntext',
            // 'KD_CORP',
            // 'KD_CAB',
            // 'KD_DEP',
            // 'STATUS',
            // 'CREATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_BY',
            // 'UPDATED_AT',
            // 'data_all:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
