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
	 		<p class="location"><span class="icon"></span>Portland, Oregon</p>
	 	</div>
	</div>
 	

 	<div class="nav-bar">
 		<div class="row">
 			<div class="medium-12.columns">
 				<a href="/" class="logo" title="Andrew Tibbs">Andrew Tibbs</a>
 				<a href="mailto:tibbs.andrew@gmail.com" class="contact" title="Contact Andrew">Contact</a>
 			</div>
 		</div>
 	</div>
 </header>

 <main role="main">