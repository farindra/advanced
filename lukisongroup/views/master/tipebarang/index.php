<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\master\TipebarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipe Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipebarang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat Tipe Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kd_type',
            'nm_type',
            'note:ntext',
            //'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
			[
				'attribute' => 'Status',
				'value' => function ($model) {
					return $model->status == 1 ? 'Aktif' : 'Tidak Aktif';
				},
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
