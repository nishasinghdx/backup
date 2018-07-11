<?php
/**

Template Name: blog

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>
<style>
.hidelink{
display:none;
}

</style>

    <!--==============================content=================================-->
    <!-- Slider -->
  
    <?php   $about_banner = get_post_custom_values('banners');   
		$txtbanners = explode(",", $about_banner[0]);
		
		?>

    <!--==============================content=================================-->
    <!-- Slider -->
  <section class="fx-slider">
      <div class="fx-caption"> <span class="camera-caption1"> <?php echo $txtbanners[0];  ?></span><br>
        <span class="camera-caption2"> <?php echo $txtbanners[1];  ?></span> </div>
      <div class="flexslider">
        <ul class="slides">
		


	<?php
		$i = 1;
		foreach($txtbanners as $banner){ 
		if($i > 2 ){
		
		?>
				
				<li> <img src="<?php echo $banner; ?>" alt=""> </li>
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
          <article class="span8">
            <div class="post-border-right">
			
			
			
				<?php
		
global $post;
$cats=array();
foreach(get_the_category() as $category) {
    $cats[]=$category->cat_ID;
}
$showposts = -1; // -1 shows all posts
$do_not_show_stickies = 1; // 0 to show stickies
$args=array(
   'category__in' => $cats,
   'showposts' => $showposts,
   'caller_get_posts' => $do_not_show_stickies
   );
$my_query = new WP_Query($args);
 
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
	

			
			
			
			
			
			
			
              <article class="post-holder">
                <div>
                  <div class="date"> <span class="day"> <?php the_time('j') ?></span> <span class="month"><?php the_time('F') ?></span> </div>
                  <h3 class="entry-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3><?php echo do_shortcode('[social_share/]'); ?>
                  <div class="post-meta">
                    <div class="fleft"><i class="icon-user"></i>  <i class="icon-eye-open"></i> <a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <i class="icon-comments-alt"></i> <a href="#"> <?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?> </a> <i class="icon-tag"></i><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo ' <a href="#">' . $tag->name . '</a>  '; 
  }
}
?>  </div>
                  </div>
                  <!--.post-meta-->
                </div>
              				
<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
if(!empty($url)){

?>
				
                <figure class="blogimg"> 
				<a class="prettyPhoto" href="<?php echo $url; ?>"><?php the_post_thumbnail(); ?>  </a>
				</figure>
				
				<?php } ?>
				
				
				
                 <?php the_excerpt(); ?>
               <a onclick="targetblnk('<?php the_permalink() ?>');"  class="btn-dark2" >Continue Reading</a>
                <div class="addthis_toolbox addthis_pill_combo"> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet" tw:count="horizontal"></a> <a class="addthis_button_facebook_like"></a> </div>
              </article>
              <div class="clear"></div>
          
			 
		 <?php endwhile; ?>
 
     
    <?php endif; ?>
   
			  
			  
			  
			  
			  
             
            </div>
          </article>
          <article class="span4 fright">
		  
		  <?php get_sidebar(); ?>
		  
		  
          </article>
        </div>
      </div>
    </div>
    <!--=======third=======-->
  </div>
  <div class="spacer-60"></div>
  <!--==============================footer=================================-->

</div>

<style>
div.mr_social_sharing_wrapper{
width:auto!important;
 float: right!important; 
 margin: -40px 0!important;
}
.twitter-share-button{
float: left;
    
    margin-left: -70px;
    margin-top: -22px;
    position: absolute;


}
</style>
<?php get_footer();?>
</body>
</html>
