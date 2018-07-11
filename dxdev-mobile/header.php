<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Cache-control" content="public" />
<meta name="viewport" content="width=device-width" />
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	<!-- KISSmetrics tracking snippet -->
<script type="text/javascript">var _kmq = _kmq || [];

function validateFirstname(evt) {
				var charCode = (evt.which) ? evt.which : event.keyCode
				//console.log(charCode);
	if(charCode == 32){
		return true;
	}
	if(charCode == 8){
		return true;
	}
	if (charCode > 96){
			return true;
	}else{
		return false;
	}
}
function isNumberKey1(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
		return true;
}
var _kmk = _kmk || '4e07f49b06d6f4be9003449b6d0dac8a86208add';
function _kms(u){
 setTimeout(function(){
   var d = document, f = d.getElementsByTagName('script')[0],
   s = d.createElement('script');
   s.type = 'text/javascript'; s.async = true; s.src = u;
   f.parentNode.insertBefore(s, f);
 }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
</script>
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<meta name="description" content="Your description"/>
<meta name="keywords" content="Your keywords"/>
<meta name="author" content="Your name"/>
<meta name="format-detection" content="telephone=no"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/inner.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/elements.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/parallax.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/es-carousel.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyphoto.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen">
<script type="text/javascript"  src="<?php bloginfo(template_directory) ?>/js/jquery.easing.min.js"></script>
<script type="text/javascript"  src="<?php bloginfo(template_directory) ?>/js/jquery.lavalamp.js"></script>



<script type="text/javascript">

function targetblnk(url){

window.open(url, '_blank');
}
</script>












</head>
<body>

<div class="main">
  <div class="div-content">
    <div id="nav">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
			 <div style="margin-bottom:2px;float:left;">
			           <?php
echo ' <div class="nav-collapse nav-collapse_ collapse">';
$defaults = array(
	'theme_location'  => '',
	'menu'            => 'MobileHeaderMenu',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav sf-menu clearfix sf-js-enabled',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
echo ' </div>';
?>
		 </div>
                          <h1 class="brand" style="margin: 10px 18px;"><a href=" <?php echo site_url(); ?>  "><img  width="230" height="74" src="<?php bloginfo('template_directory'); ?>/img/logo - website.jpg" alt="DesignersX, designers at extreme "></a><span>dog&amp;cat</span></h1>
                <div class="search-header" id="feedback-badge-right"  ><a onclick="targetblnk('<?php echo site_url(); ?>/?page_id=527');">
              <img width="60" height="33" alt="DesignersX, designers at extreme " src="<?php bloginfo('template_directory'); ?>/images/quote-button-mobile.gif">
              </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
