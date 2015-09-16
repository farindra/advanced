<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\sss\A1000 */

$this->title = 'Create A1000';
$this->params['breadcrumbs'][] = ['label' => 'A1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a1000-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
