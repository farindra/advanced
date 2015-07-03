<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use kartik\nav\NavX;

use mdm\admin\components\MenuHelper;
//use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use yii\caching\TagDependency;
//use mdm\admin\models\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
			/*ptr.nov Call Variable Db Menu/Permission*/
			$callback= function($menu){
				$data=eval($menu['data']);
				return [
					'label' => 'test'.$menu['name'],
					'url'	=> $menu['route'],
					'options' => $menu['data'],
					'items'	=>$menu['children']
				];
			};
            NavBar::begin([
                'brandLabel' => 'LG Office',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/lg/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/lg/login']];
            } else {
				//$menuItems  = MenuHelper::getAssignedMenu(Yii::$app->user->id);
				$menuItems  = MenuHelper::getAssignedMenu(Yii::$app->user->id,null,$callback);
				$menuItems[] = [
                            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/lg/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ];
                //$menuItems[] = [
                //    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                //   'url' => ['/site/logout'],
                //   'linkOptions' => ['data-method' => 'post']
                //];
            }
            echo NavX::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
				//'activateParents' => true,
				//'encodeLabels' => false,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
