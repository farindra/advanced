<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\master\Tipebarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipebarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
	
    <?php //= $form->field($model, 'created_at')->textInput() ?>

    <?php //= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
