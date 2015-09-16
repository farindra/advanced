<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\sss\A1001 */

$this->title = 'Create A1001';
$this->params['breadcrumbs'][] = ['label' => 'A1001s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a1001-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
