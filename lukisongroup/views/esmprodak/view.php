<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\maxi\Maxiprodak */

$this->title = $model->BRG_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maxiprodaks'), 'url' => ['prodak']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maxiprodak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->BRG_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->BRG_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'BRG_ID',
            'BRG_NM',
        ],
    ]) ?>

</div>
