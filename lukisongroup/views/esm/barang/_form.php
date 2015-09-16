<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\esm\Unitbarang;
use app\models\esm\Distributor;
use app\models\esm\Barangmaxi;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdBrg')->textInput(['maxlength' => true]) ?>

	<?php
		$drop = ArrayHelper::map(Barangmaxi::find()->all(), 'kodeBarang', 'namaBarang');
	?>
    <?= $form->field($model, 'nmBrg')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --']) ?>
    <?php //= $form->field($model, 'nmBrg')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'kdUnit')->textInput(['maxlength' => true]) ?>
	<?php
		$drop = ArrayHelper::map(Unitbarang::find()->all(), 'id', 'nmUnit');
	?>
    <?= $form->field($model, 'kdUnit')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --']) ?>
	
    <?php //= $form->field($model, 'kdSuplier')->textInput(['maxlength' => true]) ?>

	<?php
		$drop = ArrayHelper::map(Distributor::find()->all(), 'kdDbtr', 'nmDbtr');
	?>
    <?= $form->field($model, 'kdDbtr')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --']) ?>
    <?php //= $form->field($model, 'kdDbtr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hpp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'barcode')->textInput() ?>

    <?= $form->field($model, 'note')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>

    <?= $form->field($model, 'createdBy')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <!--?= $form->field($model, 'createdBy')->textInput() ?-->

    <?php //= $form->field($model, 'createdAt')->textInput() ?>

    <?php //= $form->field($model, 'updateAt')->textInput() ?>

    <?php //= $form->field($model, 'data_all')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
