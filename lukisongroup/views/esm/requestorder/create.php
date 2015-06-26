<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\esm\ro\Requestorder */

$this->title = 'Buat Request Order';
$this->params['breadcrumbs'][] = ['label' => 'Request Order', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requestorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('buat', [
        'model' => $model,
    ]) ?>

</div>
