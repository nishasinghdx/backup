<?php
/**

Template Name: portfolio

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>

    <?php   $about_banner = get_post_custom_values('banners');
		$txtbanners = explode(",", $about_banner[0]);

		?>

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

<br/><br/>


			<br/>
            <!-- sorting menu -->

			<div class="camera_loader" id="loaders" style="display: none;"></div>

            <div class="clearfix"></div>
            <!-- portfolio starts -->
            <div class="row">
              <ul class="holder">


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


				<?php foreach((get_the_category()) as $category) {
				$catname =explode(" ", $category->cat_name);

	if($catname[0] != "Recent" && $catname[0] != "Blog" && $catname[0] != "Services" && $catname[0] != "Services" && $catname[0] != "Services"){
	echo ' <li class="span3" data-id="id-'.$i.'" data-type="'.$catname[0].'">';
	}
}

?>



			             <!-- Jquery Starts  -->

		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
                  <figure class="featured-thumbnail">
                    <div class="img-border portfolio-overlay" style="height:50px;">
<a  class="prettyPhoto" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"  onclick="<?php print_r($image[0]); ?>" >
                      <div class="portfolio-overlay-content">
                        <div class="work-meta">
                               <h4 style="background: #289DCC;
padding-left: 14px;
padding-top: 5px;
color: red!important;
margin-top: 0px!important;
padding-bottom: 5px;">
<a onclick="targetblnk('<?php the_permalink() ?>');"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="color:#ffffff;" >

<?php the_title(); ?></a>
							    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>


							  </h4>
                          <?php the_time('l, F j, Y') ?> </div>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
                        <!--<div class="nectar-love-wrap" style="margin-top: -71px;">   <?php //echo do_shortcode('[social_share/]'); ?> </div>-->
                     </div>
                    </div>
                  </figure>
                </li>



		 <?php $i++; endwhile; ?>


    <?php endif; ?>








              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="spacer-60"></div>

  <style>

  .fb_iframe_widget iframe{
  position:absolute!important;
  }

  .mr_social_sharing span{
overflow:visible!important;
height:auto!important;

}
  .twitter-share-button{
	display:none;
  }

  .pluginCountBox{
display:none!important;
}

  </style>
  <!--==============================footer=================================-->
  <?php get_footer() ?>
</body>
</html>
