<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Suplier */

$this->title = $model->nm_supplier;
$this->params['breadcrumbs'][] = ['label' => 'Suplier', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'kd_supplier' => $model->kd_supplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'kd_supplier' => $model->kd_supplier], [
			'class' => 'btn btn-danger',
			'data' => [
			    'confirm' => 'Are you sure you want to delete this item?',
			    'method' => 'post',
			],
        ]) ?>
    </p>
<?php 
	$stt = $model->status;
	if($stt = 1){
		$stat = 'Aktif';
	} else {
		$stat = 'Tidak Aktif';
	}
?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//			'id',			
			'kd_supplier',
			'nm_supplier',
			'alamat:ntext',
			'kota',
			'tlp',
			'mobile',
			'fax',
			'email:email',
			'website',
//			'image',
			[
				'attribute' => 'Group Perusahaan',
				'value'=>  $model->perusahaan->nm_corp
			],
			[
				'attribute' => 'Status',
				'value'=>$stat
			],
//			'note:ntext',
//			'kd_cab',
//			'kd_dep',
//			'created_by',
//			'created_at',
//			'updated_by',
//			'updated_at',
//			'data_all:ntext',
        ],
    ]) ?>

</div>
