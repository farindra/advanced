<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\master\Unitbarang */

$this->title = 'Update Unit Barang: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Unit Barang ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kd_unit' => $model->kd_unit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unitbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
