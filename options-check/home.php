<?php
/* Template Name: Home */
 get_header(); ?>
<!-- Slider Area Start -->






<div class="grid__item">
	<div id="shopify-section-slider-revolution" class="shopify-section index-section">
	<?php	echo do_shortcode("[masterslider id=1]");	?>
	</div>
	<div class="dt-sc-hr-invisible-large"></div>
</div>

<!-- Slider Area Ends -->

<!-- Main Area Start -->


    <main class="main-content">
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

                <div class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item">
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




    <br/><br/><br/><br/><br/><br/>




      <div id="container">
        <div id="shopify-section-1492424982492" class="shopify-section index-section" style="height:30px;">
          <div data-section-id="1492424982492" data-section-type="gallery-carousel-type-2" class="gallery-carousel-type-2" style="height:30px;">
            <div class="grid-uniform featuredItems" style="height:30px;">
              <div class="grid__item wide--two-tenths post-large--two-tenths large--two-tenths medium--two-tenths small--grid__item full-width-grid-banner">
                <div class="ovrly25">
                  <a class="banner_half_img" href="#">
                    <!-- <img src="./images/11.jpg" alt="Title"> -->
                    <div class="ovrlyT" style="background: rgba(173, 139, 100, 0.7);"></div>
                    <div class="ovrlyB" style="background: rgba(252, 46, 103, 0.7);"></div>
                    <?php dynamic_sidebar( 'home_left_1' ); ?>
                  </a>
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
                     <?php dynamic_sidebar( 'home_middle_top_1' ); ?>
                  </a>
                    </div>
                  </div>
                  <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                     <img src="./images/8.jpg" alt="">
                     <div class="ovrlyT" style="background: rgba(254, 254, 242, 0.7);"></div>
                     <div class="ovrlyB" style="background: rgba(211, 40, 59, 0.7);"></div>
                       <?php dynamic_sidebar( 'home_middle_top_2' ); ?>
                  </a>
                    </div>
                  </div>
                </div>
                <div class="middle-bottom">
                  <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                        <!-- <img src="./images/10.jpg" alt=""> -->
                        <div class="ovrlyT" style="background: rgba(236, 167, 156, 0.7);"></div>
                        <div class="ovrlyB" style="background: rgba(182, 135, 66, 0.7);"></div>
                        <?php dynamic_sidebar( 'home_middle_bottom_1' ); ?>
                      </a>
                    </div>
                  </div>
                  <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-third small--grid__item">
                    <div class="ovrly25">
                      <a class="banner_half_img" href="#">
                        <!-- <img src="./images/7.jpg" alt=""> -->
                        <div class="ovrlyT" style="background: rgba(0, 0, 0, 0.7);"></div>
                        <div class="ovrlyB" style="background: rgba(223, 156, 156, 0.7);"></div>
                        <?php dynamic_sidebar( 'home_middle_bottom_2' ); ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid__item wide--two-tenths post-large--two-tenths large--two-tenths medium--two-tenths small--grid__item full-width-grid-banner">
                <div class="ovrly25">
                  <a class="banner_half_img" href="http://beautyfashionsales.com/dev/wp-content/themes/options-check/images/BEAUTYfashionsalesSignatureBrochure03082017.pdf" download>
               <img src="./images/6.jpg" alt="">
               <div class="ovrlyT" style="background: rgba(0, 0, 0, 0.7);"></div>
               <div class="ovrlyB" style="background: rgba(138, 234, 242, 0.7);"></div>
               <?php dynamic_sidebar( 'home_right_1' ); ?>
            </a>
                </div>
              </div>
            </div>
          </div>
          <div class="dt-sc-hr-invisible-large"></div>
        </div>
      </div>

</div>









<?php
							$lipstick_category=get_the_category_by_ID(10);
							$foundation_category=get_the_category_by_ID(11);
							$eyeshadow_category=get_the_category_by_ID(12);
							$waterproof_category=get_the_category_by_ID(13);
