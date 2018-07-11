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
<html>
<!--<![endif]-->

<title>

 <?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	<meta charset="UTF-8">
<head>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>




<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<meta name="format-detection" content="telephone=no"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/inner.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/elements.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/parallax.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/es-carousel.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyphoto.css" type="text/css" media="screen">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.min.css" type="text/css" media="screen">
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/lightbox/js/lightbox-popup-jquery.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/forms.css" type="text/css" media="screen">
 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bjqs.css" type="text/css" media="screen">

<style>div.mr_social_sharing_wrapper{width:auto!important; float: right!important;  margin: -40px 0!important;}.twitter-share-button{float: left;        margin-left: -70px;    margin-top: -22px;    position: absolute;}</style>
<style>


#wraap{
	position:fixed;;
	z-index:-1;
	top:0;
	left:0;
	width:100%;
	height:100%;

}
#wraap img.bgfade{

	top:0;

	width:100%;
	height:100%;
	z-index:1

}

</style>


<style>
#fifth .span4 .widget-title{

color: #444444;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;

}
#fifth .span4 .textwidget{
float:left;
width:width: 100%;
}
#fifth .span4 .widget_text{
	float:left;width: 28%;margin:25px;
}
</style>
 <style>

.cbp-qtprogress{
	display:none;
}


</style>
  <style>

  .fb_iframe_widget iframe{
  position:absolute!important;
  }

  .mr_social_sharing span{
overflow:visible!important;
height:auto!important;

}
  .twitter-share-button{
	display:none;
  }

  .pluginCountBox{
display:none!important;
}

  </style>


<style>
.hidelink{
display:none;
}

</style>


<style>
div.mr_social_sharing_wrapper{
width:auto!important;
 float: right!important;
 margin: -40px 0!important;
}
.twitter-share-button{
float: left;

    margin-left: -70px;
    margin-top: -22px;
    position: absolute;


}
</style>
<script>
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
				if(charCode > 64 && charCode < 91){
					return true;
				}
        return false;
      }
  }
</script>


<?php
        $blogCategoryID = "23"; // current category ID
        $childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");
        if ($childCatID){
		$i=1;
            foreach ($childCatID as $kid)
            {
                $childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");
				$thisCat = get_category($childCatName->term_id,false);
				$cat_ID = $childCatName->term_id;
				$thisCat = get_category($cat_ID,false);
				$catname =explode(":", $thisCat->description);






                ?>

				 <style>
.icon-<?php echo $childCatName->term_id; ?>:before {
  content: "\<?php echo $catname[1]; ?>";
  font-size:20px;text-align: center;
    width: 50px !important;
    word-spacing: 1px;color:#fff;
}

</style>



           <?php
		   $i++;
            }
        }

    ?>




 <?php  $about_banner = get_post_custom_values('footer_banner');
				  $fbanner= explode("," , $about_banner[0]);
			 if(!empty($fbanner)){

				  ?>



		 <style>
		  #callout { background: url("<?php echo $fbanner[2]; ?>") no-repeat scroll bottom left 0 <?php echo $fbanner[0]; ?>; color: #FFFFFF; display: block; font-size: 22px; line-height: normal; height: 100px; position: relative; box-shadow: 0 0 30px <?php echo $fbanner[1]; ?> inset; }
		  </style>
<?php  } ?>



	<?php   $custom_fields = get_post_custom_values('services_features');
					$i=1;
					if(!empty($custom_fields)){
					foreach($custom_fields as $services){
					$bot = explode(":",$services);
				  ?>
<style>
.icon-troph<?php echo $i;?>:before {
  content: "\<?php echo $bot[1] ?>";
}
</style>
			  <?php 	$i++; } } ?>


<?php if(isset($_GET['mode']) && $_GET['mode'] == "thanks"){ ?>

<script type="text/javascript">
 $("#contact_form5").show();
  $("#contact_forms5").show();
</script>
<?php } ?>

<?php
	wp_head();
?>

</head>

<body onload="myCallBack()">


<div id="wraap">

