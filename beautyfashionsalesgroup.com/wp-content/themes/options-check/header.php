<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Options Check
 */
?>

<?php if ( is_home() ) { ?>
          <title> <?php echo bloginfo('title'); ?></title>
<?php }else{
?>
  <title> <?php the_title(); ?></title>
<?php } ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<link href="<?php echo bloginfo('template_directory'); ?>/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo bloginfo('template_directory'); ?>/css/material-design-iconic-font.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" media="all">

<!-- Header hook for plugins ================================================== -->

<link rel="stylesheet" media="screen" href="<?php echo bloginfo('template_directory'); ?>/css/styles.css">

    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/buttons-secure.css">
    <style type="text/css">
      .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_reposition {
        overflow: hidden;
        position: relative
      }

      .fb_invisible {
        display: none
      }

      .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
      }

      .fb_reset>div {
        overflow: hidden
      }

      .fb_link img {
        border: none
      }

      @keyframes fb_transform {
        from {
          opacity: 0;
          transform: scale(.95)
        }
        to {
          opacity: 1;
          transform: scale(1)
        }
      }

      .fb_animate {
        animation: fb_transform .3s forwards
      }

      .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
      }

      .fb_reset .fb_dialog_legacy {
        overflow: visible
      }

      .fb_dialog_advanced {
        padding: 10px;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border-radius: 8px
      }

      .fb_dialog_content {
        background: #fff;
        color: #333
      }

      .fb_dialog_close_icon {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
      }

      .fb_dialog_mobile .fb_dialog_close_icon {
        top: 5px;
        left: 5px;
        right: auto
      }

      .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
      }

      .fb_dialog_close_icon:hover {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
      }

      .fb_dialog_close_icon:active {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
      }

      .fb_dialog_loader {
        background-color: #f6f7f9;
        border: 1px solid #606060;
        font-size: 24px;
        padding: 20px
      }

      .fb_dialog_top_left,
      .fb_dialog_top_right,
      .fb_dialog_bottom_left,
      .fb_dialog_bottom_right {
        height: 10px;
        width: 10px;
        overflow: hidden;
        position: absolute
      }

      .fb_dialog_top_left {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
        left: -10px;
        top: -10px
      }

      .fb_dialog_top_right {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
        right: -10px;
        top: -10px
      }

      .fb_dialog_bottom_left {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
        bottom: -10px;
        left: -10px
      }

      .fb_dialog_bottom_right {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
        right: -10px;
        bottom: -10px
      }

      .fb_dialog_vert_left,
      .fb_dialog_vert_right,
      .fb_dialog_horiz_top,
      .fb_dialog_horiz_bottom {
        position: absolute;
        background: #525252;
        filter: alpha(opacity=70);
        opacity: .7
      }

      .fb_dialog_vert_left,
      .fb_dialog_vert_right {
        width: 10px;
        height: 100%
      }

      .fb_dialog_vert_left {
        margin-left: -10px
      }

      .fb_dialog_vert_right {
        right: 0;
        margin-right: -10px
      }

      .fb_dialog_horiz_top,
      .fb_dialog_horiz_bottom {
        width: 100%;
        height: 10px
      }

      .fb_dialog_horiz_top {
        margin-top: -10px
      }

      .fb_dialog_horiz_bottom {
        bottom: 0;
        margin-bottom: -10px
      }

      .fb_dialog_iframe {
        line-height: 0
      }

      .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
      }

      .fb_dialog_content .dialog_title>span {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
      }

      body.fb_hidden {
        -webkit-transform: none;
        height: 100%;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        left: 0;
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
      }

      .fb_dialog.fb_dialog_mobile.loading.centered {
        width: auto;
        height: auto;
        min-height: initial;
        min-width: initial;
        background: none
      }

      .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
      }

      .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
      }

      .loading.centered #fb_dialog_loader_close {
        color: #fff;
        display: block;
        padding-top: 20px;
        clear: both;
        font-size: 18px
      }

      #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .45);
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        width: 100%;
        min-height: 100%;
        z-index: 10000
      }

      #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
      }

      .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
      }

      .fb_dialog_content .dialog_header {
        -webkit-box-shadow: white 0 1px 1px -1px inset;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
        border-bottom: 1px solid;
        border-color: #1d4088;
        color: #fff;
        font: 14px Helvetica, sans-serif;
        font-weight: bold;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
      }

      .fb_dialog_content .dialog_header table {
        -webkit-font-smoothing: subpixel-antialiased;
        height: 43px;
        width: 100%
      }

      .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
      }

      .fb_dialog_content .touchable_button {
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
        border: 1px solid #29487d;
        -webkit-background-clip: padding-box;
        -webkit-border-radius: 3px;
        -webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
        display: inline-block;
        margin-top: 3px;
        max-width: 85px;
        line-height: 18px;
        padding: 4px 12px;
        position: relative
      }

      .fb_dialog_content .dialog_header .touchable_button input {
        border: none;
        background: none;
        color: #fff;
        font: 12px Helvetica, sans-serif;
        font-weight: bold;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
      }

      .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
      }

      .fb_dialog_content .dialog_content {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #555;
        border-bottom: 0;
        border-top: 0;
        height: 150px
      }

      .fb_dialog_content .dialog_footer {
        background: #f6f7f9;
        border: 1px solid #555;
        border-top-color: #ccc;
        height: 40px
      }

      #fb_dialog_loader_close {
        float: left
      }

      .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
      }

      .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
      }

      #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-repeat: no-repeat;
        background-position: 50% 50%;
        height: 24px;
        width: 24px
      }

      @keyframes rotateSpinner {
        0% {
          transform: rotate(0deg)
        }
        100% {
          transform: rotate(360deg)
        }
      }

      .fb_iframe_widget {
        display: inline-block;
        position: relative
      }

      .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
      }

      .fb_iframe_widget iframe {
        position: absolute
      }
