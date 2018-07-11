<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

 include (TEMPLATEPATH . '/custom-header.php'); ?>

	   <!--=======second=======-->
    <div id="second">
      <div class="container">
        <!-- who we are -->
        <div class="row">
          <article class="span8">
            <div class="post-border-right">
              <article class="post-holder">
                <h3 class="title"> <span><?php the_title(); ?></span> </h3>
            <div>

<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>





			</div>
              </article>
              <div class="clear"></div>
            </div>
          </article>
          <article class="span4 fright">
            <div class="inner-block ident-left-1">
             <?php get_sidebar(); ?>
            </div>
          </article>
        </div>
      </div>
    </div>
<?php get_footer(); ?>