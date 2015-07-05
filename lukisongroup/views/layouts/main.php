<?php
use lukisongroup\assets\AppAsset;
use mdm\admin\components\MenuHelper;
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use kartik\form\ActiveForm;
/*use yii\bootstrap\Nav;*/
use kartik\nav\NavX;
use kartik\sidenav\SideNav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\icons\Icon;
use dmstr\widgets\Alert;
/* @var $this \yii\web\View */
/* @var $content string */
/* VARIABLE SIDE MENU Author: -Eka- */
	use lukisongroup\models\system\side_menu\M1000;			/* TABLE CLASS */

//AppAsset::register($this);
dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
		<head>
			<meta charset="<?= Yii::$app->charset ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<?= Html::csrfMetaTags() ?>
			<title><?= Html::encode($this->title) ?></title>
			<title><?= Html::encode($this->mddPage) ?></title> 
			<?php $this->head() ?>
		</head>
		<?php
			/*
			* == Call Variable Menu manipulation | --author: ptr.nov--
			*/
			$callback = function($menu){
				$data = eval($menu['data']);
				return [
					'label' => $menu['name'],
					'url' => [$menu['route']],
					//'options' => $data,
					'items' => $menu['children']
				];
			};
			/*Side Menu*/
			$side_menu=M1000::find()->findMenu('hrd')->one()->jval;
			$side_menu=json_decode($side_menu,true);
			$corp="<p class='pull-left'>&copy; LukisonGroup <?= date('Y') ?></p>";			
		?>
		
		<! - NOT LOGIN- Author : -ptr.nov- >
		<?php if (Yii::$app->user->isGuest) { ?>
			<body class="skin-blue sidebar-mini"> 
				<!Refrensi:skin-blue|skin-blue-light|skin-green|skin-yellow|skin-purple|skin-red|skin-black>
				<?php $this->beginBody(); ?>  
					<div class="wrapper bg-lime"> 
						<!Refrensi:bg-light-blue|bg-green|bg-yellow|bg-red|bg-aqua|bg-purple|bg-blue|bg-navy|bg-teal|bg-maroon|bg-black|bg-gray|bg-olive|bg-lime|bg-orange|bg-fuchsia>
						<header class="main-header">
							<a  class="logo">
								<!-- LOGO -->
								LukisonGroup
							</a>
							<?php
								// echo  \yii\helpers\Json::encode($menuItems);
								if (Yii::$app->user->isGuest) {
									//$menuItemsNoLogin[] = ['label' => '<a data-toggle="modal" data-target="#modal" style="cursor: pointer">Click me gently!</a>' , 'url'=> ['/site/login5']];
                                    $menuItemsNoLogin[] = ['label' => Icon::show('home').'Home', 'url' => ['/site/index']];
									$menuItemsNoLogin[] = [
										'label' => Icon::show('shopping-cart') .'e-Procurement', 'url' => ['/site/loginc'],
											'items' => [
												['label' => Icon::show('book') .'Catalog', 'url' => '#'],
												['label' => Icon::show('bar-chart-o') .'Supplier', 'url' => '#'],
											],
									];
									$menuItemsNoLogin[] = ['label' => Icon::show('sitemap') .'e-Recruitment', 'url' => ['/site/login7']];
									$menuItemsNoLogin[] = ['label' => Icon::show('comments') .'e-Helpdesk', 'url' => ['/site/login8']];
									$menuItemsNoLogin[] = ['label' => Icon::show('info-circle') .'FAQ', 'url' => ['/site/login8']];
                                    $menuItemsNoLogin[] = ['label' => Icon::show('user').'User', 'url' => ['/site/login']];

                                    NavBar::begin([
										//'brandLabel' => 'LukisonGroup',
										//'brandUrl' => Yii::$app->homeUrl,
										'options' => [
											//'class' => 'navbar-inverse navbar-fixed-top',
										   //'class' =>  'navbar navbar-inverse navbar-static-top',
											'class' => 'navbar-inverse navbar-static-top',
										   // 'class' => 'navbar navbar-inverse',
											'role'=>'navigation'//,'style'=>'margin-bottom: 0'
										],
									]);

									echo NavX::widget([
										'options' => ['class' => 'navbar-nav navbar-left'],
										'items' => $menuItemsNoLogin,
										'activateParents' => true,
										'encodeLabels' => false,
									]);
									NavBar::end();
								};

							?>
						 </header>
                            <!-- CROUSEL Author: -ptr.nov- !-->
						 	<?php
								echo Carousel::widget([
								  'items' => [
									 // equivalent to the above
									  [
										'content' => '<img src="'.Yii::getAlias('@path_carousel') . '/Cover.jpg" style="width:100%; height:100%"/>',
										'options' =>[ 'style' =>'width: 100%; height: 150px;'],
									  ],
									[
										'content' => '<img src="'.Yii::getAlias('@path_carousel') . '/carousel2.jpg" style="width:100%; height:100%"/>',
										'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
									  ],
									  
									  // the item contains both the image and the caption
									  [
										  'content' => '<img src="'.Yii::getAlias('@path_carousel') . '/carousel3.jpg" style="width:100%;height:100%"/>',
										  //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
										 'options' =>[ 'style' =>'width: 100%; height: 150px;'],
										
									  ],
								  ],
								   'options' =>[ 'style' =>'width: 100%!important; height: 150px;'],
								]);
							?>		
						<?php echo $content; ?>
					</div>
					<footer class="main-footer">
							<p class="pull-left"> <?php echo $corp . date('Y') ?></p>
					</footer>
				<?php $this->endBody() ?>
			</body>
		<?php } ?>

		<! -LOGIN- Author : -ptr.nov- >
		<?php if (!Yii::$app->user->isGuest) { ?>
			<body class="skin-green-light sidebar-mini">
				<?php $this->beginBody(); ?>
					<div class="wrapper">
						<header class="main-header">
							<a  class="logo">
								<!-- LOGO -->
								LukisonGroup
							</a>
							<?php
								// echo  \yii\helpers\Json::encode($menuItems);
								if (!Yii::$app->user->isGuest) {
									//$menuItems  = MenuHelper::getAssignedMenu(Yii::$app->user->id);
									$menuItems = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback);
									$menuItems[] = [
										'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
										'url' => ['/site/logout'],
										'linkOptions' => ['data-method' => 'post']
									];
									
									NavBar::begin([
										//'brandLabel' => 'LukisonGroup',
										//'brandUrl' => Yii::$app->homeUrl,
										'options' => [
											//'class' => 'navbar-inverse navbar-fixed-top',
										   //'class' =>  'navbar navbar-inverse navbar-static-top',
											'class' => 'navbar-inverse navbar-static-top',
										   // 'class' => 'navbar navbar-fixed-top',
											'role'=>'navigation'//,'style'=>'margin-bottom: 0'
										],
									]);

									echo NavX::widget([
										'options' => ['class' => 'navbar-nav navbar-left'],
										'items' => $menuItems,
										'activateParents' => true,
										'encodeLabels' => false,
									]);
									NavBar::end();
								};

							?>
						 </header>

						<div class="content-wrapper" >
							<aside class="main-sidebar">
							
								<!-- User Login -->
									<div class="user-panel">
										<div class="pull-left image">
											<img src="<?= Yii::getAlias('@HRD_EMP_UploadUrl') ?>/Piter.jpg" class="img-circle" alt="User Image"/>
										</div>
										<div class="pull-left info">
											<p>Alexander Pierce</p>

											<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
										</div>
									</div>
								<!-- /.User Login -->
								<!-- search form -->
									<form action="#" method="get" class="sidebar-form">
										<div class="input-group">
											<input type="text" name="q" class="form-control" placeholder="Search..."/>
										  <span class="input-group-btn">
											<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
											</button>
										  </span>
										</div>
									</form>
								<!-- /.search form -->
								
								<?php								
									/**
									 * Author: -ptr.nov-
									 * Noted: add variable "mddPage" get value
									 * \vendor\yiisoft\yii2\web\View.php
									*/
									//echo $this->mddPage;
									if ($this->mddPage != false) {
										$getSideMenu=$this->mddPage;
									}else{
										$getSideMenu='mdefault';
									}
									$side_menu=\yii\helpers\Json::decode(M1000::find()->findMenu($getSideMenu)->one()->jval);
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
							<section class="content">
								<?php /*echo Breadcrumbs::widget([
												'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
											]);
										*/
								?>
								<?= Alert::widget() ?>
								<?php echo $content; ?>
							</section>
						</div>
					</div>			
					<footer class="main-footer">
						<p class="pull-left"> <?php echo $corp . date('Y') ?></p>
					</footer>
				<?php $this->endBody() ?>
			</body>
		<?php } ?>
	</html>
<?php $this->endPage() ?>
