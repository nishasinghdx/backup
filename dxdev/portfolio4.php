<?php
/**

Template Name: portfolio

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>
	<script>
	.bd{
		margin-left:50px;
		margin-top: -48px!important;
	}

	.bde{
		margin-top: -48px!important;
	}

	.ebc{
		margin-top: -14px;
	}

	.nec{
		margin-top: -36px;
	}

	.ade{
		text-align:center;
		border-top: 1px solid rgb(239, 239, 239);
		padding-top:20px;
	}

	.au{
		margin:auto;
	}
	</script>

    <?php   $about_banner = get_post_custom_values('banners');
		$txtbanners = explode(",", $about_banner[0]);

	?>

    <!--==============================content=================================-->
    <!-- Slider -->
	<section class="fx-slider">
		<div class="fx-caption">
			<span class="camera-caption1"> <?php echo $txtbanners[0];  ?></span><br>
			<span class="camera-caption2"> <?php echo $txtbanners[1];  ?></span>
		</div>
		<div class="flexslider">
			<ul class="slides">
				<?php
					$i = 1;
					foreach($txtbanners as $banner){
					if($i > 2 ){

				?>
				<li> <img src="<?php echo $banner; ?>" alt="banners"> </li>
				<?php
					} $i++; }
				?>
			</ul>
		</div>
    </section>
    <!--=======Portfolio=======-->
    <div id="second">
		<div class="container">
			<!-- Portfolio 3 -->
			<div class="row">
				<div class="span12 portfolio">
					<h3 class="title"> <span>Portfolio</span> </h3>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<br/><br/><br/>
            <!-- sorting menu -->

					<div class=" fright float-tab">
						<ul id="filterOptions" class="port-filters clearfix">
							<li  class="active"><a onclick="loder();" href="#" class="all" >All</a></li>

								<?php
									$blogCategoryID = "28"; // current category ID
										$childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");
										if ($childCatID){
											$i=1;
											foreach ($childCatID as $kid){
												$childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");
												$catname =explode(" ", $childCatName->name);
								?>
								<li>
									<a  onclick="loder();" href="#" class="<?php echo $catname[0]; ?>"><?php echo $childCatName->name; ?></a>
								</li>
								<?php
									$i++;
											}
										}
								?>

						</ul>
					</div>
					<div class="camera_loader custom-closenone" id="loaders"></div>
					<div class="clearfix"></div>
					<!-- portfolio starts -->
					<div class="row">
						<ul class="holder">
							<?php
								global $post;
								$cats=array();
								foreach($childCatID as $category) {
									$cats[]=$category;
								}
								$showposts = -1; // -1 shows all posts
								$do_not_show_stickies = 1; // 0 to show stickies
								$args=array(
									'category__in' => $cats,
									'showposts' => $showposts,
									'caller_get_posts' => $do_not_show_stickies
								);
								$my_query = new WP_Query($args);
								$i=1;
							?>
							<?php if( $my_query->have_posts() ) : ?>
							<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php
								//necessary to show the tags
								global $wp_query;
								$wp_query->in_the_loop = true;
							?>
							<?php
								global $post;
								$post_id =$post->ID;
								//  echo $thePostid;
								$imageArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_name' );
								$imageURL = $imageArray[0]; // here's the image url
							?>
							<?php
								$caegories = get_the_category($post_id);
								$tcatname = null;
								foreach($caegories as $category){
									$catname =explode(" ", $category->cat_name);
									if($catname[0] != "Recent" ){
										$tcatname = $tcatname." ".$catname[0];
									}
								}
								echo ' <li class="span3" data-id="id-'.$i.'" data-type="'.$tcatname.'">';
							?>
							<!-- Jquery Starts  -->

							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
							<figure class="featured-thumbnail">
								<div class="img-border portfolio-overlay">
									<div class="img-opacity portfolioblk">
										<a href="<?php print_r($image[0]); ?>" class="example-image-link" data-lightbox="example-2" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
											<div  class="portfoliobox">
											<?php the_post_thumbnail('medium' , array('alt' => ''.get_the_title().'')); ?>
											</div>
										</a>
										<span class="link-page ztwo bd">
										<?php
											$custom_fields = get_post_custom_values('portfolio_link');
											if(!empty($custom_fields)){
												foreach ( $custom_fields as  $field_values){
										?>
										<a href="<?php echo $field_values; ?>" target="_blank"  rel="nofollow"></a>
										<?php
												}
											}
										?>
										</span>
										<span class="zoom-effect zone bde">
											<a class="example-image-link" href="<?php print_r($image[0]); ?>"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" data-lightbox="example-2"></a>
										</span>
									</div>
									<div class="portfolio-overlay-content">
										<div class="work-meta ebc">
											<h4>
												<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?>
												</a>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
											</h4>
											<?php the_time('l, F j, Y') ?>
										</div>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
										<div class="nectar-love-wrap nec">

										</div>
									</div>
								</div>
							</figure>
										</li>
							<?php $i++; endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>

				<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
				<script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>
				<div class="span12 bot-40">
					<script class="secret-source">
						jQuery(document).ready(function($) {

						  $('#banner-fade2').bjqs({

						  width       : 1200,
							responsive  : true
						  });

						});
					</script>
					<div class="span12 ade">
						<div id="banner-fade2 au">

							<!-- start Basic Jquery Slider -->
							<ul class="bjqs">
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php  $about_banners = get_post_custom_values('footer_banner');
									foreach($about_banners  as $about_banner){
								?>
								<li>
									<?php
										$fbanner= explode("," , $about_banner);
										$fbanners= explode("^" , $about_banner);
										if(!empty($fbanner[0]) && $fbanners[0] != "code"){
									?>
									<a href="<?php echo $fbanner[5]; ?>" id="callout"> <strong><?php echo $fbanner[3]; ?></strong><span><?php echo $fbanner[4]; ?></span> </a>
								</li>
								<?php  }else {
									echo  $fbanners[1];
									}
								?>
								<?php
									}
									endwhile; // end of the loop.
								?>
							</ul>
							<!-- end Basic jQuery Slider -->
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<div class="spacer-60"></div>
</div>
<!--==============================footer=================================-->
<?php get_footer() ?>
