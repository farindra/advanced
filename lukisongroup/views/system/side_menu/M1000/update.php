<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model lukisongroup\models\system\M1000 */

$this->title = 'Update M1000: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'M1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kd_menu' => $model->kd_menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="m1000-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
