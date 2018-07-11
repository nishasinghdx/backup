<?php
/**

Template Name: about

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>
	<script>
	.ghi{
		text-align:center; 
		border-top: 1px solid rgb(239, 239, 239);
		padding-top:20px;
	}
	
	.au{
		margin:auto;
	}
	</script>
<?php   
	$about_banner = get_post_custom_values('banners');   
	$txtbanners = explode(",", $about_banner[0]);	
?>

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
			} $i++; }?>
			</ul>
		</div>
    </section>
    <!--=======second=======-->
    <div id="second">
		<div class="container">
        <!-- who we are -->
			<div class="row">
				<div class="span8 bot-40">
					 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<h3 class="title"><span> <?php the_title(); ?> </span></h3>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
          <!-- Skills -->
				<div class="span4 bot-40">
					<h3 class="title"> <span>Our Skills And Experience</span> </h3>
					<?php   $custom_fields = get_post_custom_values('about_skills'); 
					foreach($custom_fields as $services){
					$bot = explode(",",$services);
					$width = $bot[1]*12.5;
					?>

					<p class="p0"><?php echo $bot[0]; ?></p>
					<div class="progress progress-striped active progress-info">
						<div  class="bar"  <?php 
							if(!empty($bot[2]))
							{ 
								echo 'style="background-color:'.$bot[2].';width:'.$width.'%"';  
							}else{
								echo 'style="width:'.$width.'%"';  
							} ?>>
							<strong>
								<?php echo $bot[1]; ?> years
							</strong>
						</div>
					</div>	
					
					<?php } ?>
			 
				</div>
			</div>
        </div>
    </div>
  
    <!--=======third=======-->
    <div id="third">
		<div class="section-2">
			<div class="container">
			  <!-- Strip with button -->
				<div class="row">
					<div class="span12">
						<?php   $map = get_post_custom_values('map_text');  print_r($map[0]);?>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!--=======Fifth=======-->
    <div id="fifth">
		<div class="container">
			<div class="row">
				<!-- Meet Our Team -->
				<div class="span12">
					<h3 class="title"> <span>Meet Our Team</span> </h3>
					<?php $category_id = get_cat_ID( "Team" ); ?>
					<?php echo category_description( $category_id ); ?> 
				</div>
				<ul class="thumbnails center">
		  
					<?php query_posts('category_name=Team&showposts=12'); ?>
					<?php while (have_posts()) : the_post(); ?>
				  
					<li class="thumbnail span3">
						<div class="team"> <?php the_post_thumbnail(array('alt' => ''.get_the_title().'')); ?>
							<div class="inner-border">
								<h2 class="our-team"><?php the_title(); ?>
									<span>
										<?php   $custom_fields = get_post_custom_values('about_position'); 

										print_r($custom_fields[0]);  ?>
									</span>
								</h2>
								<?php the_content(); ?>
						
							</div>
						</div>
					</li>
					<?php endwhile;
					// Reset Query
						wp_reset_query();
					?>	
			
				</ul>
          <!-- Strip with button -->
		  
				<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>   
				<script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script> 
				<script class="secret-source">
					jQuery(document).ready(function($) {

					  $('#banner-fade2').bjqs({
					  
						width       : 1200,
						responsive  : true
					  });

					});
		
				</script>
				<div class="span12 ghi"> 

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
							} ?>
							<?php 
							}
							endwhile; // end of the loop. ?>
						</ul>
						<!-- end Basic jQuery Slider -->
					</div>	  
				</div>
			</div>
		</div>
    </div>
</div>
<div class="spacer-60"></div>
<!--==============================footer=================================-->
</div>
<?php get_footer();?>