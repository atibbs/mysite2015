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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,400italic,300italic,300|Open+Sans:300italic,400italic,800italic,300,800,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
  	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header role="header">
	<h1 class="page-title"><?php
// echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?>
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?></h1>
 	<div class="nav-bar">
		<a href="<?php echo get_bloginfo( 'url' )?>" class="logo">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="335.8" height="335.8" viewBox="0 0 335.8 335.8" enable-background="new 0 0 335.772 335.772" xml:space="preserve"><path fill="#FFFFFF" d="M335.7 163.7C333.5 72.9 259.2 0 167.9 0 75.2 0 0 75.2 0 167.9c0 70.3 43.2 130.4 104.4 155.5l73.4-73.3c-3.2 0.4-6.5 0.6-9.9 0.6 -45.7 0-82.7-37-82.7-82.7 0-45.7 37-82.7 82.7-82.7 40 0 73.3 28.4 81 66h0c1.1 5.4 1.7 10.9 1.7 16.6 0 21-7.9 40.2-20.8 54.8l0.2 0.2L123.2 329.7c14.2 3.9 29.2 6 44.7 6h167.9V167.9C335.8 166.5 335.8 165.1 335.7 163.7z"/></svg>
		</a>
		<ul class="menu">
			<li class="home"><a href="<?php echo get_site_url(); ?>">Home</a></li>
			<li><a href="<?php echo get_site_url(); ?>#portfolio">Portfolio</a></li>
			<li><a href="<?php echo get_site_url(); ?>#contact">Contact</a></li>
		</ul>
 	</div>
 </header>

 <main role="main">