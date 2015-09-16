<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\master\BarangumumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangumum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_barang') ?>

    <?= $form->field($model, 'nm_barang') ?>

    <?= $form->field($model, 'kd_type') ?>

    <?= $form->field($model, 'kd_kategori') ?>

    <?php // echo $form->field($model, 'kd_unit') ?>

    <?php // echo $form->field($model, 'kd_supplier') ?>

    <?php // echo $form->field($model, 'kd_distributor') ?>

    <?php // echo $form->field($model, 'parent') ?>

    <?php // echo $form->field($model, 'hpp') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'barcode') ?>

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
