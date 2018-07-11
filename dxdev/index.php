<?php

get_header();
///include (TEMPLATEPATH . '/custom-header.php');

?>
 <?php     $title11 = str_replace(' ', '%20', of_get_option('title1')); ?>
		   <?php    $title21 = str_replace(' ', '%20', of_get_option('title2')); ?>
		    <?php    $title31 = str_replace(' ', '%20', of_get_option('title3')); ?>
			 <?php    $title41 = str_replace(' ', '%20', of_get_option('title4')); ?>


    <div id="second">
      <div class="container">
        <div class="row">
          <ul class="thumbnails">

		   <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col indx-hei"> <i class="icon-3x icon-troph"><i class="circle-border"></i></i>
              <a class="link" href=" <?php  echo   $url1 =  of_get_option('url1'); ?>&amp;category=<?php   echo $title11 ; ?>">  <h2><?php echo $title1 = of_get_option('title1'); ?></h2>
               </a> <p><?php echo $desc1 = of_get_option('desc1'); ?>
			<a class="link" href=" <?php  echo   $url1 =  of_get_option('url1'); ?>&amp;category=<?php   echo $title11 ; ?>">read more -</a></p>
              </div>
            </li>
             <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col indx-hei"> <i class="icon-3x icon-cogd"><i class="circle-border"></i></i>
                <a class="link" href=" <?php  echo   $url2 =  of_get_option('url2'); ?>&amp;category=<?php   echo $title21 ; ?>"><h2><?php echo $title2 = of_get_option('title2'); ?></h2></a>
                <p><?php echo $desc2 = of_get_option('desc2'); ?><a class="link" href=" <?php  echo   $url2 =  of_get_option('url2'); ?>&amp;category=<?php   echo $title21 ; ?>">read more -</a></p>
              </div>
            </li>
           <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col indx-hei"> <!--<i class="icon-3x icon-rockd">--><i class="icon-3x fa-users"><i class="circle-border"></i></i>
               <a class="link" href=" <?php  echo   $url3 =  of_get_option('url3'); ?>&amp;category=<?php   echo $title31 ; ?>"> <h2><?php echo $title3 = of_get_option('title3'); ?></h2></a>
                <p><?php echo $desc3 = of_get_option('desc3'); ?> <a class="link" href="<?php  echo   $url3 =  of_get_option('url3'); ?>&amp;category=<?php   echo $title31 ; ?>">read more -</a></p>
              </div>
            </li>
            <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col indx-hei"> <i class="icon-3x icon-beake"><i class="circle-border"></i></i>
               <a class="link" href="<?php  echo   $url4 =  of_get_option('url4'); ?>&amp;category=<?php   echo $title41 ; ?>"> <h2><?php echo $title4 = of_get_option('title4'); ?></h2></a>
                <p><?php echo $desc4 = of_get_option('desc4'); ?> <a  href="<?php  echo   $url4 =  of_get_option('url4'); ?>&amp;category=<?php   echo $title41 ; ?>">read more -</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="third">
      <div class="container">
        <div class="row">
          <div class="span3">
            <h1 class = "home" >Recent Work</h1>
			<?php $category_id = get_cat_ID( "Recent Work" ); ?>
			<?php echo category_description( $category_id ); ?>

			<?php  $recent = of_get_option('rurl');
				$recent = explode("," , $recent);
			?>
            <a href="<?php echo $recent[1]; ?>" class="btn-dark2"><?php echo $recent[0]; ?></a>
            <div class="clearfix"></div>
          </div>
          <div class="span9">
            <div class="carousel-wrap carousel__formats">
              <div id="carousel-blog" class="es-carousel-wrapper">
                <div class="es-carousel">
                  <ul class="es-carousel_list">

				  <?php query_posts('category_name=Recent Work&showposts=12'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>
                    <li class="es-carousel_li gallery">
                      <figure class="featured-thumbnail">
                        <div class="img-border portfolio-overlay">


						 <div class="img-opacity">
							<a class="example-image-link" href="<?php print_r($image[0]); ?>"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" data-lightbox="example-2">
							   <div class="indx-overhei">
							   <?php the_post_thumbnail('medium' , array('alt' => ''.get_the_title().'')); ?>
							   </div>
							</a>
					   <span class="link-page indx-marlef">

						<?php
							$custom_fields = get_post_custom_values('portfolio_link');
								if(!empty($custom_fields)){
									foreach ( $custom_fields as  $field_values ) {

						?>
						<a href="<?php echo $field_values; ?>" target="_blank"  rel="nofollow"></a>
						<?php   }	}	  ?>

					   </span>

					   <span id="zoom-effect" class="zoom-effect" ><a class="example-image-link" href="<?php print_r($image[0]); ?>"  rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" data-lightbox="example-2"></a></span>

					   </div>
					   <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

                        <div class="portfolio-overlay-content">
                            <div class="work-meta">
                             <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title(); ?></a>
							    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );   ?>

							 </h4>
                          <?php the_time('l, F j, Y'); ?> </div>
                           <div class="nectar-love-wrap">  <?php //echo do_shortcode('[social_share/]'); ?>  </div>
						</div>
                        </div>
                      </figure>
                    </li>
			  <?php endwhile; ?>

                  </ul>
                </div>
                <div class="es-nav"><span class="es-nav-prev"><i class="icon-chevron-left"></i></span><span class="es-nav-next"><i class="icon-chevron-right"></i></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--=======Fifth=======-->
    <div id="fifth">
      <div class="container">
        <div class="row">
          <!-- Latest News -->
          <div class="span6">
            <h3 class="title"> <span>Latest news</span> </h3>
            <ul class="list-blog">
			<?php
				function truncateString($str, $chars, $to_space, $replacement="...") {
					if($chars > strlen($str)) return $str;
					$str = substr($str, 0, $chars);
					$space_pos = strrpos($str, " ");
					if($to_space && $space_pos >= 0) {
					   $str = substr($str, 0, strrpos($str, " "));
					}
					return($str . $replacement);
				}
			?>
			 <?php query_posts('category_name=Blog&showposts=2'); ?>
			<?php while (have_posts()) : the_post(); ?>
              <li>
                <div class="overlow post-holder extra">
                  <div class="date"> <span class="day"> <?php the_time('j') ?></span> <span class="month"><?php the_time('F') ?></span> </div>
                  <h4><?php the_title(); ?></h4>
                  <div class="date-1"><span> <?php comments_number( $zero, $one, $more ); ?> </span></div>

                 <?php
				 $news = get_the_twitter_excerpt();
				 echo truncateString($news,120, true);
				 ?>

				 <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">&nbsp;&nbsp;read more -</a>
                </div>
              </li>

      <?php endwhile; ?>

            </ul>
          </div>
          <!-- Testimonials -->
          <div class="span6">
            <div id="cbp-qtrotator" class="cbp-qtrotator"> <img class="testi-icon" src="<?php bloginfo('template_directory'); ?>/img/fon2-before.png" alt="test">
              <?php query_posts('category_name=	Testimonials&showposts=9'); ?>
			<?php while (have_posts()) : the_post(); ?>

              <div class="cbp-qtcontent"> <?php the_post_thumbnail('large' , array('alt' => ''.get_the_title().'')); ?>              <div class="testi-text">
                  <span> <?php the_title(); ?></span><?php the_content(); ?>
                  <div class="testi-name"><?php
				   $custom_fields = get_post_custom_values('testimonials_author');
				  if(!empty($custom_fields)){
				     foreach ( $custom_fields as  $field_values ) {
						echo $field_values;
					}
				}

				  ?>  </div>
                </div>
              </div>

              <?php endwhile; ?>
            </div>
          </div>
          <!-- Info Box -->
          <div class="span12">


		  <?php $bbanner = of_get_option('bbanner');
		  $fbanner= explode("," , $bbanner);

		 if(!empty($fbanner[0])){

				print_r($fbanner);  ?>
		   <a href="<?php echo $fbanner[5]; ?>" id="callout"> <strong><?php echo $fbanner[3]; ?></strong> <span><?php echo $fbanner[4]; ?></span> </a>


		  <?php  } ?>

		  </div>
			 <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>


          <!-- Banner -->
          <div class="span12">
            <h3 class="title top-40"> <span><?php echo of_get_option('clientheading'); ?></span> </h3>
            <ul class="list-banners top-0">

			<?php
			$images=array();
			for($i=0;$i<=20;$i++){
			$j= $i-1;
			$option = of_get_option('example_repeat'.$j.'');
			$check =$option;
			if(!empty($check)){
			$images[]=$check;
			} }

			$result = count($images);
			$results = $result-1;
			function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
				$numbers = range($min, $max);
				shuffle($numbers);
				return array_slice($numbers, 0, $quantity);
			}

			$res= UniqueRandomNumbersWithinRange(0,$results,6);

			foreach($res as $rs){
			$crs = $rs+1;
			?>
			<li><a target = "_blank" rel="nofollow" href="<?php echo of_get_option('clink'.$crs.''); ?>"><img alt="<?php echo of_get_option('alt'.$crs.''); ?>" src="<?php echo  $images[$rs]; ?>"></a> </li>
			<?php } 			?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
<?php get_footer(); ?>
