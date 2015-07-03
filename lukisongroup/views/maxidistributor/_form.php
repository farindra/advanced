<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\distributor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DBTR_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DBTR_PIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DBTR_ALMT')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DBTR_ID_TLP')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
