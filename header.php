<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

  	<meta name="keywords" content="Park Slope Food Coop, Cooperative Design Process, Food Coop, Brooklyn, Cooperative" />
  	<meta name="description" content="A member-owned cooperative in Brooklyn, New York." />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts: Lato / http://www.latofonts.com/ -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Open Graph Tags -->
    <?php include INC . 'open-graph.php'; ?>

  	<!-- RSS -->
  	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

    <?php wp_head(); ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>

  <?php
    // The Side Menu
    include INC . 'app-menu.php';
  ?>

  <div id="app-wrapper">
    <?php
      // Beta Bar
      include INC . 'beta-bar.php';
      // Main Navbar
      include INC . 'nav-bar.php';
      // Flash! Alert bar
      // include INC . 'alert-bar.php';
    ?>