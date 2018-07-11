<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


    <div id="second">
      <div class="container">
        <div class="row">
          <ul class="thumbnails">

		   <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col" style="height:auto;"> <i class="icon-3x icon-troph"><i class="circle-border"></i></i>
              <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo $title11 ; ?>');">  <h3><?php echo $title1 = of_get_option('title1'); ?></h3>
               </a> <p><?php echo $desc1 = of_get_option('desc1'); ?>
	  <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo $title11 ; ?>');"> read more -</a></p>
              </div>
            </li>
             <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col" style="height:auto;"> <i class="icon-3x icon-cogd"><i class="circle-border"></i></i>
				  <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title21 ; ?>');"> <h3><?php echo $title2 = of_get_option('title2'); ?></h3></a>
                <p><?php echo $desc2 = of_get_option('desc2'); ?> <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title21 ; ?>');">read more -</a></p>
              </div>
            </li>
           <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col" style="height:auto;"> <i class="icon-3x fa-users"><i class="circle-border"></i></i>
               <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title31 ; ?>');"> <h3><?php echo $title3 = of_get_option('title3'); ?></h3></a>
                <p><?php echo $desc3 = of_get_option('desc3'); ?>  <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title31 ; ?>');">read more -</a></p>
              </div>
            </li>
            <li class="span3 thumbnail">
              <div class="block-thumbnail maxheight col" style="height:auto;"> <i class="icon-3x icon-beake"><i class="circle-border"></i></i>
        <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title41 ; ?>');"><h3><?php echo $title4 = of_get_option('title4'); ?></h3></a>
                <p><?php echo $desc4 = of_get_option('desc4'); ?>  <a onclick="targetblnk('http://designersx.com/site4/?page_id=13&amp;category=<?php   echo  $title41 ; ?>');">read more -</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--=======third=======-->








    <div id="third">
      <div class="container">
        <div class="row">


          <div class="span3">
            <h3>Recent Work</h3>
            <p>
			<?php $category_id = get_cat_ID( "Recent Work" ); ?>

			<?php echo category_description( $category_id ); ?>




			</p><?php  $recent = of_get_option('rurl');
				$recent = explode("," , $recent);
			?>


			<section class="fx-slider1" style="text-align:center;">
		 <?php query_posts('category_name=Recent Work&showposts=12'); ?>
     <?php while (have_posts()) : the_post(); ?>



		 <a onclick="targetblnk('<?php the_permalink() ?>');" title="Permanent Link to <?php the_title_attribute(); ?>">
		<span class="camera-caption1" > <?php the_title(); ?></span></a>


		 <?php endwhile; ?>

		   <a onclick="targetblnk('<?php echo $recent[1]; ?>');" class="btn-dark2"  >
		  <?php echo $recent[0]; ?></a>
		</section>


            <div class="clearfix"></div>
          </div>



        </div>
      </div>
    </div>


  </div>
<style>
.fb_iframe_widget iframe{
position:relative!important;
}

 .twitter-share-button {
	display:none;

}
.mr_social_sharing span{
overflow:visible!important;
height:auto!important;

}


.pluginCountBox{
display:none!important;
}
</style>

<?php get_footer(); ?>
