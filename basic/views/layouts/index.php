<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <!--================ Start Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="<?=yii\helpers\Url::home()?>"><?= Html::img('@web/img/logo.png', ['alt' => 'Наш логотип']) ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="<?=yii\helpers\Url::home()?>">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['category/category']);?>">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['singleproduct/singleproduct']);?>">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['checkout/checkout']);?>">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['confirmation/confirmation']);?>">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['cart/cart']);?>">Shopping Cart</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['blog/blog']);?>">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['singleblog/singleblog']);?>">Blog Details</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['login/login']);?>">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['register/register']);?>">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['trackingorder/trackingorder']);?>">Tracking</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['contact/contact']);?>">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
    <?= $content ?>
    <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="<?=yii\helpers\Url::home()?>">Home</a></li>
								<li><a href="<?= yii\helpers\Url::to(['category/category']);?>">Shop</a></li>
								<li><a href="<?= yii\helpers\Url::to(['blog/blog']);?>">Blog</a></li>
								<li><a href="<?= yii\helpers\Url::to(['singleproduct/singleproduct']);?>">Product</a></li>
								<li><a href="#">Brand</a></li>
								<li><a href="<?= yii\helpers\Url::to(['contact/contact']);?>">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Gallery</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img <?= Html::img('@web/img/gallery/r1.jpg') ?>></li>
								<li><img <?= Html::img('@web/img/gallery/r2.jpg') ?>></li>
								<li><img <?= Html::img('@web/img/gallery/r3.jpg') ?>></li>
								<li><img <?= Html::img('@web/img/gallery/r5.jpg') ?>></li>
								<li><img <?= Html::img('@web/img/gallery/r7.jpg') ?>></li>
								<li><img <?= Html::img('@web/img/gallery/r8.jpg') ?>></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center"></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>