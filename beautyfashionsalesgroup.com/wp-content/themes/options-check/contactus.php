<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
<div>

<?php
/* Template Name: Contact Us */
 get_header(); ?>
<!-- Slider Area Start -->

<!-- <style media="screen">
.wpcf7-form-control
{
    color: black!important;
    background-color: white!important;
}
label{
  text-align: left;
  font-size: large;
}
.wpcf7 input[type="submit"]{
  background-color: #c9a654!important;
}
</style> -->


<main class="main-content">



<nav class="breadcrumb" aria-label="breadcrumbs">
<h1><?php the_title(); ?></h1>
</nav>



<div class="contact-address">
  <div class="dt-sc-hr-invisible-large"></div>
  <div class="grid__item">
    <div class="contact_map_section">
      <div class="grid__item wide--one-half post-large--one-half large--one-half medium--grid__item small-grid__item">
        <div class="grid__item">
          <div class="contact-form-section">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="grid__item wide--one-half post-large--one-half large--one-half medium--grid__item small-grid__item">

        <!-- <div id="map"><iframe width="960" height="578" style="border:0;overflow:hidden;" src="https://maps.google.co.in/?ie=UTF8&amp;t=m&amp;ll=-37.823006,144.977388&amp;spn=0.02034,0.042915&amp;z=14&amp;output=embed"></iframe> </div>
      </div> -->

<div id="map"><iframe width="960" height="578" style="border:0;overflow:hidden;" src=<?php echo of_get_option( 'map_textarea' );?>></iframe> </div>
</div>

    </div>
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="grid__item">
      <div class="container">

        <ul>

          <li class="grid__item wide--one-quarter post-large--one-quarter large--one-quarter">
            <div class="icon-wrapper">
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <h4>Talk to us</h4>
              <p>  <b>Toll-Free: </b><?php echo of_get_option( 'phone_text' );?></p><mark></mark>
            </br>
            </div>
          </li>


          <li class="hours grid__item wide--one-quarter post-large--one-quarter large--one-quarter">
            <div class="icon-wrapper">
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <h4>Contact Us</h4>
              <p style="word-wrap: break-word;"><?php echo of_get_option('email_textarea'); ?></p>
            </div>
          </li>


          <li class="address grid__item wide--one-quarter post-large--one-quarter large--one-quarter">
            <div class="icon-wrapper">
              <div class="icon">
                <i class="fa fa-location-arrow"></i>
              </div>
              <h4>Location</h4>
              <p><?php echo of_get_option('address_textarea'); ?></p><mark></mark>
            </div>
          </li>


          <li class="hours grid__item wide--one-quarter post-large--one-quarter large--one-quarter">
            <div class="icon-wrapper">
              <div class="icon">
                <i class="fa fa-clock-o"></i>
              </div>
              <h4>Opening Hours</h4>
              <p><?php echo of_get_option('openinghours_textarea'); ?></p>
            </div>
          </li>

        </ul>
      </div>
    </div>

  </div>
  <div class="dt-sc-hr-invisible-large"></div>
  <div class="dt-sc-hr-invisible-large"></div>
</div>

</main>
<?php get_footer(); ?>
</div>
  </body>
  </html>
<style>
#wpforms-form-428{

  text-align: left;
    color: #000000;
    margin-left: 50px;margin-top: 80px;
}

#wpforms-form-428 input{

  background: transparent!important;
    color: #000000!important;
}

#wpforms-form-428 textarea{

  background: transparent!important;
    color: #000000!important;
}
.wpforms-submit {
  background: #c9a654;
  color: #fff;
}
</style>
