<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\esm\SuplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_supplier') ?>

    <?= $form->field($model, 'nm_supplier') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'kota') ?>

    <?php // echo $form->field($model, 'tlp') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'kd_corp') ?>

    <?php // echo $form->field($model, 'kd_cab') ?>

    <?php // echo $form->field($model, 'kd_dep') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'data_all') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
