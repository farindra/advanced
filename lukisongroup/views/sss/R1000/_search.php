<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sss\R1000Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="r1000-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Val_Nm') ?>

    <?= $form->field($model, 'Val_1') ?>

    <?= $form->field($model, 'UPDT') ?>

    <?= $form->field($model, 'Val_Json') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
