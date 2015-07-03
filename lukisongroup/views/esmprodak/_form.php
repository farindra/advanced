<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\maxi\Maxiprodak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maxiprodak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BRG_ID')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'BRG_NM')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
