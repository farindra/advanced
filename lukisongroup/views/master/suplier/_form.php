<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\widgets\SwitchInput;

use yii\helpers\ArrayHelper;
use lukisongroup\models\master\Perusahaan;

/* @var $this yii\web\View */
/* @var $model lukisongroup\models\esm\Suplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suplier-form">

    <?php $form = ActiveForm::begin([
		'type' => ActiveForm::TYPE_HORIZONTAL,
		'method' => 'post',
		'action' => ['master/suplier/simpan'],
		]); ?>

    <?php //= $form->field($model, 'KD_SUPPLIER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NM_SUPPLIER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'KOTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TLP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MOBILE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WEBSITE')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'IMAGE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOTE')->textarea(['rows' => 6]) ?>

	<?php
		$drop = ArrayHelper::map(Perusahaan::find()->all(), 'KD_CORP', 'NM_CORP');
	?>
    <?= $form->field($model, 'KD_CORP')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Group Perusahaan') ?>
	
    <?=  $form->field($model, 'STATUS')->radioList(['1'=>'Aktif','0'=>'Tidak Aktif']) ?>
    <?= $form->field($model, 'CREATED_BY')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <?= $form->field($model, 'CREATED_AT')->hiddenInput(['value'=>date('Y-m-d H:i:s')])->label(false) ?>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-plus"></i>&nbsp;&nbsp; Tambah Suplier' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
