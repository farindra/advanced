<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\esm\DistributorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Distributors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distributor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Distributor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idDbtr',
            'kdDbtr',
            'nmDbtr',
            'alamat:ntext',
            'pic',
            // 'tlp1',
            // 'tlp2',
            // 'fax',
            // 'email:email',
            // 'website',
            // 'note:ntext',
            // 'status',
            // 'createBy',
            // 'createAt',
            // 'updateAt',
            // 'data_all',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
