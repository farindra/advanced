<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\distributor */

$this->title = 'Update : ' . ' ' . $model->DBTR_NM;
$this->params['breadcrumbs'][] = ['label' => 'Distributor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DBTR_NM, 'url' => ['view', 'id' => $model->DBTR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
