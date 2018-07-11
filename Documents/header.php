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

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Braxton,college,best college">
<meta name="description" content="This is the website of Braxton College">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Css Start  -->

<link href="<?php bloginfo('template_url'); ?>/assets/css/base.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/assets/css/base2.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/assets/css/base3.css" rel="stylesheet" media="print">
<link href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" rel="stylesheet">
<!-- Css Ends  -->
<?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
// echo $logo_url[0];
 ?>
 <style media="screen">
   @media only screen and (min-width: 700px){
     #mobilemenu{
       display: none!important;
     }
   }

 @media only screen and (max-width: 767px){
   .navbar{
     display: none;
   }
   #mobilemenu{
     background-color: #333!important;
   }
   .wpmm_mobile_menu_btn{
     background-color: #333!important;
   }
   .wp-megamenu{
     background-color: #333!important;
     color: #d9d9d9;
   }
   a:focus, a:hover{
     color:#fff!important;
   }
   #wp-megamenu-header-menu.wp-megamenu-wrap.wpmm-mobile-menu>.wpmm-nav-wrap ul.wp-megamenu>li>a{
     color:#fff!important;
   }
   .wp-megamenu-sub-menu{
     background-color: #333!important;
   }
   #wp-megamenu-header-menu.wp-megamenu-wrap.wpmm-mobile-menu>.wpmm-nav-wrap ul.wp-megamenu>li>a:hover{
     background-color: #333!important;
   }
   #wp-megamenu-header-menu>.wpmm-nav-wrap ul.wp-megamenu>li ul.wp-megamenu-sub-menu li a{
     color:#fff!important;
   }
 }
 </style>

<body id="home" class="new mainfeature">
<div id="wrapper">


	<div class="container-fluid">
    <div id="mobilemenu">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class'=> 'nav main' ) ); ?>
    </div>
	<div class="navbar" role="banner">
		<div class="navbar-inner">
			<div class="container-fluid">
				<ul id="skip"><li><a href="#mainnav">Skip to main navigation</a></li><li><a href="#utilitynav">Skip to utility navigation</a></li><li><a href="#maincontent">Skip to main content</a></li></ul>
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" title="Toggle Main Navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <div class="nav-collapse">
					<!-- utility bav -->
<!-- top nav bar starts here -->
<div class="row-fluid topnav">
        <div class="col12">
          <ul class="nav search" aria-label="search trigger" role="menu">
            <li id="s" role="menuitem"><a href="/search/" id="search-trigger" class="ss-icon">Search</a></li></ul>
          <ul class="nav utility" id="utilitynav" aria-label="utility navigation" role="navigation">
            <?php
            //$top_menu=  wp_get_nav_menu_items('top menu');
            //foreach ($top_menu as $value) {
              ?>
              <!-- <li><a href="<?php //echo $value->url; ?>" aria-describedby="site_heading"><?php //echo $value->post_title; ?></a></li> -->
              <?php
            //}

             ?>
            <li class="first"><a href="#">Students</a></li>
            <li><a href="#">Faculty</a></li>
            <li class="last"><a href="#">Staff</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Parents</a></li>
            <li><a href="#">Visit</a></li>
            <li><a href="#">Directory</a></li>
            <li><a href="#">Maps</a></li>
            <li><a href="#">A&#8211;Z</a></li>
            <li><a href="#">My.UChicago</a></li>
            <li><a href="#" class="campaign-link">Apply</a></li>
          </ul>
        </div>
      </div>
      <form id="sitesearch" class="search-bar expanded" method="get" action="" aria-label="site search" role="search">
        <div class="search-bar-inner">
          <div class="wrap">
            <label for="searchtext" class="search-bar-help">Enter Search Below</label>
            <input type="text" name="s" id="searchtext" class="search-field" value="" autocomplete="off" placeholder="Search&#8230;">
            <button type="submit" class="search-submit ss-icon">Search</button>
          </div>
        </div>
      </form>
<!-- top nav bar ends here -->
					<div class="row-fluid wordmark" aria-label="wordmark" role="navigation">
						<!-- <a href="/"> -->
						<a href="/" style="background-image: url('<?php echo $logo_url[0];?>');">
							<h1 id="site_heading">The University of Chicago</h1>
						</a>
					</div>

					<div class="row mainnav">
						<div class="col12">
							<a id="mainnav"></a>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class'=> 'nav main' ) ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>

<!-- Header Ends  -->

<!-- Slide Starts  -->
<?php if (is_front_page()) : ?>
<div id="features" class="row-fluid hero" role="complementary">
    <a id="maincontent"></a>
    <ul id="features_container">
			<?php
			$args_slider = array( 'post_type' => 'slider');
			$loop_slider = new WP_Query( $args_slider );
			while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
			?>
        <li class="first">
            <a href="<?php the_field('slider_link'); ?>" class="herowrap">

                <div class="background" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);"></div>

                <div class="slidewrap">
                    <div class="headline">
                        <h2><?php echo get_the_title(); ?></h2>
                        <p class="blurb hidden-phone"><?php echo get_the_content(); ?></p>
                    </div>

                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="slider image">

                </div>
            </a>
        </li>
				<?php
         endwhile;
				 ?>

    </ul>
</div>
<?php endif; ?>

<!-- Slide Ends  -->
