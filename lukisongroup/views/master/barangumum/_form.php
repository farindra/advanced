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

    <?= $form->field($model, 'KD_BARANG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NM_BARANG')->textInput(['maxlength' => true]) ?>

	<?php
		$drop = ArrayHelper::map(Tipebarang::find()->where(['STATUS' => 1])->all(), 'KD_TYPE', 'NM_TYPE');
	?>
    <?= $form->field($model, 'KD_TYPE')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Type Barang') ?>
	

	<?php
		$drop = ArrayHelper::map(Kategori::find()->where(['STATUS' => 1])->all(), 'KD_KATEGORI', 'NM_KATEGORI');
	?>
    <?= $form->field($model, 'KD_KATEGORI')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Kategori') ?>

	<?php
		$drop = ArrayHelper::map(Unitbarang::find()->where(['STATUS' => 1])->all(), 'KD_UNIT', 'NM_UNIT');
	?>
    <?= $form->field($model, 'KD_UNIT')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Unit') ?>

	<?php
		$drop = ArrayHelper::map(Suplier::find()->where(['STATUS' => 1])->all(), 'KD_SUPPLIER', 'NM_SUPPLIER');
	?>
    <?= $form->field($model, 'KD_SUPPLIER')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Supplier') ?>

    <?= $form->field($model, 'KD_DISTRIBUTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PARENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HPP')->textInput() ?>

    <?= $form->field($model, 'HARGA')->textInput() ?>

    <?= $form->field($model, 'BARCODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IMAGE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOTE')->textarea(['rows' => 6]) ?>

	<?php
		$drop = ArrayHelper::map(Perusahaan::find()->all(), 'KD_CORP', 'NM_CORP');
	?>
    <?= $form->field($model, 'KD_CORP')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Group Perusahaan') ?>
	
	
    <?= $form->field($model, 'KD_CAB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_DEP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>
    <?php //= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'CREATED_BY')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <?php //= $form->field($model, 'CREATED_BY')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'CREATED_AT')->textInput() ?>

    <?php //= $form->field($model, 'UPDATED_BY')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'UPDATED_AT')->textInput() ?>

    <?php //= $form->field($model, 'DATA_ALL')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
