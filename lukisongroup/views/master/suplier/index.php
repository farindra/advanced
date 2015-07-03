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

            // 'ID',
            'KD_SUPPLIER',
            'NM_SUPPLIER',
            'ALAMAT:ntext',
            'KOTA',
			[
				'attribute' => 'nama distributor',
				'value' => 'perusahaan.NM_CORP',
			],
            // 'tlp',
            // 'mobile',
            // 'fax',
            // 'email:email',
            // 'website',
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
