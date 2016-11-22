<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,700italic,700' rel='stylesheet' type='text/css'>

<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('template_url') ?>/js/mmenu/src/css/jquery.mmenu.all.css" />
   
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/mmenu/src/js/jquery.mmenu.min.all.js"></script>

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
	<div id="header">
		<div class="top-header">
			<img src="<?php bloginfo('template_url') ?>/images/header-top.jpg"/>
			
			<div id="mobile-nav-toggle">
			<a href="#mobile-nav"><img src="<?php bloginfo('template_url') ?>/images/menu.png"/></a>
		</div>
		<div id="mobile-nav">
			<ul>
			   <li><a href="<?php bloginfo('url') ?>">Home</a></li>
			   <li><a href="<?php bloginfo('url') ?>/shop">Shop</a></li>
			   <li><a href="<?php bloginfo('url') ?>/pricing/">Pricing</a></li>
			   <li><a href="<?php bloginfo('url') ?>/book/">Book</a></li>
			   <li><a href="<?php bloginfo('url') ?>/before-and-after/">Before and After</a></li>
			</ul>
		</div>
		</div>
		
		<div class="logo">
			<a href="<?php bloginfo('siteurl') ?>"><img width="185px" src="<?php bloginfo('template_url') ?>/images/logo2.png"/></a>
		</div>
	
	</div><!-- #header -->

	<div id="main">
