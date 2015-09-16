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

 //           'id',
            'kd_unit',
            'nm_unit',
            'size',
            'wight',
            'color',
            // 'note:ntext',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
