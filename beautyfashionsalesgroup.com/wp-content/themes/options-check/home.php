<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
<div>
<?php
/* Template Name: Home */
 get_header(); ?>
<!-- Slider Area Start -->






<div class="grid__item sliderblock">
	<div id="shopify-section-slider-revolution" class="shopify-section index-section">
	<?php	echo do_shortcode("[masterslider id=1]");	?>
	</div>
	<div class="dt-sc-hr-invisible-large"></div>
</div>

<!-- Slider Area Ends -->

<!-- Main Area Start -->


    <main class="main-content homemain">
      <div class="border-title">          <h2 class="section-header__title" style="color:#000;">          Brands          </h2>
        <div class="short-desc"> <p style="color:#000;"></p></div>

        <br/><br/><br/></div>
      <div class="grid__item">
        <!-- BEGIN content_for_index -->
        <div id="shopify-section-1492424747531" class="shopify-section index-section">
          <div data-section-id="1492424747531" data-section-type="grid-banner-type-5" class="grid-banner-type-5">

            <div class="grid-uniform collectionItems">
              <?php
             query_posts( array ( 'category_name' => 'beauty products', 'posts_per_page' => -1, 'order' => ASC  ) );
             while ( have_posts() ) : the_post();
             $id=get_the_id();
             $title=get_the_title($id);
             $content=get_the_content($id);
             $image=get_field("images",$i);
             ?>

                <div class="grid__item wide--one-third post-large--one-quarter large--one-quarter medium--one-half small-grid__item brandbox">
                  <div class="bg-effect-1492424747531-0">
                    <div class="ovrly17">
                      <a href="#">
                      <img src="<?php echo $image['url']; ?>" alt="Emulsion cream">
                      <div class="ovrly" style="background:rgba(2, 186, 217, 0.7);"></div>
                   </a>
                    </div>
                    <!--div ovrly17 ends here -->
                    <div class="featured-content">
                      <h4><a href="#"><?php echo $title; ?></a></h4>
                      <p style="color:#000;">
                        <?php echo $content; ?>
                      </p>
                    </div>
                    <!--div featured-content ends here -->
                  </div>
                  <!--div bg-effect-1492424747531-0 ends here -->
                </div>
                <!--div grid__item wide one-quarter ends here -->
                <?php
             endwhile;
             // Reset Query
             wp_reset_query();?>
            </div>
          </div>
        </div>






      <!-- <div id="container">
        <div id="shopify-section-1492424982492" class="shopify-section index-section" style="height:30px;">
          <div data-section-id="1492424982492" data-section-type="gallery-carousel-type-2" class="gallery-carousel-type-2" style="height:30px;">
            <div class="grid-uniform featuredItems" style="height:30px;">
              <div class="grid__item wide--two-tenths post-large--two-tenths large--two-tenths medium--two-tenths small--grid__item full-width-grid-banner">
                <div class="ovrly25">
                  <a class="banner_half_img" href="#">
                    <!-- <img src="./images/11.jpg" alt="Title"> -->
                    <!-- <div class="ovrlyT" style="background: rgba(173, 139, 100, 0.7);"></div>
                    <div class="ovrlyB" style="background: rgba(252, 46, 103, 0.7);"></div>
                    <?php //dynamic_sidebar( 'home_left_1' ); ?> -->
                  <!-- </a>
                </div>
              </div>
              <div class="grid__item wide--six-tenths post-large--six-tenths large--six-tenths medium--six-tenths small--grid__item full-width-grid-banner">
                <div class="middle-top">
                  <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                     <img src="./images/9.jpg" alt="">
                     <div class="ovrlyT" style="background: rgba(249, 207, 184, 0.7);"></div>
                     <div class="ovrlyB" style="background: rgba(243, 139, 160, 0.7);"></div>
                     <?php //dynamic_sidebar( 'home_middle_top_1' ); ?>
                  </a>
                    </div>
                  </div> -->
                  <!-- <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                     <img src="./images/8.jpg" alt="">
                     <div class="ovrlyT" style="background: rgba(254, 254, 242, 0.7);"></div>
                     <div class="ovrlyB" style="background: rgba(211, 40, 59, 0.7);"></div>
                       <?php //dynamic_sidebar( 'home_middle_top_2' ); ?>
                  </a>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="middle-bottom">
                  <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                        <!-- <img src="./images/10.jpg" alt=""> -->
                        <!-- <div class="ovrlyT" style="background: rgba(236, 167, 156, 0.7);"></div>
                        <div class="ovrlyB" style="background: rgba(182, 135, 66, 0.7);"></div>
                        <?php //dynamic_sidebar( 'home_middle_bottom_1' ); ?>
                      </a>
                    </div>
                  </div> -->
                  <!-- <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                        <!-- <img src="./images/7.jpg" alt=""> -->
                        <!-- <div class="ovrlyT" style="background: rgba(0, 0, 0, 0.7);"></div>
                        <div class="ovrlyB" style="background: rgba(223, 156, 156, 0.7);"></div>
                        <?php //dynamic_sidebar( 'home_middle_bottom_2' ); ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="grid__item wide--two-tenths post-large--two-tenths large--two-tenths medium--two-tenths small--grid__item full-width-grid-banner">
                <div class="ovrly25">
                  <a class="banner_half_img" href="http://beautyfashionsales.com/dev/wp-content/themes/options-check/images/BEAUTYfashionsalesSignatureBrochure03082017.pdf" download>
               <img src="./images/6.jpg" alt="">
               <div class="ovrlyT" style="background: rgba(0, 0, 0, 0.7);"></div>
               <div class="ovrlyB" style="background: rgba(138, 234, 242, 0.7);"></div>
               <?php //dynamic_sidebar( 'home_right_1' ); ?>
            </a>
                </div>
              </div>
            </div>
          </div>
          <div class="dt-sc-hr-invisible-large"></div>
        </div>
      </div>

</div>
 -->










		<!-- <div id="shopify-section-1492425293292" class="shopify-section index-section">
		  <div data-section-id="1492425293292" data-section-type="support-block-type-4" class="support-block-type-4">
		    <div class="grid-uniform">
		      <ul class="support_block" style="background:#f5f5f5">
		        <?php		 //query_posts( array ( 'category_name' => 'footer', 'posts_per_page' => -1, 'order' => ASC  ) );
								 //while ( have_posts() ) : the_post();
								 // $id=get_the_id();
								 // $title=get_the_title($id);
								 // $icon=get_field("icon",$id);
								 // $description=get_field("description",$id);
							?>
		          <li class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item wow fadeInUp animated" data-wow-delay="ms" style="visibility: visible;-webkit-animation-delay: ms; -moz-animation-delay: ms; animation-delay: ms;">
		            <div class="support_section">
		              <div class="support_icon">
		                <a href="#" class="support_section" style="color:#000;"><i class="zmdi zmdi-<?php echo $icon;?>"></i></a>
		              </div>
		              <div class="support_text">
		                <h6 style="color:#000;"><?php //echo  $title;?></h6>
		                <p style="color:#000;" class="desc">
		                  <?php //echo  $description;?>
		                </p>
		              </div>
		            </div>
		          </li>

		          <?php		 //endwhile;		 // Reset Query		 wp_reset_query(); ?>
		      </ul>
		    </div>
		  </div>
		</div>
 -->


</main>

<!-- Main Area Start -->




  <!-- Begin quick-view-template -->
  <!-- End of quick-view-template -->
  <a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span><i class="fa fa-long-arrow-up"></i></a>

  <?php get_footer(); ?>
</div>
  </body>
  </html>