</div>
<SCRIPT>
var imgArray = [<?php  $bg1 = of_get_option('background1');
				if(!empty($bg1)){
		  ?>
'<?php echo $bg1; ?>',
<?php } $bg2 = of_get_option('background2');
				if(!empty($bg2)){
		  ?>

'<?php echo $bg2; ?>',

<?php } $bg3 = of_get_option('background3');
				if(!empty($bg3)){		  ?>
'<?php echo $bg3; ?>',

<?php } $bg4 = of_get_option('background4');
				if(!empty($bg4)){
		  ?>
'<?php echo $bg4; ?>',

		  <?php } $bg5 = of_get_option('background5');
				if(!empty($bg5)){
		  ?>
'<?php echo $bg5; ?>'	,
		  <?php }
		  ?>
];
var ranNum = Math.floor(Math.random()*imgArray.length);
var image_rnd = imgArray[ranNum];
document.getElementById("wraap").style.background = "url('"+image_rnd+"')";
</SCRIPT>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>


<div class="main">
  <div class="div-content">
    <!--==============================header=================================-->
    <div class="header_top">
      <div class="container">
        <!-- Contact Details -->
        <div id="contact-details">
          <ul>
		  <?php $email = of_get_option('email');
				if(!empty($email)){
		  ?>
            <li><i class="icon-envelope"></i> <a href="mailto:<?php echo $email; ?>?Subject=Get%20General%20Information" target="_top">Send an email</a></li>
		<?php } ?>
		<?php $number = of_get_option('number');
				if(!empty($number)){
		  ?>
            <li><i class="icon-phone-sign"></i> <?php echo $number; ?> </li>
		<?php } ?>

          </ul>
        </div>
        <!-- Social Icons -->
    <div class="socials">
          <ul class="socialmedia-widget">
		  <?php $facebook = of_get_option('facebook');
				if(!empty($facebook)){
		  ?>
            <li><a href="<?php echo $facebook; ?>" class="facebook" target="_blank"  rel="nofollow"></a></li>
			<?php } $twitter = of_get_option('twitter');
				if(!empty($twitter)){
		  ?>
            <li><a href="<?php echo $twitter; ?>" class="twitter" target="_blank"  rel="nofollow"></a></li>
			<?php } $google = of_get_option('google');
				if(!empty($google)){
		  ?>
            <li><a href="<?php echo $google; ?>" class="googleplus" target="_blank"  rel="nofollow"></a></li>
			<?php } $pinterest = of_get_option('pinterest');
				if(!empty($pinterest)){
		  ?>
            <li><a href="<?php echo $pinterest; ?>" class="pinterest" target="_blank"  rel="nofollow"></a></li>
			<?php } $dribbble = of_get_option('dribbble');
				if(!empty($dribbble)){
		  ?>
            <li><a href="<?php echo $dribbble; ?>" class="dribbble" target="_blank"  rel="nofollow" ></a></li>
			<?php } $vimeo = of_get_option('vimeo');
				if(!empty($vimeo)){
		  ?>
            <li><a href="<?php echo $vimeo; ?>" class="vimeo" target="_blank"  rel="nofollow"></a></li>
			<?php } ?>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <!-- Navigation -->
    <div id="nav">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
              <div class="clearfix">
              <!-- Logo -->
              <h1 class="brand"><a href=" <?php echo site_url(); ?>  "><img src="<?php bloginfo('template_directory'); ?>/img/logo%20-%20website.jpg" alt="Web Design Company, DesignersX" width="230"></a></h1>
              <!-- Search Field -->
              <div class="search-header">
                <form class="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
                  <input name="s" type="text" placeholder="" />
                </form>
              </div>
              <!-- Naviation -->

	    <?php
echo ' <div class="nav-collapse nav-collapse_ collapse">';
$defaults = array(
	'theme_location'  => '',
	'menu'            => 'mainmenu',
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
          </div>
        </div>
      </div>
    </div>
    <!--==============================content=================================-->
    <!--=======intro=======-->
