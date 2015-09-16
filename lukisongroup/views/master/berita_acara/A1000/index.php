<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap;
use lukisongroup\assets\SssAsset;
//use lukisongroup\assets;

/* @var $this yii\web\View */
/* @var $searchModel app\models\sss\A1000Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Header Berita Acara [A1000]';
$this->params['breadcrumbs'][] = $this->title;
SssAsset::register($this);
?>
<div class="a1000-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create A1000', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kd_berita',
            'judul',
            'isi:ntext',
            'kd_corp',
            // 'kd_cab',
            // 'kd_dep',
            // 'data_pict:ntext',
            // 'data_file:ntext',
            // 'status',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'data_all:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

   // Yii::$app()->clientScript->registerScript('helloscript',"
   //     alert('hello');
   // ",CClientScript::POS_READY);

    ?>

</div>
