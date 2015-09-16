<?php

use yii\helpers\Html;
use lukisongroup\assets\AppAsset;
AppAsset::register($this);

$this->title = 'Create M1000';
$this->params['breadcrumbs'][] = ['label' => 'M1000s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="m1000-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]);

   // $this->registerJs('alert("hello");', \yii\web\VIEW::POS_HEAD);

   // $this->registerJs('$(document).ready(function() { alert("hello"); });', \yii\web\VIEW::POS_HEAD);

    ?>

    <script type="text/javascript">
        $(document).ready(function() {
           $('#m1000-status').val('checked');
        });
    </script>



</div>
