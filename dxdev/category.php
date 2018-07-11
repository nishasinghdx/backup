<?php
/**

Template Name: blog

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


function is_subcategory (){
    $cat = get_query_var('cat');
    $category = get_category($cat);
    $category->parent;
    return ( $category->parent == '0' ) ? false : true;
}






global $post;
$cats=array();
foreach(get_the_category() as $category) {
    $cats[]=$category->parent;
}


if($category->parent != 0 && is_subcategory() != 1 ){

$childcats= get_categories('child_of='.$category->parent);
foreach ($childcats as $childcat){
$cats[]=$childcat->term_id;

}
$yourcat = get_category($cats[0]);
foreach($cats as $cat)
{
	$postsInCat = get_term_by('id',$cat,'category');
	$tposts = $postsInCat->count;
	$jposts= $jposts+$postsInCat->count;
}

}else{

$cats=$category->term_id;
$postsInCat = get_term_by('id',$cats,'category');
$jposts = $postsInCat->count;
$yourcat = get_category($category->term_id);
}






$args=array(
   'category__in' => $cats,
   'posts_per_page' => $listposts,
   'offset' => 0,
   'caller_get_posts' => $do_not_show_stickies
   );

$my_query = new WP_Query($args);

 if( $my_query->have_posts() ) : ?>

        <?php
		$postcount = 0;
		while ($my_query->have_posts()) : $my_query->the_post();


$postcount++;
 endwhile;
endif;



$catname= $yourcat->name;

$showposts = -1; // -1 shows all posts
$do_not_show_stickies = 1; // 0 to show stickies
$listposts=5;

$pagecount=$postcount/$listposts;
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
					<div class="post-meta">
						<div class="fleft"><i class="icon-user"></i>  <i class="icon-eye-open"></i> <a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <i class="icon-comments-alt"></i> <a href="#"> <?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?> </a>

						<!-- Social Share -->
						<i class="fa fa-facebook" aria-hidden="true" style="color:#4267b2;"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" class="iconfb customer share">&nbsp;&nbsp;Facebook share</a></i>
						<i class="fa fa-twitter" aria-hidden="true" style="color:#1b95e0;"><a  href="https://twitter.com/share?url=<?php the_permalink() ?>&amp;text=<?php the_title(); ?> &amp;hashtags=Designersx" class="iconfb customer share">&nbsp;&nbsp;Tweet</a></i>

							<span class="tagss" ><?php
							$posttags = get_the_tags();
							if ($posttags) {
							foreach($posttags as $tag) {
							echo ' <a href="http://www.designersx.com/?s=' . $tag->name . '">' . $tag->name . '</a>  ';
							}
							}
							?></span>
						</div>
					</div>
					<!--.post-meta-->
				</div>

<?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
if(!empty($url)){

?>

                <figure class="blogimg">
				<a class="prettyPhoto" href="<?php echo $url; ?>"><?php the_post_thumbnail(); ?>  </a>
				</figure>

				<?php } ?>

                <p> <?php echo wp_trim_words( get_the_content(), 45 ); ?></p>
                <a class="btn-dark2" href="<?php the_permalink() ?>">Continue Reading</a>

              </article>
              <div class="clear"></div>


		 <?php endwhile; ?>
	<div class="clear"></div>
<!--<div class="pagination fright">
<ul>
	<?php
	if($postcount > 5){
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/category/".$catname."/";
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
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/category/".$catname."/";
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
$url=(!empty($_SERVER['HTTPS'])) ? "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/category/".$catname."/";

	if($_GET['pg']<$lastpage)
	{
	?>
	<li>
<a href="<?php $nxt = $_GET['pg']+1;  echo $url.'?pg='.$nxt; ?>">&raquo;</a>
</li>

<?php
}
}

?>
	</ul>
</div>-->



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





<script type="application/javascript">
	;(function($){
		$.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
		// Prevent default anchor event
		e.preventDefault();
		// Set values for window
		intWidth = intWidth || '500';
		intHeight = intHeight || '400';
		strResize = (blnResize ? 'yes' : 'no');
		// Set title and open popup with focus on it
		var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
			strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,
			objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
		}
		/* ================================================== */
		  $(document).ready(function ($) {
			$('.customer.share').on("click", function(e) {
			  $(this).customerPopup(e);
			});
		  });
	}(jQuery));
</script>
<?php get_footer();?>
