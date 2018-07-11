<?php
/**
 * The main template file
 * Template Name: home page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

			<!-- Apps Craft Welcome Section -->
			<section class="apps-craft-welcome-section apps-craft-welcome-section-v5 apps-craft-welcome-section-v18" id="apps-craft-home">
				<div class="apps-craft-18-banner-bg-wrap">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="apps-craft-position-rel">
					<div id="apps_craft_animation">
						<div class="layer" data-depth="0.20" style="background-image:url('<?php echo get_field('top_section_mobile_image',24363);?>');">
							<div class="appscraft-screen-container">
								<i class="zmdi zmdi-close back"></i>
								<div class="ball">
									<a href="#!"><i class="zmdi zmdi-edit first"></i></a>
									<a href="#!"><i class="zmdi zmdi-comment-text second"></i></a>
									<a href="#!"><i class="zmdi zmdi-notifications-active third"></i></a>

									<svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
									<polygon fill="#FFFFFF" points="30,14.5 15.5,14.5 15.5,0 14.5,0 14.5,14.5 0,14.5 0,15.5 14.5,15.5 14.5,30 15.5,30 15.5,15.5
										30,15.5 "></polygon>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>

			<div class="apps-craft-position-rel-v2">
						<div id="apps_craft_animation-2" style="position: relative; transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
							<div class="layer" data-depth="0.20" style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(34.9248px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"><div class="background"><img src="<?php bloginfo('template_directory');?>/img/version-18-bg.png" alt="background"></div></div>
						</div>
				</div>

				<div class="apps-craft-welcome-container">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-6 col-md-pull-6 col-sm-6">
								<div class="apps-craft-welcome-tbl">
									<div class="apps-craft-welcome-tbl-c">
										<div class="apps-craft-welcome-content text-left">
											<h1><?php echo get_field('top_section_title',24363); ?></h1>
											<div class="apps-craft-download-store-btn-group">
												<a href="<?php echo get_field('playstore_link',24363);?>" class="apps-craft-btn play-store-btn"><img src="<?php bloginfo('template_directory');?>/img/google-play-logo.png" alt="playstore"></a>
												<a href="<?php echo get_field('appstore_link',24363);?>" class="apps-craft-btn app-store-btn"><img src="<?php bloginfo('template_directory');?>/img/app-store-logo.png" alt="appstore"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- .apps-craft-welcome-section END -->


			<!-- Apps Craft feature -->
			<section class="apps-craft-feature-section section-padding" id="apps-craft-feature">
				<div class="container">
					<div class="apps-craft-section-heading">
						<h2><?php echo get_field('feature_section_title',24363); ?></h2>
					</div> <!-- .apps-craft-section-heading END -->
					<div class="row content-margin-top">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="apps-craft-feature-img text-center" itemscope itemtype="http://schema.org/ImageGallery">
								<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									<img src="<?php echo get_field('feature_section_mobile_image',24363);?>" alt="Apps Craft Feature Image">

									<span class="apps-craft-feature-ico icon-1x" data-bottom="transform:translateX(-103px)" data-top="transform:translateX(-63px);">
										<img src="<?php echo get_field('feature_section_image_1',24363);?>" alt="Small Icon">
									</span> <!-- .apps-craft-feature-ico END -->

									<span class="apps-craft-feature-ico icon-5x" data-bottom="transform:translateX(-97px)" data-top="transform:translateX(-55px);">
										<img src="<?php echo get_field('feature_section_image_3',24363);?>" alt="Small Icon">
									</span>

									<span class="apps-craft-feature-ico icon-7x" data-bottom="transform:translateY(-134px)" data-top="transform:translateY(-94px);">
										<img src="<?php echo get_field('feature_section_image_4',24363);?>" alt="Small Icon">
									</span>

									<span class="apps-craft-feature-ico icon-8x" data-bottom="transform:translateY(-160px)" data-top="transform:translateY(-120px);">
										<img src="<?php echo get_field('feature_section_image_5',24363);?>" alt="Small Icon">
									</span>

									<span class="apps-craft-feature-ico icon-9x" data-bottom="transform:translateX(-110px)" data-top="transform:translateX(-70px);">
										<img src="<?php echo get_field('feature_section_image_2',24363);?>" alt="Small Icon">
									</span>

									<span class="apps-craft-feature-ico icon-11x" data-bottom="transform:translateX(74px)" data-top="transform:translateX(34px);">
										<img src="<?php echo get_field('feature_section_image_6',24363);?>" alt="Small Icon">
									</span> <!-- .apps-craft-feature-ico END -->

									<span class="apps-craft-feature-ico icon-12x" data-bottom="transform:translateX(160px)" data-top="transform:translateX(120px);">
										<img src="<?php echo get_field('feature_section_image_7',24363);?>" alt="Small Icon">
									</span> <!-- .apps-craft-feature-ico END -->

									<span class="apps-craft-feature-ico icon-16x" data-bottom="transform:translateX(-140px)" data-top="transform:translateX(-100px);">
										<img src="<?php bloginfo('template_directory');?>/img/18.png" alt="Small Icon">
									</span> <!-- .apps-craft-feature-ico END -->
								</figure>
							</div> <!-- .apps-craft-feature-img END -->
						</div>

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="apps-craft-feature-container clear-both">

								<?php
								$args_feature = array( 'category_name' => 'feature');
								$loop_feature = new WP_Query( $args_feature );
								while ( $loop_feature->have_posts() ) : $loop_feature->the_post();

								?>
								<div class="apps-craft-single-feature">
									<div class="apps-craft-feature-content wow fadeIn" data-wow-delay="200ms">
										<i class="zmdi zmdi-<?php echo get_field('feature_icon'); ?> zmdi-hc-fw"></i>
										<h3><?php echo get_the_title(); ?></h3>
									</div>
								</div>    <!-- .apps-craft-single-feature END -->

             <?php  endwhile;?>

							</div> <!-- .apps-craft-feature-container END -->
						</div> <!-- .apps-craft-feature-container END -->
					</div> <!-- .apps-craft-feature-container END -->
						</div>
					</div>
				</div>
			</section>

			<!-- Apps Craft Video Section -->
			<div class="apps-craft-video-section" id="video-section" style="background-image: url(<?php echo get_field('video_section_background_image',24363);?>);">
				<div class="apps-craft-video-section-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="apps-craft-video-content">
									<h4><?php echo get_field('video_section_title',24363);?></h4>
									<a href="https://www.youtube.com/watch?v=_bBvpQPq764" class="apps-craft-popup-video"><i class="zmdi zmdi-play-circle-outline zmdi-hc-fw"></i></a>
								</div> <!-- .apps-craft-video-content END -->
							</div>
						</div>
					</div>
				</div>
			</div> <!-- .apps-craft-video-section END -->


			<!-- Apps Craft Screen Short Slider Section -->
			<section class="apps-carft-screen-short-ssection section-padding" id="apps-carft-screen-short">
				<div class="container">
					<div class="apps-craft-section-heading">
						<h2><?php echo get_field('slider_section_title',24363);?></h2>
					</div> <!-- .apps-craft-section-heading END -->

					<div class="content-margin-top">
						<div class="apps-carft-screen-short-content">
							<div class="app-screen-mobile-image" style="background-image: url(<?php echo get_field('slider_background_mobile_image',24363);?>);"></div>
							<div class="apps-craft-screenshort">
								<div id="carousel">
									<figure><img src="<?php echo get_field('slider_image_1',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_2',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_3',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_4',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_5',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_6',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_7',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_1',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_2',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_3',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_4',24363);?>" alt="screenshot"></figure>
									<figure><img src="<?php echo get_field('slider_image_5',24363);?>" alt="screenshot"></figure>
								</div>
							</div>
							<div id="options">
								<p id="navigation">
									<button id="previous" data-increment="-1" class="zmdi zmdi-long-arrow-left zmdi-hc-fw"></button>
									<button id="next" data-increment="1" class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></button>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Apps Craft Team -->
			<section class="apps-craft-team-section" id="apps-craft-team">
				<div class="team-parallax-bg section-padding" data-0="background-position:10000px 50%;" data-100000="background-position:50000px 0px;">
					<div class="container">
						<div class="apps-craft-section-heading">
							<h2>team</h2>
						</div> <!-- .apps-craft-section-heading END -->
						<div class="row content-margin-top">

							<?php
							$args_team = array( 'post_type' => 'team');
							$loop_team = new WP_Query( $args_team );
							while ( $loop_team->have_posts() ) : $loop_team->the_post();

							?>
							<div class="col-md-3 col-sm-3 col-xs-6 apps-craft-team">
								<div class="apps-craft-single-team wow fadeIn" data-wow-delay="200ms" itemscope itemtype="http://schema.org/ImageGallery">
									<figure class="apps-craft-team-img" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<div class="apps-craft-team-member-pic">
											<img src="<?php echo get_the_post_thumbnail_url();?>" alt="Apps Craft Team Member Image">
											<div class="apps-craft-team-hover">
												<div class="apps-craft-social-link">
													<ul>
														<!-- <li><a href="#"><i class="zmdi zmdi-facebook zmdi-hc-fw"></i></a></li>
														<li><a href="#"><i class="zmdi zmdi-google-plus zmdi-hc-fw"></i></a></li>
														<li><a href="#"><i class="zmdi zmdi-twitter zmdi-hc-fw"></i></a></li> -->
														<li><a href="<?php echo get_field('linkedin_url');?>"><i class="zmdi zmdi-linkedin-box zmdi-hc-fw"></i></a></li>
													</ul>
												</div> <!-- .apps-craft-social-link END -->
											</div>
										</div> <!-- .apps-craft-team-member-pic END -->
									</figure> <!-- .apps-craft-team-img END -->
									<div class="apps-craft-team-bio">
										<h2><?php echo get_the_title(); ?></h2>
										<h5><?php echo get_field('designation'); ?></h5>
									</div> <!-- .apps-craft-team-bio END -->
								</div> <!-- .apps-craft-single-team END -->
							</div>
						<?php endwhile; ?>

						</div>
					</div>
				</div>
			</section> <!-- .apps-craft-team-section END -->


			<!-- Apps Craft Now Available On -->
			<div class="apps-craft-now-available-section" id="apps-craft-available" style="background-image: url(<?php bloginfo('template_directory');?>/img/now-available-on-round-bg.png);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="apps-craft-tbl">
								<div class="apps-craft-tbl-c">
									<div class="apps-craft-now-available-content wow fadeIn">

										<p style="font-size:16px;margin-bottom: 6px;">
                       <?php echo get_field('nowavailable_section_content',24363);?>
										</p>
										<h3><?php echo get_field('nowavailable_section_title',24363);?></h3>
										<div class="apps-craft-download-store-btn-group">
											<a href="<?php echo get_field('playstore_link',24363);?>" class="apps-craft-btn play-store-btn"><img src="<?php bloginfo('template_directory');?>/img/google-play-logo.png" alt="playstore"></a>
											<a href="<?php echo get_field('appstore_link',24363);?>" class="apps-craft-btn app-store-btn"><img src="<?php bloginfo('template_directory');?>/img/app-store-logo.png" alt="appstore"></a>
										</div> <!-- .apps-craft-download-store-btn-group END -->
									</div> <!-- .apps-craft-now-available-content END -->
								</div>
							</div>
							<!-- <figure class="apps-craft-app-secreenshort" data-bottom="transform:translateY(180px) translateX(-50%);" data-top="transform:translateY(100px) translateX(-50%);" itemscope itemtype="http://schema.org/ImageGallery">
								<img src="<?php// bloginfo('template_directory');?>/img/screenshort-now-available.png" alt="Apps Craft App Screenshort">
							</figure> <!-- .apps-craft-app-secreenshort END -->
						</div>
					</div>
				</div>
			</div> <!-- .apps-craft-now-available-section END -->




			<!-- Apps Craft FAQ Section -->
			<section class="apps-craft-faq-section section-padding" id="apps-craft-faq">
				<div class="container">
					<div class="apps-craft-section-heading">
						<h2>FAQ</h2>
					</div> <!-- .apps-craft-section-heading END -->
					<div class="row content-margin-top">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="apps-craft-accordion wow fadeIn" data-wow-delay="400ms">
								<div class="panel-group" id="accordion">
									<?php
									$args_faq = array( 'category_name' => 'faq');
									$loop_faq = new WP_Query( $args_faq );
									while ( $loop_faq->have_posts() ) : $loop_faq->the_post();

									?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title click">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
													<?php echo get_the_title(); ?>
												</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel-body"><?php echo get_the_content(); ?></div>
										</div>
									</div>
								<?php  endwhile;  ?>

								</div>
							</div> <!-- .apps-craft-accordion END -->
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="apps-craft-contact-form-content wow fadeIn" data-wow-delay="800ms">
								<div class="apps-craft-contact-form-content-inner">
									<h2><?php echo get_field('contact_section_title',24363);?></h2>
									<div class="apps-craft-contact-form">

            <?php echo do_shortcode('[contact-form-7 id="24434" title="contact us"]'); ?>

									</div> <!-- .apps-craft-contact-form END -->
								</div> <!-- .apps-craft-contact-form-content-inner END -->
							</div> <!-- .apps-craft-contact-form-content END -->
						</div>
					</div>
				</div>
			</section> <!-- .apps-craft-faq-section END -->

<?php get_footer();
