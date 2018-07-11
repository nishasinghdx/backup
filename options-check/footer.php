<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Options Check
 */
?>

	</div><!-- #page -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>



<div id="shopify-section-footer-model-5" class="shopify-section">
	 <div data-section-id="footer-model-5" data-section-type="Footer-model-5" class="footer-model-5">
			<footer class="site-footer grid-uniform" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/images/cosmetic-footer-bg.jpg);background-repeat:no-repeat;">
				 <div class="grid__item wide--two-fifths post-large--two-fifths large--two-fifths medium--grid__item" style="position:relative;margin:0;">
						<div class="footer-logo my_element">
							 <div class="footer_container">
									<a href="#">
										<?php if ( of_get_option( 'footerimage_uploader' ) ) { ?>
									<img class="normal-footer-logo" src="<?php echo of_get_option( 'footerimage_uploader' );?>" alt="logo" style="
										 height: 227px;
										 ">

										 <?php } ?>
									</a>

										<?php if ( of_get_option( 'footercontent_textarea' ) ) { ?>
                    <p style="color:#fff;">
                    <?php echo of_get_option( 'footercontent_textarea' );?>
                    </p>
                    <?php } ?>

							 </div>
						</div>
				 </div>
				 <div class="grid__item wide--three-fifths post-large--three-fifths large--three-fifths medium--grid__item">
						<div class="footer_right_width" style="background:#111111">
							 <div class="footer_right_container">
									<div class="grid__item">
										 <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
												<h4 style="color:#ffffff;">Connect with us</h4>
												<ul class="social-links-type-5">
													 <li>
															<a style="color:#ffffff;" class="icon-fallback-text twitt hexagon" target="blank" href="<?php echo of_get_option( 'twitter_text' );?>" title="Twitter">
															<i class="fa fa-twitter" aria-hidden="true"></i>
															<span> Follow us onTwitter</span>
															</a>
													 </li>
													 <li>
															<a style="color:#ffffff;" class="icon-fallback-text fb hexagon" target="blank" href="<?php echo of_get_option( 'facebook_text' );?>" title="Facebook">
															<i class="fa fa-facebook" aria-hidden="true"></i>
															<span>Follow us on Facebook</span>
															</a>
													 </li>
													 <li>
															<a style="color:#ffffff;" class="icon-fallback-text google hexagon" target="blank" href="<?php echo of_get_option( 'google_text' );?>" title="Google+" rel="publisher">
															<i class="fa fa-google-plus" aria-hidden="true"></i>
															<span>Follow us on Google+</span>
															</a>
													 </li>
													 <li>
															<a style="color:#ffffff;" class="icon-fallback-text tumblr" target="blank" href="<?php echo of_get_option( 'tumblr_text' );?>" title="Tumblr">
															<i class="fa fa-tumblr" aria-hidden="true"></i>
															<span> Follow us on Tumblr</span>
															</a>
													 </li>
												</ul>
										 </div>
										 <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
												<h4 style="color:#ffffff;">Collection</h4>
												<ul class="site-footer__links">
													<?php $Collection=wp_get_nav_menu_items("Collection");
													?>
												 <?php
												 foreach ($Collection as $cn) {
												 ?>
													 <li><a style="color:#ffffff;" href="#"><?php echo $cn->title; ?></a></li>
										 <?php
												 }
												 ?>
												</ul>
										 </div>
										 <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
												<h4 style="color:#ffffff;">Cosmetics</h4>
												<ul class="site-footer__links">
													<?php $Cosmetics=wp_get_nav_menu_items("Cosmetics");
													 ?>
													<?php
													foreach ($Cosmetics as $cs) {
													?>
														<li><a style="color:#ffffff;" href="#"><?php echo $cs->title; ?></a></li>
											<?php
													}
													?>
												</ul>
										 </div>
									</div>
									<div class="grid__item">
										 <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
												<h4 style="color:#ffffff;">Makeup</h4>
												<ul class="site-footer__links">
													<?php $Makeup=wp_get_nav_menu_items("Makeup");
													 ?>
													<?php
													foreach ($Makeup as $mu) {
													?>
														<li><a style="color:#ffffff;" href="#"><?php echo $mu->title; ?></a></li>
											<?php
													}
													?>


												</ul>
										 </div>
										 <div class="grid__item wide--two-thirds post-large--two-thirds large--two-thirds medium--two-thirds">
												<h4 style="color:#ffffff;">Contact us</h4>
												<div class="address" style="color:;">
													 <p style="color:#fff;">
															<i class="fa fa-home" style="background:#444444;color:#ffffff;"></i>
															Address : <?php echo of_get_option( 'address_textarea' );?>
													 </p>
													 <p style="color:#fff;">
															<i style="margin-top: -3px;background:#444444;color:#ffffff;" class="fa fa-phone"></i>Phone 1 : <?php echo of_get_option( 'phone_text' );?>
													 </p>
												</div>
												<a style="color:#ffffff;" href="mailto:support@lovefashion.com"><i style="background:#444444;color:#ffffff;" class="fa fa-envelope"></i>Email : <?php echo of_get_option( 'email_text' );?></a>
										 </div>
									</div>
									<div class="footer-menu">
										 <p style="color:#ffffff;" class="copyright-type__5">Copyright © 2017, Beauty Fastion Sales Group
										 </p>
									</div>
							 </div>
						</div>
				 </div>
			</footer>
			<style>
				 .footer-model-5 .site-footer a:hover { color:#c9a654 !important; }
				 .footer-model-5 .copyright-type__5 a:hover { color:#c9a654 !important; }
				 .footer-model-5 .copyright-type__5 a { color:#ffffff;  }
				 .footer-model-5 .footer-menu { border-top:1px solid #000; }
			</style>
	 </div>
</div>



</body>
</html>
