<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<!DOCTYPE html>

<!--<![endif]-->
<head>
	<title>
					</title>
					<meta name="description" content="">
				  <meta name="keywords" content="">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<script type="text/javascript">var _kmq = _kmq || [];
		var _kmk = _kmk || '4e07f49b06d6f4be9003449b6d0dac8a86208add';
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
	<script>
		/* $(window).load(function() {
			$("html, body").animate({ scrollTop: $(document).height() }, 1000);
		}); */
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

	<style>
		#feedback-badge-right{
			display:none!important;
		}

		#wraap{
			position:fixed;
			z-index:-1;
			top:0;
			left:0;
			height:100%;
			width:100%;
		}

		#wraap img.bgfade{
			top:0;
			z-index:1
			-moz-box-shadow:    inset 0 0 150px #000000;
			-webkit-box-shadow: inset 0 0 150px #000000;
			box-shadow:         inset 0 0 150px #000000;
		}
	</style>

	<?php
		$bbanner = of_get_option('bbanner');
		$fbanner= explode("," , $bbanner);
		if(!empty($fbanner)){
	?>

	<style>
		#callout { background: url("<?php echo $fbanner[2]; ?>") no-repeat scroll bottom left 0 <?php echo $fbanner[0]; ?>; color: #FFFFFF; display: block; font-size: 22px; line-height: normal; height: 100px; position: relative; box-shadow: 0 0 30px <?php echo $fbanner[1]; ?> inset; }
	</style>
	<?php  } ?>
	<style>
		.fb_iframe_widget iframe{
			position:relative!important;
		}

		.twitter-share-button {
			display:none;
		}

		.mr_social_sharing span{
			overflow:visible!important;
			height:auto!important;
		}

		.pluginCountBox{
			display:none!important;
		}
	</style>
	<style>
		.icon-troph:before {
			content: "\<?php echo $trophy = of_get_option('icon1'); ?>";
		}
		.icon-cogd:before {
			content: "\<?php echo $cogs = of_get_option('icon2'); ?>";
		}
		.icon-rockd:before {
			content: "\<?php echo $rocket = of_get_option('icon3'); ?>";
		}
		.icon-beake:before {
			content: "\<?php echo $beaker = of_get_option('icon4'); ?>";
		}
		.pluginButton{
			padding:0 6px!important;margin-top: 6px!important;
		}

		.timeline-footer{
			display:none!important;
		}

		.pluginCountBox{
			display:none!important;
		}
	</style>


	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<!--	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/> -->
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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css" type="text/css" media="screen">

