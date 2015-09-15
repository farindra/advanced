<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model lukisongroup\models\master\Barangumum */

$this->title = 'Buat Barang Umum';
$this->params['breadcrumbs'][] = ['label' => 'Barang Umum', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->sideCorp = 'Lukison Group';                       /* Title Select Company pada header pasa sidemenu/menu samping kiri */
$this->sideMenu = 'datamaster';                                 /* kd_menu untuk list menu pada sidemenu, get from table of database */
$this->title = Yii::t('app', 'Data Master');         /* title pada header page */
$this->params['breadcrumbs'][] = $this->title;                      /* belum di gunakan karena sudah ada list sidemenu, on plan next*/

?>
<div class="barangumum-create">

   
	<div style="border-top:1px solid #c6c6c6; ">&nbsp;</div> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
