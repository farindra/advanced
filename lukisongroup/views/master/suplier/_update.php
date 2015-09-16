<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\esm\Perusahaan;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Suplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

	<?php
		$drop = ArrayHelper::map(Perusahaan::find()->all(), 'kd_corp', 'nm_corp');
	?>
    <?= $form->field($model, 'kd_corp')->dropDownList($drop,['prompt'=>' -- Pilih Salah Satu --'])->label('Group Perusahaan') ?>
    <?php //= $form->field($model, 'kd_corp')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'kd_cab')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'kd_dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>
    <?php //= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'updated_by')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <?php //= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'created_at')->textInput() ?>

    <?php //= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'updated_at')->textInput() ?>

    <?php //= $form->field($model, 'data_all')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
