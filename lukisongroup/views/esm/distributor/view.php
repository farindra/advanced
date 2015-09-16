<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Distributor */

$this->title = $model->kdDbtr;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distributor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDbtr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDbtr], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
 //           'idDbtr',
            'kdDbtr',
            'nmDbtr',
            'alamat:ntext',
            'pic',
            'tlp1',
            'tlp2',
            'fax',
            'email:email',
            'website',
            'note:ntext',
//            'status',
//            'createBy',
//            'createAt',
//            'updateAt',
//            'data_all',
        ],
    ]) ?>

</div>
