<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\sss\A1000 */

$this->title = 'Update A1000: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'A1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'kd_berita' => $model->kd_berita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="a1000-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
