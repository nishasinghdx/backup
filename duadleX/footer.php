<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		<!-- </div>   <!-- #content -->

		<!-- <footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap"> -->
				<!-- Apps Craft Footer Section -->
				<footer class="apps-craft-footer-section" id="apps-craft-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<figure class="apps-craft-footer-logo text-center">
									<!-- <a href="#">
										 <img src="<?php //echo get_field('footer_logo',24363);?>" alt="Apps Craft Footer Logo" class="wow fadeInUp" data-wow-delay=".7s" width="500px">
									</a> -->
									<div class="apps-craft-social-link">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-facebook zmdi-hc-fw"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-google-plus zmdi-hc-fw"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-twitter zmdi-hc-fw"></i></a></li>
											<li><a href="#"><i class="zmdi zmdi-linkedin-box zmdi-hc-fw"></i></a></li>
										</ul>
									</div>
                   <p>Copyright © 2018 DesignersX, All Rights Reserved.</p>
								</figure> <!-- .apps-craft-footer-logo END -->
							</div>
						</div>
					</div>
				</footer> <!-- .apps-craft-footer-section END -->

				<!-- js File Start -->

				<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-3.1.1.min.js"></script>
				<!--jquery.easing.1.3.js  -->
				<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
				<!-- bootstrap.min.js -->
				<script src="<?php bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>
				<!-- owl.carousel.min.js -->

				<!-- isotope.pkgd.min.js -->
				<script src="<?php bloginfo('template_directory');?>/js/jquery.magnific-popup.min.js"></script>
				<!-- jquery.magnific-popup.min.js -->
				<script src="<?php bloginfo('template_directory');?>/js/skrollr.min.js"></script>
				<!-- skrollr.min.js -->
				<script src="<?php bloginfo('template_directory');?>/js/utils.js"></script>
				<!-- utils.js -->
				<script src="<?php bloginfo('template_directory');?>/js/jquery.parallax.js"></script>
				<!-- jquery.parallax.js -->
				<script src="<?php bloginfo('template_directory');?>/js/wow.js"></script>
				<!-- wow.js -->

				<script src="<?php bloginfo('template_directory');?>/js/main.js"></script>
				<!-- main.js -->

			<!-- </div><!-- .wrap -->
		<!-- </footer> <!-- #colophon -->
	<!-- </div>   <!-- .site-content-contain -->
<!-- </div>   <!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
