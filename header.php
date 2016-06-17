<!DOCTYPE html>
<html>
<!-- head start -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- FAVICON contains dymanic templete directory  ...php bloginfo...  -->
<link rel="icon" href="<?php bloginfo('template_directory'); ?>img/favicon.ico">
<!-- Dinamic Title collects website title then ads | ....  -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- Bootstrap core CSS -->
<!--  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--<script src="js/ie-emulation-modes-warning.js"></script>-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Custom styles for this page -->
<!-- <link href="css/styles.css" rel="stylesheet">-->
<!-- head hook -->
<?php wp_head(); ?>
<!-- head *END* -->
</head>
<!-- body start -->
<body <?php body_class(); ?>>
<!-- .container container-fluid start -->
<div class="container container-fluid"> 
<!-- Bootstrap Navigation With Custom Classes -->
<header class="main-header"> 
<!-- Secondary navigation-box above main navigation -->
<div class="container-fluid nav-top">
<img src="<?php bloginfo('template_directory'); ?>/img/bhs-logo.png" alt="" class="logo">
<!-- Add your own class for additional styling via php $args = array below on this file -->
<ul class="">
<li class="active"><a href="#">Home</a>|</li>
<li><a href="#"> About Us</a>|</li>
<li><a href="#"> FAQ</a>|</li>
<li><a href="#">Contact</a></li>
</ul>

<!-- Bootstrap component search panel -->
<form class="navbar-form navbar-right" role="search">

<div class="form-group">
<input type="text" class="form-control round-search " placeholder="Search" >
</div>
<img class="btn-header" src="<?php bloginfo('template_directory'); ?>/img/button.gif" alt="Donate">
<!--<button type="submit" class="btn btn-default btn-header">Submit</button>-->
</form>
</div>
<!-- Nav Panel --> 
<!-- Responsive Bootstrap component navigation with custom classes -->
<nav class="navbar navbar-default navbar-bhs">
<!-- container-fluid start -->
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div id="navbar" class="navbar-collapse collapse">
<!-- 
THIS IS ORIGINAL MENU CONSTRUCTION
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">What is an Addiction?</a></li>
<li><a href="#">Make an Appointment</a></li>
<li><a href="#">Contact</a></li>
</ul> -->
<!-- php args array start-->
<?php
$args = array(
//'theme_location'  => '',
//'menu'            => '',
'menu_class'      => 'nav navbar-nav', /*| = Class that applies to ul in navigation = */
//'container'       => '',
//'container_class' => '',
//'container_id'    => '',
//'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
//'before'          => '',
//'after'           => '',
//'link_before'     => '',
//'link_after'      => '',
// must be disabled for proper navigation display |||| 'items_wrap'      => '&lt;ul id="%1$s" class="%2$s">%3$s&lt;/ul>',
'depth'           => 0,
//'walker'          => ''
);
wp_nav_menu( $args ); ?>
<!-- php args array end-->
</div>
<!-- container-fluid *END* --> 
</div>
<!-- nav navbar-default navbar-bhs *END*  -->
</nav>