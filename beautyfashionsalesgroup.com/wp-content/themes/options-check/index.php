<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
<div>

<?php	 get_header(); ?>

<main class="main-content">

  <nav class="breadcrumb" aria-label="breadcrumbs" style="background-color: #D3D3D3;">
    <h1><?php the_title(); ?></h1>
  </nav>

  <div class="grid__item">
    <div class="grid">
      <div class="grid__item">
        <div id="shopify-section-about" class="shopify-section">
          <div data-section-id="about" data-section-type="About section" class="about-us">
            <div class="grid-uniform block5">
              <div class="container">
                <div class="grid__item wide--one-half post-large--one-half large--one-half medium--one-half small-grid__item wow fadeInUp" data-wow-delay="ms">
                  <div class="content_block">

                    <div class="content_section">

                      <div class="support_text">
                        <div class="border-title">

												<?php while ( have_posts() ) : the_post(); ?>
                        	<?php the_content(); ?>
												<?php endwhile; ?>

                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>



          <style>
            .about-us .block5 {
              background-size: cover;
              background-repeat: no-repeat;
              background-image: url(//cdn.shopify.com/s/files/1/1811/9571/files/about-img.jpg?v=1495722666);
              float: left;
              width: 100%;
            }
          </style>










        </div>
      </div>
    </div>

  </div>


</main>
  <?php get_footer(); ?>
</div>
  </body>
  </html>
