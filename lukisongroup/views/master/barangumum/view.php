<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\master\Barangumum;

/* @var $this yii\web\View */
/* @var $model app\models\master\Barangumum */

$this->title = $model->nm_barang;
$this->params['breadcrumbs'][] = ['label' => 'Barang Umum', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangumum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'kd_barang' => $model->kd_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'kd_barang' => $model->kd_barang], [
			'class' => 'btn btn-danger',
			'data' => [
			    'confirm' => 'Are you sure you want to delete this item?',
			    'method' => 'post',
			],
        ]) ?>
    </p>

<?php
	$sts = $model->status;
	if($sts == 1){
		$stat = 'Aktif';
	} else {
		$stat = 'Tidak Aktif';
	}
?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//	           'id',
			'kd_barang',
			'nm_barang',
//			'kd_type',
			[
				'label' => 'Type Barang',
				'value' => $model->type->nm_type,
			],
			
//			'kd_kategori',
			[
				'label' => 'Kategori',
				'value' => $model->kategori->nm_kategori,
			],
			
//			'kd_unit',
			[
				'label' => 'Unit',
				'value' => $model->unit->nm_unit,
			],
			
//			'kd_supplier',
			[
				'label' => 'Suplier',
				'value' => $model->suplier->nm_supplier,
			],
			
			'kd_distributor',
			'parent',
			'hpp',
			'harga',
			'barcode',
			'image',
			'note:ntext',
			
//			'kd_corp',
			[
				'label' => 'Group Perusahaan',
				'value' => $model->perusahaan->nm_corp,
			],
			
//			'status',
			[
				'label' => 'Status',
				'value' => $stat,
			],
			
//			'kd_cab',
//			'kd_dep',
			
			/*
			'status',
			'created_by',
			'created_at',
			'updated_by',
			'updated_at',
			'data_all:ntext', */
        ],
    ]) ?>

</div>