/*<script src="<?php //echo bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php //echo bloginfo('template_directory'); ?>/js/jquery.flexslider.min.js" type="text/javascript"></script>
<script src="<?php //echo bloginfo('template_directory'); ?>/js/jquery.sticky.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>*/

      .fb_iframe_widget_fluid_desktop,
      .fb_iframe_widget_fluid_desktop span,
      .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
      }

      .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
      }

      .fb_iframe_widget_lift {
        z-index: 1
      }

      .fb_hide_iframes iframe {
        position: relative;
        left: -10000px
      }

      .fb_iframe_widget_loader {
        position: relative;
        display: inline-block
      }

      .fb_iframe_widget_fluid {
        display: inline
      }

      .fb_iframe_widget_fluid span {
        width: 100%
      }

      .fb_iframe_widget_loader iframe {
        min-height: 32px;
        z-index: 2;
        zoom: 1
      }

      .fb_iframe_widget_loader .FB_Loader {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;
        height: 32px;
        width: 32px;
        margin-left: -16px;
        position: absolute;
        left: 50%;
        z-index: 4
      }
sdfsdfsd
      .fb_invisible_flow {
        display: inherit;
        height: 0;
        overflow-x: hidden;
        width: 0
      }

      .fb_mobile_overlay_active {
        height: 100%;
        overflow: hidden;
        position: fixed;
        width: 100%
      }

      .fb_shrink_active {
        opacity: 1;
        transform: scale(1, 1);
        transition-duration: 200ms;
        transition-timing-function: ease-out
      }

      .fb_shrink_active:active {
        opacity: .5;
        transform: scale(.75, .75)
      }
    </style>

    <!-- <script type="text/javascript" src="<?php //echo bloginfo('template_directory'); ?>/js/jquery.min(1).js"></script> -->


  </head>

  <body<?php body_class(); ?>
    <div id="shopify-section-header-model-5" class="shopify-section">
      <div data-section-id="header-model-5" data-section-type="header-type-5" class="header-type-5">
        <div class="top_bar top-bar-type-5" style="background:#222222;">
          <div class="container">
            <div class="header_social top_bar_left">
              <ul class="menu_bar_right grid__item">
                <li class="medium-down--hide phone_no"><i class="zmdi zmdi-phone"></i><span>(212) 684 2077</span></li>
                <li class="medium-down--hide"><i class="zmdi zmdi-time"></i><span> Monday-Friday : 8:00am - 5:00pm EST</span></li>
              </ul>
            </div>
            <div class="top_bar_menu">
              <ul class="menu_bar_right grid__item wide--one-sixth post-large--one-sixth">
                <li class="medium-down--hide"><i class="zmdi zmdi-email"></i> <a href="#">Wholesale@beautyfashionsales.com</a></li>
                <li class="header_social">
                  <ul class="inline-list social-icons social-links-type-1">
                    <!-- <li>
                      <a class="icon-fallback-text twitt hexagon" target="blank" href="<?php //echo of_get_option( 'twitter_text' );?>" title="Twitter">
											 <span class="fa fa-twitter" aria-hidden="true">&nbsp;Twitter</span>
											 </a>
                    </li> -->
                    <li>
                      <a class="icon-fallback-text fb hexagon" target="blank" href="<?php echo of_get_option( 'facebook_text' );?>" title="Facebook">
											 <span class="fa fa-facebook" aria-hidden="true"></span>
											 <span class="fallback-text">Facebook</span>
											 </a>
                    </li>
                    <!-- <li>
                      <a class="icon-fallback-text google hexagon" target="blank" href="<?php //echo of_get_option( 'google_text' );?>" title="Google+" rel="publisher">
											 <span class="fa fa-google" aria-hidden="true"></span>
											 <span class="fallback-text">Google</span>
											 </a>
                    </li>
                    <li>
                      <a class="icon-fallback-text tumblr" target="blank" href="<?php //echo of_get_option( 'tumblr_text' );?>" title="Tumblr">
											 <span class="fa fa-tumblr" aria-hidden="true"></span>
											 <span class="fallback-text">Tumblr</span>
											 </a>
                    </li> -->
                    <li>
                      <a class="icon-fallback-text instagram" target="blank" href="<?php echo of_get_option( 'instagram_text' );?>" title="Instagram">
                       <span class="fa fa-instagram" aria-hidden="true"></span>
                       <span class="fallback-text">Instagram</span>
                       </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- container div end-->
        </div>
        <!--top_bar top-bar-type-5 div end -->





<header class="site-header">
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 100px;">
      <div class="header-sticky" style="">
        <div id="header-landing" class="sticky-animate">
          <div class="grid--full site-header__menubar">
            <div class="container">
              <h1 class="grid__item wide--one-sixth post-large--one-sixth large--one-sixth site-header__logo" itemscope="" itemtype="http://schema.org/Organization">
							 <a href="http://www.beautyfashionsalesgroup.com/" style="max-width: 450px;">
								 <?php if ( of_get_option( 'example_uploader' ) ) { ?>
							 <img class="normal-logo" src="<?php echo of_get_option( 'example_uploader' );?>" alt="logooo" itemprop="logo" height="100" width="200" hspace="50" style="">
									<?php } ?>
							 </a>
						</h1>
              <div class="grid__item wide--five-sixths post-large--five-sixths large--five-sixths ">
                <div class="menu-tool right">
                  <div class="container">

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
</div>
