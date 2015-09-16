<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\master\Kategori */

$this->title = 'Update Kategori: ' . ' ' . $model->nm_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kd_kategori' => $model->kd_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
