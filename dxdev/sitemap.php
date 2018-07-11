<?php
/**

Template Name: sitemap

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>

    <section class="fx-slider">
      <div class="fx-caption"> <span class="camera-caption1">Site Map</span><br>
        <span class="camera-caption2"> components, javascript plugins! </span> </div>
       <div class="flexslider">
        <ul class="slides">
		<?php   $sitemap_banner = get_post_custom_values('sitemap_banner');     foreach($sitemap_banner as $banner){?>
				<li> <img src="<?php echo $banner; ?>" alt=""> </li>
<?php		  }?>
          
         
		 
        </ul>
      </div>
    </section>
    <!--=======second=======-->
    <div id="second">
      <div class="container">
        <!-- Sitemap -->
        <div class="row">
       
          <div class="span3 bot-30">
            <h3 class="title"> <span>Sitemap</span> </h3>
   <div id="treecontrol"> <a title="Collapse the entire tree below" href="#">
   <img src="<?php bloginfo(template_directory) ?>/img/icons/minus.gif" alt=""> Collapse All</a> <a title="Expand the entire tree below" href="#"><img src="<?php bloginfo(template_directory) ?>/img/icons/plus.gif" alt=""> Expand All</a> <a title="Toggle the tree below, opening closed branches, closing open branches" href="#">Toggle All</a> </div>
           
            <ul id="gray" class="treeview-gray">
			
			
			
			 <?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => '',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
			
			
			
			
          </div>
          <div class="span12 bot-40"> <a id="callout" href="#"> <strong>Found out why everyone is talking about the <span>Foscor Theme</span></strong> <span>Signup Today!</span> </a> </div>
        </div>
      </div>
    </div>
    <!--=======third=======-->
  </div>
  <div class="spacer-60"></div>
  </div>
<?php get_footer();?>
</body>
</html>

 