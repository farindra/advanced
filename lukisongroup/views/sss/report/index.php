<?php
/**
 * User: farindra
 * Date: 4/13/15
 * Time: 9:20 PM
 */

use lukisongroup\assets\sss\ReportAsset;
use lukisongroup\assets\AppAsset;
use kartik\sidenav\SideNav;
use yii\helpers\Html;
use kartik\icons\Icon;

$this->title = 'Report';
$this->params['breadcrumbs'][] = $this->title;

ReportAsset::register($this);
AppAsset::register($this);

?>

<div class="beritaacara-index">
    <h3>Berita Acara</h3>
    <aside class="main-sidebar">
        <?php
        if (!Yii::$app->user->isGuest) {
            echo SideNav::widget([
                'items' => $side_menu,
                'encodeLabels' => false,
                //'heading' => $heading,
                'type' => SideNav::TYPE_DEFAULT,
                'options' => ['class' => 'sidebar-nav'],
            ]);

        };
        ?>

    </aside>
<?php include 'dashboard-1.php';?>

</div>



