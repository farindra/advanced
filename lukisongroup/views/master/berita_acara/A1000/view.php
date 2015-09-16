<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\sss\A1000 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'A1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a1000-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'kd_berita' => $model->kd_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'kd_berita' => $model->kd_berita], [
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
            'id',
            'kd_berita',
            'judul',
            'isi:ntext',
            'kd_corp',
            'kd_cab',
            'kd_dep',
            'data_pict:ntext',
            'data_file:ntext',
            'status',
            'created_at',
            'created_by',
            'updated_at',
            'data_all:ntext',
        ],
    ]) ?>

</div>
