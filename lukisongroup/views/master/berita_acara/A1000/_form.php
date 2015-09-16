<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sss\A1000 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="a1000-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kd_corp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_cab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_pict')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_file')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'data_all')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
