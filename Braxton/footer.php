<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<!-- Footer Starts -->

<footer role="contentinfo">

    <div class="container-fluid page">
        <div class="row footer">
            <div class="col-md-3 col-lg-2 left hidden-xs hidden-sm">
                <ul>
                  <?php
                  $footer_menu_1=  wp_get_nav_menu_items('Footer Menu 1');
                  foreach ($footer_menu_1 as $value) {
                    ?>
                    <li><a href="<?php echo $value->url; ?>" aria-describedby="site_heading"><?php echo $value->post_title; ?></a></li>
                    <?php
                  }

                   ?>

                </ul>
            </div>

            <div class="col-md-2 col-lg-2 left hidden-xs hidden-sm">
                <ul>
                  <?php
                  $footer_menu_2=  wp_get_nav_menu_items('Footer Menu 2');
                  foreach ($footer_menu_2 as $value) {
                    ?>
                    <li><a href="<?php echo $value->url; ?>" aria-describedby="site_heading"><?php echo $value->post_title; ?></a></li>
                    <?php
                  }

                   ?>

                </ul>
            </div>

            <div class="col-sm-12 col-md-2 col-lg-4 shield">
                <a href="/" style="background-image: url('<?php echo of_get_option('footer_logo') ;?>')">The University of Chicago</a>
            </div>

            <div class="col-xs-6 col-md-2 col-lg-2 right phone">
                <ul>
                  <?php
                  $footer_menu_3=  wp_get_nav_menu_items('Footer Menu 3');
                  foreach ($footer_menu_3 as $value) {
                    ?>
                    <li><a href="<?php echo $value->url; ?>" aria-describedby="site_heading"><?php echo $value->post_title; ?></a></li>
                    <?php
                  }

                   ?>

                </ul>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2 right">
                <p class="vcard">
                    <?php echo of_get_option('address'); ?>
                    <a href="#" aria-describedby="site_heading">Contact Us</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul id="social">
                    <li><a href="<?php echo of_get_option('facebook_link');?>" title="Facebook" class="ss-social ss-icon">Facebook</a></li>
                    <li><a href="<?php echo of_get_option('twitter_link');?>" title="Twitter" class="ss-social ss-icon">Twitter</a></li>
                    <li><a href="<?php echo of_get_option('youtube_link');?>" title="YouTube" class="ss-social ss-icon">YouTube</a></li>
                    <li><a href="<?php echo of_get_option('apple_link');?>" title="iTunes U" class="ss-social ss-icon">Apple</a></li>
                    <li id="fut"><a href="<?php echo of_get_option('futurity_link');?>" title="Futurity">Futurity</a></li>
                    <li><a href="<?php echo of_get_option('instagram_link');?>" title="Instagram" class="ss-social ss-icon">Instagram</a></li>
                    <li id="yk"><a href="<?php echo of_get_option('youku_link');?>" title="Youku">Youku</a></li>
                </ul>
                <p class="copyright">&#169;2018 Braxton College</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    window.jQuery || document.write('<script src="/js/libs/jquery/3.3.1/jquery.min.js"><\/script><script src="/js/libs/jqueryui/1.12.1/jquery-ui.min.js"><\/script>');
</script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/core.min.js"></script>
<!--[if lte IE 7]><script src="/js/ie_fixes/update_png.js"></script><script src="/js/libs/respond.min.js"></script><![endif]-->
<!--[if lte IE 8]><script src="/js/libs/selectivizr.js"></script><![endif]-->
<!--[if lte IE 9]><script src="/js/ie_fixes/symbolset.js"></script><![endif]-->
<!-- Google Analytics -->
<?php wp_footer(); ?>
</body>
</html>