</head>
<body>
	<div id="wraap"></div>
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
            <li><i class="icon-phone-sign"></i> <a href="#"> <?php echo $number; ?> </a></li>
		<?php } ?>

          </ul>
        </div>
        <!-- Social Icons -->
        <div class="socials">
          <ul class="socialmedia-widget">
		  <?php $facebook = of_get_option('facebook');
				if(!empty($facebook)){
		  ?>
            <li><a href="<?php echo $facebook; ?>" class="facebook" target="_blank"  rel="nofollow" ></a></li>
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
				<h1><a href=" <?php echo site_url(); ?>  "><h1 class="brand"><img src="<?php bloginfo('template_directory'); ?>/img/logo%20-%20website.jpg" alt="Web Design Company, DesignersX" width="230"></h1></a></h1>
				<!-- Search Field -->
				<div class="search-header">
					<form class="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
						<input name="s" type="search" placeholder="" />
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

    <div id="intro">
      <!-- Slider -->

      <div class="slider-fixed">
        <div class="slider">

          <div class="camera_wrap camera_emboss" id="camera_wrap_3">


		  <?php $ban1 = of_get_option('w2f_banner1');
				if(!empty($ban1)){

		  ?>

            <div data-src="<?php  echo $ban1; ?>">
								<div class="header-hei">
									<div class="creativemain">
											<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
								 			<?php
								 			//$ban1 = of_get_option('w2f_des1');
								 			//echo $ban1;
								 			?> 	 <!-- SEARCHBOX START FROM HERE -->
					          	<div class="upimg header-martop">
					                <div class="floatleft1 header-widlef">
					                  <input name="email" id="getemail1" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
					                </div>

					                <div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail1');" alt="continue" />
					                </div>
					             </div>
											 <div class="clearboth"> </div>
					                 <!-- SEARCHBOX START FROM HERE -->
					          </div>
								</div>
            </div>
			<?php }else{  }?>

			 <?php $ban2 = of_get_option('w2f_banner2');
				if(!empty($ban2)){
		  ?>

            <div data-src="<?php  echo $ban2; ?>">

							<div class="header-hei">
								<div class="creativemain">
										<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
										<?php
										//$ban1 = of_get_option('w2f_des1');
										//echo $ban1;
										?> 	 <!-- SEARCHBOX START FROM HERE -->
										<div class="upimg header-martop">
												<div class="floatleft1 header-widlef">
													<input name="email" id="getemail2" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
												</div>

												<div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail2');" alt="continue" />
												</div>
										 </div>
										 <div class="clearboth"> </div>
												 <!-- SEARCHBOX START FROM HERE -->
									</div>
							</div>
            </div>
			<?php }else{  }?>

			 <?php $ban3 = of_get_option('w2f_banner3');
				if(!empty($ban3)){
		  ?>

              <div data-src="<?php  echo $ban3; ?>">

								<div class="header-hei">
									<div class="creativemain">
											<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
											<?php
											//$ban1 = of_get_option('w2f_des1');
											//echo $ban1;
											?> 	 <!-- SEARCHBOX START FROM HERE -->
											<div class="upimg header-martop">
													<div class="floatleft1 header-widlef">
														<input name="email" id="getemail3" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
													</div>

													<div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail3');" alt="continue" />
													</div>
											 </div>
											 <div class="clearboth"> </div>
													 <!-- SEARCHBOX START FROM HERE -->
										</div>
								</div>
            </div>
			<?php }else{  }?>


			 <?php $ban4 = of_get_option('w2f_banner4');
				if(!empty($ban4)){
		  ?>

			  <div data-src="<?php  echo $ban4; ?>">

					<div class="header-hei">
						<div class="creativemain">
								<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
								<?php
								//$ban1 = of_get_option('w2f_des1');
								//echo $ban1;
								?> 	 <!-- SEARCHBOX START FROM HERE -->
								<div class="upimg header-martop">
										<div class="floatleft1 header-widlef">
											<input name="email" id="getemail4" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
										</div>

										<div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail4');" alt="continue" />
										</div>
								 </div>
								 <div class="clearboth"> </div>
										 <!-- SEARCHBOX START FROM HERE -->
							</div>
					</div>
            </div>

				<?php }else{  }?>


			 <?php $ban5 = of_get_option('w2f_banner5');
				if(!empty($ban5)){
		  ?>

           <div data-src="<?php  echo $ban5; ?>">

						 <div class="header-hei">
							 <div class="creativemain">
									 <img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
									 <?php
									 //$ban1 = of_get_option('w2f_des1');
									 //echo $ban1;
									 ?> 	 <!-- SEARCHBOX START FROM HERE -->
									 <div class="upimg header-martop">
											 <div class="floatleft1 header-widlef">
												 <input name="email" id="getemail5" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
											 </div>

											 <div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail5');" alt="continue" />
											 </div>
										</div>
										<div class="clearboth"> </div>
												<!-- SEARCHBOX START FROM HERE -->
								 </div>
						 </div>
            </div>



			<?php }else{  }?>

			 <?php $ban6 = of_get_option('w2f_banner6');
				if(!empty($ban6)){
		  ?>

          <div data-src="<?php  echo $ban6; ?>">

						<div class="header-hei">
							<div class="creativemain">
									<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
									<?php
									//$ban1 = of_get_option('w2f_des1');
									//echo $ban1;
									?> 	 <!-- SEARCHBOX START FROM HERE -->
									<div class="upimg header-martop">
											<div class="floatleft1 header-widlef">
												<input name="email" id="getemail6" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
											</div>

											<div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail6');" alt="continue" />
											</div>
									 </div>
									 <div class="clearboth"> </div>
											 <!-- SEARCHBOX START FROM HERE -->
								</div>
						</div>
            </div>

			<?php }else{  }?>


			 <?php $ban7 = of_get_option('w2f_banner7');
				if(!empty($ban7)){
		  ?>

            <div data-src="<?php  echo $ban7; ?>">

							<div class="header-hei">
								<div class="creativemain">
										<img class="creative"  src="<?php bloginfo(template_directory) ?>/images/website-design-.png"  alt="results driven website design">
										<?php
										//$ban1 = of_get_option('w2f_des1');
										//echo $ban1;
										?> 	 <!-- SEARCHBOX START FROM HERE -->
										<div class="upimg header-martop">
												<div class="floatleft1 header-widlef">
													<input name="email" id="getemail7" type="text" value="  Enter your email address!" onfocus="if(this.value=='  Enter your email address!') this.value=''" onblur="if(this.value=='') this.value='  Enter your email address!'"  class="initialvalue header-borhei"/>
												</div>

												<div class="header-topleft"><input  type="image" src="<?php bloginfo(template_directory) ?>/img/continue_button.jpg" onclick="get_contact_form('getemail7');" alt="continue" />
												</div>
										 </div>
										 <div class="clearboth"> </div>
												 <!-- SEARCHBOX START FROM HERE -->
									</div>
							</div>
            </div>

			<?php }else{  }?>

          </div>
        </div>
      </div>
    </div>
		<div class ="homerecaptcha2" id="recaptcha2"></div>
