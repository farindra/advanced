<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\esm\Barang;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Barang */

$this->title = $model->kdBrg;
$this->params['breadcrumbs'][] = ['label' => 'Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!-- ?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?-->
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
			'kdBrg',
//			'nmBrg',
			[
				'label' => 'Nama Barang',
				'value' => $model->brg->namaBarang,
			],
			
			[
				'label' => 'Total Barang',
				'value' => $model->unitb->nmUnit,
			],
			
//			'kdSuplier',
			[
				'label' => 'Nama Distributor',
				'value' => $model->dbtr->nmDbtr,
			],
//			'kdDbtr',
			'hpp',
			'harga',
			'barcode',
			'note',
			[
				'label' => 'Status',
				'value' => $stat,
			],
			
//			'status',
//			'createdBy',
//			'createdAt',
//			'updateAt',
//			'data_all',
        ],
    ]) ?>

</div>
