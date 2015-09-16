<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Distributor */

$this->title = 'Update Distributor: ' . ' ' . $model->idDbtr;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDbtr, 'url' => ['view', 'id' => $model->idDbtr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
