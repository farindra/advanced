<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\master\Tipebarang */

$this->title = 'Update Tipebarang: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipebarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kd_type' => $model->kd_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipebarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
