<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\distributorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'DBTR_ID') ?>

    <?= $form->field($model, 'DBTR_NM') ?>

    <?= $form->field($model, 'DBTR_STT') ?>

    <?= $form->field($model, 'DBTR_JOIN') ?>

    <?= $form->field($model, 'DBTR_PIC') ?>

    <?php // echo $form->field($model, 'DBTR_ALMT') ?>

    <?php // echo $form->field($model, 'DBTR_ID_TLP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
