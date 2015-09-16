<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


use app\models\master\Kategori;
use app\models\master\Unitbarang;
use app\models\master\Suplier;
use app\models\master\Perusahaan;
use app\models\master\Tipebarang;

/* @var $this yii\web\View */
/* @var $model app\models\master\Barangumum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangumum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_barang')->textInput(['maxlength' => true]) ?>

	<?php
		$drop = ArrayHelper::map(Tipebarang::find()->where(['status' => 1])->all(), 'kd_type', 'nm_type');
	?>
    <?= $form->field($model, 'kd_type')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Type Barang') ?>
	

	<?php
		$drop = ArrayHelper::map(Kategori::find()->where(['status' => 1])->all(), 'kd_kategori', 'nm_kategori');
	?>
    <?= $form->field($model, 'kd_kategori')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Kategori') ?>

	<?php
		$drop = ArrayHelper::map(Unitbarang::find()->where(['status' => 1])->all(), 'kd_unit', 'nm_unit');
	?>
    <?= $form->field($model, 'kd_unit')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Unit') ?>

	<?php
		$drop = ArrayHelper::map(Suplier::find()->where(['status' => 1])->all(), 'kd_supplier', 'nm_supplier');
	?>
    <?= $form->field($model, 'kd_supplier')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Supplier') ?>

    <?= $form->field($model, 'kd_distributor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hpp')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

	<?php
		$drop = ArrayHelper::map(Perusahaan::find()->all(), 'kd_corp', 'nm_corp');
	?>
    <?= $form->field($model, 'kd_corp')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Group Perusahaan') ?>
	
	
    <?= $form->field($model, 'kd_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>
    <?php //= $form->field($model, 'status')->textInput() ?>

    <?php //= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <?php //= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'updated_at')->textInput() ?>

    <?php //= $form->field($model, 'data_all')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
