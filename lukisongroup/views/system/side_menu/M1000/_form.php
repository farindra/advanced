<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;

?>
<div class="container">
<div class="col-md-4 m1000-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_menu')->textInput(['maxlength' => true,'placeholder'=>SSS_CORP_ID.'_'])->label('Kode Menu') ?>

    <?= $form->field($model, 'nm_menu')->textInput(['maxlength' => true])->label('Nama Menu') ?>

    <?= $form->field($model, 'jval')->textarea(['rows' => 6])->label('Json Value') ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6])->label('Keterangan') ?>

    <?= $form->field($model, 'status')->widget(CheckboxX::classname(), ['pluginOptions'=>['threeState'=>false]])->label('Aktif');  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>