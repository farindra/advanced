<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\master\UnitbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unitbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat Unit Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

 //           'ID',
            'KD_UNIT',
            'NM_UNIT',
            'SIZE',
            'WIGHT',
            'COLOR',
            // 'NOTE:ntext',
            // 'CREATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_BY',
            // 'UPDATED_AT',
            // 'STATUS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
