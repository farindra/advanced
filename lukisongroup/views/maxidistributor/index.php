<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\distributorSearch */
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

//			'DBTR_ID',
//			'DBTR_STT',
			'DBTR_NM',
			'DBTR_JOIN',
			'DBTR_PIC',
			'DBTR_ALMT:ntext',
			'DBTR_ID_TLP',
			
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
