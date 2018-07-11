<?php
/**

Template Name: about

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>

<?php   $about_banner = get_post_custom_values('banners');
		$txtbanners = explode(",", $about_banner[0]);

		?>

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

					$width = $bot[1]*12;


				  ?>







            <p class="p0"><?php echo $bot[0]; ?></p>
            <div class="progress progress-striped active progress-info">
              <div  class="bar"  <?php
	 if(!empty($bot[2]))
	 {
	 echo 'style="background-color:'.$bot[2].';width:'.$width.'%"';
	 }else{
	  echo 'style="width:'.$width.'%"';
	 } ?>><strong><?php echo $bot[1]; ?> years</strong></div>
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
              <div class="team">
                <div class="inner-border">
                  <h2 class="our-team"><?php the_title(); ?><span><?php   $custom_fields = get_post_custom_values('about_position');

					print_r($custom_fields[0]);



				  ?></span></h2>
                  <p><?php the_content(); ?></p>

                </div>
              </div>
            </li>
	<?php endwhile;
// Reset Query
wp_reset_query();



	 ?>

          </ul>
          <!-- Strip with button -->
          <div class="span12">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>




				  <?php  $about_banner = get_post_custom_values('footer_banner');
				  $fbanner= explode("," , $about_banner[0]);
			  //echo '<!--<a href="'//. $fbanner[1].'" /><img src="'. $fbanner[0].'" /></a>-->' ;

				  ?>



<?php endwhile; // end of the loop. ?>










		  </div>
        </div>
      </div>
    </div>
  </div>
  <div class="spacer-60"></div>
  <!--==============================footer=================================-->

</div>


<?php get_footer();?>
</body>
</html>
