<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\esm\perusahaan;
/* @var $this yii\web\View */
/* @var $searchModel app\models\esm\SuplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat Suplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'kd_supplier',
            'nm_supplier',
            'alamat:ntext',
            'kota',
			[
				'attribute' => 'nama distributor',
				'value' => 'perusahaan.nm_corp',
			],
            // 'tlp',
            // 'mobile',
            // 'fax',
            // 'email:email',
            // 'website',
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
