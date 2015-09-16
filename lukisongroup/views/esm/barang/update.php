<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Barang */

$this->title = 'Update Barang : ' . ' ' . $model->kdBrg;
$this->params['breadcrumbs'][] = ['label' => 'Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
