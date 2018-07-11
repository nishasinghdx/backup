<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Apps Craft - Creative Agency Template by pixiefy">
<meta name="author" content="pixiefy">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Isotope Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" />
<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/slider3d.css" />
<!-- 3D Slider Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css" />
<!-- Animate Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/iconic-font.css" />
<!-- Iconic Font Stylesheet -->

<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
<!-- Main Style.css Stylesheet -->

<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/responsive.css">
<!-- Resposive.css Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/magnific-popup.css">
<?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
<style media="screen">
	.apps-craft-main-menu-area.sticky-menu .apps-craft-logo a {
		background-image: url('<?php echo $logo_url[0];?>') !important;
	}
</style>

<body class="apps-craft-v18">

	<!-- Apps Craft Body Start -->
	<div id="preloader"></div>

	<!-- Apps Craft Main Menu -->
	<header class="apps-craft-main-menu-area" id="apps-craft-menus">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="apps-craft-logo">
						<a href="#apps-craft-home">
							<?php echo the_custom_logo(); ?>
							<!-- <img src="<?php //bloginfo('template_directory');?>/img/duadle_logo-e1515151056172.png" alt="Apps Craft Logo"> -->

						</a>
					</div> <!-- .apps-craft-logo END -->
				</div>
				<div class="col-md-9 col-sm-9 col-xs-6">
					<div class="apps-craft-menu-and-serach clear-both">
                    	<span id="apps-craft-main-menu-icon">
							<div class="la-ball-elastic-dots la-2x item-generate" style="color:#fa326f">
							    <div></div>
							    <div></div>
							    <div></div>
							</div>
                    	</span>
						<nav id="apps-craft-menu" class="apps-craft-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
							<!-- <ul>
								<li><a href="#apps-craft-home" style="color: #000;">Home</a></li>
								<li><a href="#apps-craft-feature" style="color: #000;">Feature</a></li>
								<li><a href="#apps-carft-screen-short" style="color: #000;">Screens</a></li>
								<li><a href="#apps-craft-testimonial" style="color: #000;">Testimonials</a></li>
								<li><a href="#apps-craft-pricing" style="color: #000;">pricing</a></li>
								<li><a href="#apps-craft-team" style="color: #000;">team</a></li>
								<li><a href="#apps-craft-faq" style="color: #000;">Question?</a></li>
							</ul> -->
						</nav> <!-- .apps-craft-menu END -->
					</div> <!-- .apps-craft-menu-and-serach END -->
				</div>
			</div>
		</div>
	</header> <!-- .apps-craft-main-menu END -->


	<!-- <div class="site-content-contain">
		<div id="content" class="site-content"> -->