?>
      <div id="shopify-section-1492760189548" class="shopify-section index-section">
        <div data-section-id="1492760189548" data-section-type="filter-grid-type-3" class="filter-grid-type-3">
          <div class="grid__item text-center">
            <div class="border-title">
              <h2 style="color:#000000">Best Sellers</h2>
            </div>
            <div class="short-desc" style="color:#000;">
              <p>Just in now</p>
            </div>
          </div>
          <div class="grid__item  text-center">
            <div class="sorting-container">
              <a style="color:#000000;" data-filter=".all-sort" class="active-all" href="#">
                <?php echo  $lipstick_category;?>
              </a>
              <a style="color:#000000;" data-filter=".foundation" href="#">
                <?php echo  $foundation_category;?>
              </a>
              <a style="color:#000000;" data-filter=".eye-shadow" href="#">
                <?php echo  $eyeshadow_category;?>
              </a>
              <a style="color:#000000;" data-filter=".waterproof" href="#">
                <?php echo  $waterproof_category;?>
              </a>
            </div>
          </div>

          <div class="portfolio-container cs-style-3 isotope" style="position: relative; overflow: hidden; height: 407px;">
            <?php
					     query_posts( array ( 'category_name' => 'Lipstick', 'posts_per_page' => -1, 'order' => ASC  ) );
							 $transform = 0;
					     while ( have_posts() ) : the_post();
					     $i=get_the_id();
					     $title=get_the_title($i);
					     $image=get_field("image",$i);



     		 	?>

					    <div class="column grid__item wide--one-fifth post-large--one-fifth large--one-half medium--one-half small-grid__item  small--grid__item text-center gallery  no-space lipstick waterproof eye shadow all-sort isotope-item" style="position: absolute; left: <?php echo $transform; ?>px; top: 0px; transform: translate3d(0px, 0px, 0px);">

					      <ul>
					        <li>
					          <img src="<?php echo $image['url']; ?>" alt="">
					          <div class="image-overlay">
					            <div class="links">
					              <a href="" class="link"><i class="icon-link icons"></i></a>
					              <a href="//cdn.shopify.com/s/files/1/1811/9571/files/g1_c30ad37b-28d3-4628-b2aa-c117f26a120a_1024x1024.jpg?v=1495723602" class="portfolio_zoom" rel="prettyPhoto[gallery1492760221298]"><i class="icon-magnifier icons"></i></a>
					            </div>
					            <div class="image-overlay-details">
					              <h4><a href=""><?php echo $title;  ?></a></h4>
					              <p>Cosmetic</p>
					            </div>
					          </div>
					        </li>
					        <li style="display:none"> <a href="#" class="portfolio_zoom" rel="prettyPhoto[gallery1492760221298]">
					          <img src="<?php echo $image['url']; ?>" alt="">
					          </a>
									</li>
					        <li style="display:none"> <a href="#" class="portfolio_zoom" rel="prettyPhoto[gallery1492760221298]">
					          <img src="<?php echo $image['url']; ?>" alt="">
					          </a></li>
					        <li style="display:none"> <a href="#" class="portfolio_zoom" rel="prettyPhoto[gallery1492760221298]">
					          <img src="<?php echo $image['url']; ?>" alt="">
					          </a></li>
					      </ul>
					    </div>

              <?php
							$transform = $transform+350;
     endwhile;
     //Reset Query
     wp_reset_query();
     ?>
          </div>
          <!--div class portfolio-container cs-style-3 isotope ends here-->

          <style>
            .filter-grid-type-3 .sorting-container a {
              border: 1px solid #f0efef;
            }

            .filter-grid-type-3 .sorting-container a:hover,
            .filter-grid-type-3 .sorting-container a.active-all {
              color: #ffffff !important;
              background: #c9a654;
              border: 1px solid #c9a654;
            }

            .filter-grid-type-3 .grid__item .image-overlay {
              background: rgba(0, 0, 0, 0.7);
            }

            .filter-grid-type-3 .grid__item:hover .image-overlay {
              opacity: 1;
            }

            .filter-grid-type-3 .grid__item .image-overlay .links a {
              border: 2px solid #ffffff;
              color: #ffffff;
            }

            .filter-grid-type-3 .grid__item .image-overlay .links a:hover {
              background: #ffffff;
              color: #000;
            }

            .filter-grid-type-3 .grid__item .image-overlay .image-overlay-details h4 a {
              color: #ffffff;
            }

            .filter-grid-type-3 .grid__item .image-overlay .image-overlay-details p {
              color: #ffffff;
            }
          </style>
          <div class="dt-sc-hr-invisible-large"></div>
        </div>
        <!--div 1492760189548 ends here-->
      </div>
      <!--div shopify-section-1492760189548 ends here-->


      <div id="shopify-section-1492425209887" class="shopify-section">
        <div data-section-id="1492425209887" data-section-type="blog-post-type-1" class="blog-post-type-1">
          <div class="container">
            <div class="blog-post">
              <div class="grid">
                <div class="home-blog blog-section owl-carousel owl-theme" style="opacity: 1; display: block;">
                </div>
                <script type="text/javascript">
                  $(document).ready(function() {
                    var article_count = $('.home-blog.blog-section .article-item').length;

                    if (article_count > 2) {
                      $('.nav_article').css('display', 'block');
                    } else {
                      $('.nav_article').css('display', 'none');
                    }
                    var article_item = $(".home-blog.blog-section");
                    article_item.owlCarousel({
                      items: 2,
                      itemsCustom: false,
                      itemsDesktop: [1199, 2],
                      itemsDesktopSmall: [980, 2],
                      itemsTablet: [630, 1],
                      itemsTabletSmall: false,
                      itemsMobile: [479, 1],
                      singleItem: false,
                      itemsScaleUp: false,
                      responsive: true,
                      responsiveRefreshRate: 200,
                      responsiveBaseWidth: window,
                      autoPlay: false,
                      stopOnHover: false,
                      navigation: false,
                      pagination: false
                    });
                    // Custom Navigation Events
                    $(".nav_article .next").click(function() {
                      article_item.trigger('owl.next');
                    })
                    $(".nav_article .prev").click(function() {
                      article_item.trigger('owl.prev');
                    })
                  });
                </script>
              </div>
              <style>
                .blog-post-type-1 .blog-detail h4 a:hover {
                  color: #c9a654 !important;
                }

                .blog-post-type-1 .blog-detail .blog-btn a:hover {
                  color: #000 !important;
                }

                .blog-post-type-1 .blog-detail .comments-count {
                  color: #000;
                }

                .blog-post-type-1 .comments-count:before {
                  background: #000;
                }
              </style>
            </div>
          </div>
        </div>
      </div>









		<div id="shopify-section-1492425293292" class="shopify-section index-section">
		  <div data-section-id="1492425293292" data-section-type="support-block-type-4" class="support-block-type-4">
		    <div class="grid-uniform">
		      <ul class="support_block" style="background:#f5f5f5">
		        <?php		 query_posts( array ( 'category_name' => 'footer', 'posts_per_page' => -1, 'order' => ASC  ) );
								 while ( have_posts() ) : the_post();
								 $id=get_the_id();
								 $title=get_the_title($id);
								 $icon=get_field("icon",$id);
								 $description=get_field("description",$id);
							?>
		          <li class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item wow fadeInUp animated" data-wow-delay="ms" style="visibility: visible;-webkit-animation-delay: ms; -moz-animation-delay: ms; animation-delay: ms;">
		            <div class="support_section">
		              <div class="support_icon">
		                <a href="#" class="support_section" style="color:#000;"><i class="zmdi zmdi-<?php echo $icon;?>"></i></a>
		              </div>
		              <div class="support_text">
		                <h6 style="color:#000;"><?php echo  $title;?></h6>
		                <p style="color:#000;" class="desc">
		                  <?php echo  $description;?>
		                </p>
		              </div>
		            </div>
		          </li>

		          <?php		 endwhile;		 // Reset Query		 wp_reset_query(); ?>
		      </ul>
		    </div>
		  </div>
		</div>



</main>

<!-- Main Area Start -->



  <script src="./js/timber.js" type="text/javascript"></script>
  <script src="./js/jquery.inview.js" type="text/javascript"></script>
  <script src="./js/theme.js" type="text/javascript"></script>
  <script src="./js/owl.carousel.min.js" type="text/javascript"></script>
  <script src="./js/jquery-ui-totop.js" type="text/javascript"></script>
  <!-- menu js -->
  <script src="./js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="./js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <!-- menu js-->
  <script src="./js/slider-init.js" type="text/javascript"></script>
  <script src="./js/countdown.js" type="text/javascript"></script>
  <script src="./js/jquery.elevatezoom.js" type="text/javascript"></script>
  <script src="./js/jquery.fancybox.js" type="text/javascript"></script>
  <!-- Begin quick-view-template -->
  <!-- End of quick-view-template -->
  <a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span><i class="fa fa-long-arrow-up"></i></a>

  <?php get_footer(); ?>
  </body>
  </html>
