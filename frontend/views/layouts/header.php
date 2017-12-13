<?php
use yii\widgets\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
?>
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
<div class="container">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<!-- Your Logo -->
		<a href="#hero" class="navbar-brand">GO<span class="lighter">RAISIN</span></a>
	</div>
	<!-- Start Navigation -->

        
	<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	<ul class="nav navbar-nav">
        <?php
        
    NavBar::begin([
        'brandLabel' => 'GoRaisins',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Whitepaper', 'url' => ['/site/index']],
        ['label' => 'Team', 'url' => ['/site/about']],
        ['label' => 'Roadmap', 'url' => ['/campaign/new']],
        ['label' => 'FAQ', 'url' => ['/campaign']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label'=>'Start a Campaign', 'options'=>['class' =>'btn btn-primary btn-xs', 'type'=> 'button'], 'url' => ['/campaign/new'], ];
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup'], ];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Dropdown',
                       $menuItems[] = ['label' => 'newDropdown',
                           ['label' => 'My Profile','url'=>'profile/'],
                           ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                          ]
                        ];
        $menuItems[] = ['label' => 'Logout ('. Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    ?>
<!--		<li>
		<a href="#hero">Home</a>
		</li>
		<li>
		<a href="#about">Sign in</a>
		</li>
		<li>
		<a url="/campaign">Campaigns</a>
		</li>
		<li>
		<a href="#slider">Testimonials</a>
		</li>
		<li>
		<a href="#faq">FAQ</a>
		</li>
		<li>
		<a href="#contactarea">Contact</a>
		</li>
	</ul>
	</nav>
-->
        </ul>
</div>
</header>

