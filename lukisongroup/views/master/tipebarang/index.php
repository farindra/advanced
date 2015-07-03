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

            //'ID',
            'KD_TYPE',
            'NM_TYPE',
            'NOTE:ntext',
            //'CREATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_BY',
            // 'UPDATED_AT',
			[
				'attribute' => 'STATUS',
				'value' => function ($model) {
					return $model->STATUS == 1 ? 'Aktif' : 'Tidak Aktif';
				},
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
