<?php
/**

Template Name: Mobile App

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>


    <!--==============================content=================================-->
    <!-- Slider -->
  
    <?php   $about_banner = get_post_custom_values('banners');   
		$txtbanners = explode(",", $about_banner[0]);
		
		?>

    <!--==============================content=================================-->
    <!-- Slider -->
  <section class="fx-slider">
      <div class="fx-caption"> <span class="camera-caption1"> <?php echo $txtbanners[0];  ?></span><br>
        <span class="camera-caption2"> <?php echo $txtbanners[1];  ?></span> </div>
      <div class="flexslider">
        <ul class="slides">
		


	<?php
		$i = 1;
		foreach($txtbanners as $banner){ 
		if($i > 2 ){
		
		?>
				
				<li> <img src="<?php echo $banner; ?>" alt=""> </li>
<?php	
	 } $i++; }?>
          
         
		 
        </ul>
      </div>
    </section>
    <!--=======second=======-->
    <div id="second">
      <div class="container">
        <!-- who we are -->
        <div class="row">
          <article class="span8">
            <div class="post-border-right">
			
			
			
				<?php
		
global $post;
$cats=array();
foreach(get_the_category() as $category) {
    $cats[]=$category->cat_ID;
}

$childcats= get_categories('child_of=25');
foreach ($childcats as $childcat){
$cats[]=$childcat->term_id;

}
foreach($cats as $cat)
{

$postsInCat = get_term_by('id',$cat,'category');
$tposts = $postsInCat->count;
$jposts= $jposts+$postsInCat->count;
}

$showposts = -1; // -1 shows all posts
$do_not_show_stickies = 1; // 0 to show stickies
$listposts=5;
$pagecount=$jposts/$listposts;
if(isset($_GET['pg']))
{
	$paged = $_GET['pg'];
}	
else
{
	$paged=1;
}
$args=array(
   'category__in' => $cats,  
   'posts_per_page' => $listposts,
   'total' => $pagecount,
   'offset' => 0,
    'paged' => $paged,
   'caller_get_posts' => $do_not_show_stickies
   );
   
$my_query = new WP_Query($args);

 if( $my_query->have_posts() ) : ?>
 
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php
            //necessary to show the tags
            global $wp_query;
            $wp_query->in_the_loop = true;
            ?>
   
		
      <?php   
	
					global $post;
				  $post_id =$post->ID;
				//  echo $thePostid;
				
	    $imageArray = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_name' );
    $imageURL = $imageArray[0]; // here's the image url
	 
	 ?>
	

	
			
			
              <article class="post-holder">
                <div>
                  <div class="date"> <span class="day"> <?php the_time('j') ?></span> <span class="month"><?php the_time('F') ?></span> </div>
      <h3 class="entry-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	 <?php echo do_shortcode('[social_share/]'); ?> 
                  <div class="post-meta">
                    <div class="fleft"><i class="icon-user"></i>  <i class="icon-eye-open"></i> <a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <i class="icon-comments-alt"></i> <a href="#"> <?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?> </a> <i class="icon-tag"></i>

<span class="tagss" ><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo ' <a href="http://www.designersx.com/?s=' . str_replace(' ', '%20', $tag->name). '">'. $tag->name . '</a>  '; 
  }
}
?></span> 					</div>
                  </div>
                  <!--.post-meta-->
                </div>
				
<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
if(!empty($url)){

?>
				
                <figure class="blogimg"> 
				<a class="prettyPhoto" href="<?php echo $url; ?>"><?php the_post_thumbnail('large' , array('alt' => ''.get_the_title().'')); ?>  </a>
				</figure>
				
				<?php } ?>
				
				
				
				
                <p> <?php echo wp_trim_words( get_the_content(), 45 ); ?></p>
                <a class="btn-dark2" href="<?php the_permalink() ?>">Continue Reading</a>
              
              </article>
              <div class="clear"></div>
          
			 
		 <?php endwhile; ?>
 
     
	 
	 
	<div class="clear"></div>		  
			  
<div class="pagination fright">
<ul>



 
	<?php	 	 	 	 
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/blog/";  
	if($_GET['pg']>1)
	{
	?>
	<li>
<a href="<?php $prv = $_GET['pg']-1;  echo $url.'?pg='.$prv; ?>">&laquo;</a>
</li>
	
	<?php	 	 	 	  
	}

	$lastpage=0;
for($i=1;$i<$pagecount+1;$i++)
{
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/blog/"; 
if($i == $_GET['pg']){
echo '<li class="disabled"><a href="'.$url.'?pg='.$i.'"   >'.$i.'</a></li>';
}else{
echo '<li><a href="'.$url.'?pg='.$i.'"  >'.$i.'</a></li>';
}
$lastpage++;

}


//echo $_SERVER['PHP_SELF']; 
?>
<?php	 	 	 	 
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/blog/";  

	if($_GET['pg']<$lastpage)
	{
	?>
	<li>
<a href="<?php $nxt = $_GET['pg']+1;  echo $url.'?pg='.$nxt; ?>">&raquo;</a>
</li>

<?php	 	 	 	 
}
?>
	</ul>
</div>
	 
	 
	 
	 
	 
	 
    <?php endif; ?>
   
			  


			  
             
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

</div>
 
<?php 
include (TEMPLATEPATH . '/MobileaApp-footer.php');
?>

