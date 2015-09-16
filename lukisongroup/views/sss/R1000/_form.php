<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model lukisongroup\models\sss\R1000 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="r1000-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Val_Nm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Val_1')->textInput() ?>

    <?= $form->field($model, 'UPDT')->textInput() ?>

    <?= $form->field($model, 'Val_Json')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
