<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\master\Kategori */

$this->title = $model->nm_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'kd_kategori' => $model->kd_kategori], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'kd_kategori' => $model->kd_kategori], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php
	if($model->status == '1'){
		$stat = "Aktif";
	} else {
		$stat = "Tidak Aktif";
	}
 ?>

	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//			'id',
			'kd_kategori',
			'nm_kategori',
			'note:ntext',
//			'created_by',
//			'created_at',
//			'updated_by',
//			'updated_at',
			[
				'label' => 'Status',
				'value' => $stat,
			],
        ],
    ]) ?>

</div>
