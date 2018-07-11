<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

 include (TEMPLATEPATH . '/custom-header.php'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/forms.css" type="text/css" media="screen">








    <div id="second">
      <div class="container">
        <!-- who we are -->
        <div class="row">
          <article class="span8">
            <div class="post-border-right">
			
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Tag Archives: %s', 'twentyeleven' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>

				
					<?php
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
					?>
				</header>

			

				

			
				<?php while ( have_posts() ) : the_post(); ?>
				<h3 class="entry-title">
<a title="" href=""><?php
						the_title();
					?></a>
</h3>	
					<?php
						the_content();
					?>

				<?php endwhile; ?>

			

			<?php else : ?>

			
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

				
			<?php endif; ?>
			  
			  
			  
              <div class="clear"></div>
             
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

         
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



<?php get_footer(); ?>