<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Distributor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdDbtr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmDbtr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlp1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tlp2')->textInput(['maxlength' => true, 'value'=> '0']) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->input('email') ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'status')->dropDownList(['' => ' -- Silahkan Pilih --', '0' => 'Tidak Aktif', '1' => 'Aktif']) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
	
    <?= $form->field($model, 'createBy')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>

	

	<!-- 
    < ?= $form->field($model, 'status')->textInput() ?>


    < ?= $form->field($model, 'createAt')->textInput(['maxlength' => true]) ?>

    < ?= $form->field($model, 'updateAt')->textInput(['maxlength' => true]) ?>

    < ?= $form->field($model, 'data_all')->textInput(['maxlength' => true]) ?>
-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
