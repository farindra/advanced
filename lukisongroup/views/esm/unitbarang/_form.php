<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\esm\Unitbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unitbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kdUnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmUnit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?php //= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_by')->hiddenInput(['value'=>Yii::$app->user->identity->username])->label(false) ?>
    <?php //= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
