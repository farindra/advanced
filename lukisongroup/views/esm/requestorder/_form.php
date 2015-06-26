<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\esm\ro\Requestorder;
use app\models\esm\ro\RequestorderSearch;

/* @var $this yii\web\View */
/* @var $model app\models\esm\ro\Requestorder */
/* @var $form yii\widgets\ActiveForm */


        $model = new Requestorder();

?>

<div class="requestorder-form">

    <?php // $form = ActiveForm::begin(); ?>
	<?php
$form = ActiveForm::begin([
    'method' => 'post',
    'action' => ['esm/requestorder/create'],
]);
	?>

    <?= $form->field($model, 'KD_RO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_CORP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_CAB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_DEP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput() ?>

    <?= $form->field($model, 'CREATED_AT')->textInput() ?>

    <?= $form->field($model, 'UPDATED_ALL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_ALL')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'NOTE')->textarea(['rows' => 6]) ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
