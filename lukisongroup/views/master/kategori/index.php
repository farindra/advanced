<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\master\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>

<aside class="main-sidebar">
    <?php
		/*variable Dropdown*/
		use lukisongroup\models\system\side_menu\M1000;
		use kartik\sidenav\SideNav;
		$side_menu=\yii\helpers\Json::decode(M1000::find()->findMenu('esm')->one()->jval);		
		if (!Yii::$app->user->isGuest) {
			echo SideNav::widget([
				'items' => $side_menu,
				'encodeLabels' => false,
				//'heading' => $heading,
				'type' => SideNav::TYPE_DEFAULT,
				'options' => ['class' => 'sidebar-nav'],
			]);
		};
    ?>
</aside>

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