<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model lukisongroup\models\sss\R1000 */

$this->title = 'Create R1000';
$this->params['breadcrumbs'][] = ['label' => 'R1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="r1000-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
