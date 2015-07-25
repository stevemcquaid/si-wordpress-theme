<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package SI
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php /* wp_head(); */ ?> 
</head>
<body>
    <div id="container">
      <div id="header">
        <div id="nav">
          <img id="menu" src="<?php echo get_bloginfo('template_directory');?>/img/menu.png" alt="menu" />
          <a href=""><img id="logo" src="<?php echo get_bloginfo('template_directory');?>/img/SensoryLogo.jpg" alt="Sensory Interative" /></a>
        </div>
        <div id="content" class="site-content">
