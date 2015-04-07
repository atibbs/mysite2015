<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
  	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="header">
	<div class="row">
		<div class="medium-12 columns">
	 		
	 	</div>
	</div>
 	

 	<div class="nav-bar">
 		<div class="row">
 			<div class="medium-12 columns">
 				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="Andrew Tibbs">Andrew Tibbs</a>
 				<!-- <a href="mailto:tibbs.andrew@gmail.com" class="contact" title="Contact Andrew"><i class="fa fa-envelope-o"></i></a> -->
 				<p class="location"><i class="fa fa-map-marker"></i>Portland, Oregon</p>
 			</div>
 		</div>
 	</div>
 </header>

 <main role="main">