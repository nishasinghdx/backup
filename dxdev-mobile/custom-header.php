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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Cache-control" content="public" />
<meta name="viewport" content="width=device-width" />
<title><?php
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
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

 <?php  $user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );
                $i=1;
             foreach($user_query->results as $email){
                    if($i == 1){
                        $emails = $email->user_email;
                    }else{
                        $emails = $emails.','.$email->user_email;
                    }
                $i++;
                }

     ?>


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

 <style>

.cbp-qtprogress{
    display:none;
}


</style>





</head>




<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/forms.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen">

<!--[if lt IE 8]>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
<!--[if lt IE 9]>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <script type="text/javascript">

function targetblnk(url){

window.open(url, '_blank');
}
</script>









</head>

<div id="wraap">

</div>


<a href="" ><div class="popupopen" style="display:none;position:fixed;z-index:1200;" id="contact_form5" >

</div></a>

<div id="contact_forms5" style="display:none;position:fixed;z-index:1500;margin-top:30px;width:100%; margin-top:5%;">
<div id="formcontainers" style="width:100%;text-align:center;">
    <div class="thanks"><div style="margin-top:20px;"><br/><img src="<?php bloginfo('template_directory'); ?>/images/thanks-ttl.png" alt="" /><br/>
        <span style="color:#FFFFFF;">Your form has been submitted successfully . Thanks you for your time & will get back to you in less than 24 hours.</span><br/><br/><span style="color:#177F98;font-weight:bold; text-decoration: underline;"><a href="http://designersx.com/site4/?page_id=15" >Read Blog</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold;">-</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold; text-decoration: underline;"><a href="http://designersx.com/site4/" >Go to Homepage</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="<?php bloginfo('template_directory'); ?>/images/thanks-continue-btn.png" alt="" onclick="hidethanks();" style="cursor:pointer;"/></span>
    </div></div>
</div>
</div>









<SCRIPT LANGUAGE="JavaScript">
var imgArray = [<?php  $bg1 = of_get_option('background1');
                if(!empty($bg1)){
          ?>
'<?php echo $bg1; ?>',
<?php } $bg2 = of_get_option('background2');
                if(!empty($bg2)){
          ?>

'<?php echo $bg2; ?>',

<?php } $bg3 = of_get_option('background3');
                if(!empty($bg3)){          ?>
'<?php echo $bg3; ?>',

<?php } $bg4 = of_get_option('background4');
                if(!empty($bg4)){
          ?>
'<?php echo $bg4; ?>',

          <?php } $bg5 = of_get_option('background5');
                if(!empty($bg5)){
          ?>
'<?php echo $bg5; ?>'    ,
          <?php }
          ?>
];
var ranNum = Math.floor(Math.random()*imgArray.length);
var image_rnd = imgArray[ranNum];
document.getElementById("wraap").style.background = "url('"+image_rnd+"')";
</SCRIPT>













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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>


<body>
<div class="main">
  <div class="div-content">
    <!--==============================header=================================-->

    <!-- Navigation -->
    <div id="nav">
      <div class="container">
        <div class="navbar navbar_ clearfix">
          <div class="navbar-inner">
            <div class="clearfix">
                 <div style="position:relative;margin-bottom:2px;float:left;">
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
                          <h1 class="brand"><a href=" <?php echo site_url(); ?>  "><img src="<?php bloginfo('template_directory'); ?>/img/logo - website.jpg" alt="DesignersX, designers at extreme " width="230"></a><span>dog&amp;cat</span></h1>
              <!-- Search Field -->
            <div class="search-header" id="feedback-badge-right"  ><a onclick="targetblnk('<?php echo site_url(); ?>/?page_id=527');">
              <img width="60" alt="DesignersX, designers at extreme " src="http://designersx.com/wp-content/themes/dxdev-mobile/images/free-quote-button.png">
              </a></div>
              <!-- Naviation -->




            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================content=================================-->
    <!--=======intro=======-->
