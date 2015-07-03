<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\master\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'KD_KATEGORI',
            'NM_KATEGORI',
            'NOTE:ntext',
            //'CREATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_BY',
            // 'UPDATED_AT',
            //'STATUS',
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
