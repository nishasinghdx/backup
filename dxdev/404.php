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
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
				<h3 class="title">
					<span>  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();  ?></a></span>
				</h3>
				<?php the_content(); ?>	
				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
					<img src="<?php bloginfo('template_directory'); ?>/img/404.png" />
					</header><!-- .entry-header -->

				 
				</article><!-- #post-0 -->

			<?php endif; ?>

			  
			  
			  
              <div class="clear"></div>
             
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

         
            </div>
          </article>
		  
		  
		
		  
		  
		  
		  
		  <article class="span4 fright">
		    <form class="searchform" method="get" action=".">
                 <div class="clearfix">
                <input type="text" onFocus="if(this.value =='' ) this.value=''" onBlur="if(this.value=='') this.value=''" name="s">
                <a class="btn" onClick="document.getElementById('form-search').submit()" href="#" style="margin-top: -12px;">Search</a> </div>
                </form>
				
				<div style="clear:both;"> </div>
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