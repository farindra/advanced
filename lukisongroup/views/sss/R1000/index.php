<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\sss\R1000Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foodtown Report';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="r1000-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo  Html::a('Create R1000', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'VAL_NM',
            'VAL_1',
            'UPDT',
            'VAL_JSON:ntext',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>