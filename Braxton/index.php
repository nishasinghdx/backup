<?php
/**
 * The main template file
 *
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







<!-- Main Content Starts -->


	<div id="maincontent_home" role="main">

			<div class="container-fluid page grey">
				<div class="row module news">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12">
								<span class="news_title">
									<a href="#">Braxton News</a>
								</span>
							</div>
						</div>
						<div class="row row-flex row-flex-wrap">

	 <div class="col-md-9 col-sm-12 flex-col main-stories">
	   <div class="row row-flex row-flex-wrap">

			 <?php
			 $args_news = array( 'post_type' => 'news');
			 $loop_news = new WP_Query( $args_news );
			 $count=1;
			 while ( $loop_news->have_posts() ) : $loop_news->the_post();
			 if($count<=3){
			 ?>
			 <a href="#" class="col-sm-4 col-xs-12">
			 	<div class="row">
			 		<div class="col-sm-12 col-xs-5 story">
			 			<span><img src="<?php echo get_the_post_thumbnail_url();?>" alt=' '></span>
			 		</div>
			 		<div class="col-sm-12 col-xs-7">
			 			<span class="h_head1"><?php echo get_the_title(); ?></span>
			 		</div>
			 	</div>
			 </a>
		 <?php } endwhile; ?>

	</div>
</div>

<div class="col-md-3 col-sm-12 flex-col headlines">
	<span class="news_right">Latest News</span>
	<div id="newsrotate">
		<ul>
			<?php
			$args_news = array( 'post_type' => 'news');
			$loop_news = new WP_Query( $args_news );
			$count=1;
			while ( $loop_news->have_posts() ) : $loop_news->the_post();
			if($count<=3){
			?>
 <li><div><span class="h_head2"><a href="#"><?php echo get_the_title(); ?></a></span></div></li>
<?php } endwhile; ?>


		</ul>
	</div>
	<a href="#" class="more-link valign"><span>More News<b></b></span></a>
</div>

						</div>
					</div>
				</div>
			</div>



		<div class="container-fluid page cta">
			<div class="row module video">
				<div class="col-md-7 col-sm-6 col-lg-offset-1">

					<div class="video_wrapper">
						<iframe src="<?php echo get_field('video_link',136); ?>" allowfullscreen aria-label="Featured Video"></iframe>
					</div>

				</div>
				<div class="col-lg-3 col-md-5 col-sm-6">
					<span class="vedio_text"><?php echo get_field('video_title',136); ?></span>
					<p><?php echo get_field('video_content',136); ?></p>
					<a href="<?php echo get_field('video_visit_link',136); ?>" class="more-link"><span><?php echo get_field('video_visit_title',136); ?><b></b></span></a>
				</div>
			</div>
		</div>

<!-- start of facilities section -->
		<div class="container-fluid page grey spotlight-wrap">
			<div class="row module spotlight tabs tabs-style-iconbox">
				<nav>
					<ul id="spotlight-tabs">
						<li><a href="#" id="nav-spotlight"><span>Spotlight</span></a></li>
						<li><a href="#" id="nav-impact"><span>UChicago's Impact</span></a></li>
						<li><a href="#" id="nav-labs"><span>Affiliated Laboratories</span></a></li>
					</ul>
				</nav>

				<div id="spotlight-wrapper">
					<ul id="spotlight-slider">
      <!-- spotlight section for desktop starts here -->
						<li>
							<section id="section-spotlight">
								<?php
								$args_facilities = array( 'post_type' => 'facilities', 'category_name' => 'spotlight');
								$loop_facilities = new WP_Query( $args_facilities );
								while ( $loop_facilities->have_posts() ) : $loop_facilities->the_post();
								?>
								<div class="col-sm-2 col-xs-4">
									<figure class="circle-photo">
										<a href="#">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt=" ">
										<figcaption><?php echo get_the_title(); ?></figcaption>
										</a>
									</figure>
								</div>
                   <?php
								 endwhile;
									  ?>

							</section>
						</li>
						  <!-- spotlight section for desktop ends here -->
							  <!-- spotlight section for impact starts here -->
						<li>
							<section id="section-impact">
								<?php
								$args_impact = array( 'post_type' => 'facilities', 'category_name' => 'impact');
								$loop_impact = new WP_Query( $args_impact );
								$count=0;
								while ( $loop_impact->have_posts() ) : $loop_impact->the_post();
								?>
                 <?php if($count==0){ ?>
								<div class="col-sm-2 col-xs-4 col-sm-offset-2">
									<figure class="circle-photo">
										<a href="#">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt=" ">
										<figcaption><?php echo get_the_title(); ?></figcaption>
										</a>
									</figure>
								</div>
							<?php }
                else{
									?>
									<div class="col-sm-2 col-xs-4">
										<figure class="circle-photo">
											<a href="#">
											<img src="<?php echo get_the_post_thumbnail_url();?>" alt=" ">
											<figcaption><?php echo get_the_title(); ?></figcaption>
											</a>
										</figure>
									</div>
									<?php
								}
							 ?>
                <?php
                $count++;
							endwhile;
								 ?>

							</section>
						</li>
						  <!-- spotlight section for desktop impact ends here -->
							  <!-- spotlight section for desktop labs starts here -->
						<li>
							<section class="row row-centered" id="section-labs"x>
								<?php
								$args_labs = array( 'post_type' => 'facilities', 'category_name' => 'labs');
								$loop_labs = new WP_Query( $args_labs );
								while ( $loop_labs->have_posts() ) : $loop_labs->the_post();
								?>
								<div class="col-sm-3 col-xs-4 col-centered labs">
									<figure class="section-labs circle-photo">
										<a href="#">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt=" ">
										<figcaption style="background-image:url(https://d3qi0qp55mx5f5.cloudfront.net/www/i/homepage/spotlight/spotlight-argonne-logo-2.svg?mtime=1473261930);}"><?php echo get_the_title(); ?></figcaption>
										</a>
									</figure>
								</div>
         <?php endwhile; ?>

							</section>
						</li>
						<!-- spotlight section for desktop labs starts here -->
					</ul>
					<!-- facilities section for desktop	ends here		 -->
	<!-- facilities section for mobile	starts here		 -->
					<ul id="spotlight-slider-mobile">
						<?php
						$args = array( 'post_type' => 'facilities');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<li>
							<figure class="circle-photo">
								<a href="#">
								<img src="<?php echo get_the_post_thumbnail_url();?>" alt=" ">
								<figcaption><?php echo get_the_title(); ?></figcaption>
								</a>
							</figure></li>
       <?php endwhile; ?>

					</ul>
				</div>
			</div>
		</div>
<!-- end of facilities section -->
<!-- events section starts here -->
		<div class="container page">
			<div class="row module uchicago-events">
				<div class="col-md-12">
					<?php dynamic_sidebar('Events Widget Area'); ?>
				</div>
			</div>
		</div>
<!-- events section ends here -->

		<div class="container-fluid page dark-grey">
			<div class="row module uchi-social">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="valign">
								<span class="social_text">Braxton<b>Social</b></span>
								<ul class="social">
									<li><a href="<?php echo of_get_option('facebook_link');?>" class="ss-social ss-icon">Facebook</a></li>
									<li><a href="<?php echo of_get_option('twitter_link');?>" class="ss-social ss-icon">Twitter</a></li>
									<li><a href="<?php echo of_get_option('instagram_link');?>" class="ss-social ss-icon">Instagram</a></li>
							    <li><a href="<?php echo of_get_option('youtube_link');?>" class="ss-social ss-icon">YouTube</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row tint">
						<!-- <div id="tintwidget" class="tintup" data-id="uchicagowww" data-columns="" data-wl="true" data-count="4" data-paginate="true" data-personalization-id="812168" data-mobilescroll="true" style="height:600px;width:100%px"></div> -->
             <div class="col-md-3">
							 <div class="shield hidden-phone">
						<?php dynamic_sidebar('Social Media Widget One'); ?>
					   </div>
					   </div>

						 <div class="col-md-3">
						 	<div class="shield hidden-phone">
						 <?php dynamic_sidebar('Social Media Widget Two'); ?>
						 </div>
						 </div>

						 <div class="col-md-3" >
						 	<div class="shield hidden-phone" >
						 <?php dynamic_sidebar('Social Media Widget Three'); ?>
						 </div>
						 </div>

						 <div class="col-md-3">
						 	<div class="question" >
						 <?php dynamic_sidebar('Social Media Widget Four'); ?>
						 </div>
						 </div>

					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid page grey">
			<div class="row module">
				<div class="col-md-8 col-sm-6 col-xs-12 campaign">
	<a href="#">
		<div class="shield hidden-phone">
			<noscript><img src="https://d3qi0qp55mx5f5.cloudfront.net/www/i/homepage/crescat/save_date_banner_7.gif" alt="It starts with a question. What can one idea, one person, one university?"></noscript>
			<!-- <img src="https://d3qi0qp55mx5f5.cloudfront.net/shared-resources/i/template/transparent.gif" data-original="https://d3qi0qp55mx5f5.cloudfront.net/www/i/homepage/crescat/save_date_banner_7.gif" alt="It starts with a question. What can one idea, one person, one university?" class="lazy"> -->
       <?php dynamic_sidebar('Widget Left'); ?>
		</div>
		<div class="question">
			<noscript><img src="https://d3qi0qp55mx5f5.cloudfront.net/www/i/homepage/crescat/CAM_0033_invite_banner_8.png" alt="The University of Chicago Campaign: Inquiry &amp; Impact"></noscript>
			<!-- <img src="https://d3qi0qp55mx5f5.cloudfront.net/shared-resources/i/template/transparent.gif" data-original="https://d3qi0qp55mx5f5.cloudfront.net/www/i/homepage/crescat/CAM_0033_invite_banner_8.png" alt="The University of Chicago Campaign: Inquiry &amp; Impact" class="lazy"> -->
			<?php dynamic_sidebar('Widget Center'); ?>
		</div>
	</a>
</div>

				<div class="col-md-4 col-sm-6 col-xs-12 explore">
					<ul id="explore-slider">

						<li>
							<a href="#">
								<h2 style="background:#437a43;">Explore Chicago</h2>
								<?php dynamic_sidebar('Widget Right'); ?>

							</a>
						</li>

					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Main Content Ends -->


<div class="wrap" style="display:none;">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<!--<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2> -->
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// if ( have_posts() ) :
      //
			// 	/* Start the Loop */
			// 	while ( have_posts() ) : the_post();
      //
			// 		/*
			// 		 * Include the Post-Format-specific template for the content.
			// 		 * If you want to override this in a child theme, then include a file
			// 		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			// 		 */
			// 		get_template_part( 'template-parts/post/content', get_post_format() );
      //
			// 	endwhile;
      //
			// 	the_posts_pagination( array(
			// 		'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
			// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			// 		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			// 	) );
      //
			// else :
      //
			// 	get_template_part( 'template-parts/post/content', 'none' );
      //
			// endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
