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
         			<?php while ( have_posts() ) : the_post(); ?>
			 <?php setPostViews(get_the_ID()); ?>
              <article class="post-holder">
                <div>
                  <div class="date"> <span class="day"> <?php the_time('j') ?></span> <span class="month"><?php the_time('F') ?></span> </div>
                  <h3 class="entry-title"><a href="#"><?php the_title(); ?></a></h3><?php //echo do_shortcode('[social_share/]'); ?>
                  <div class="post-meta">
                    <div class="fleft"><i class="icon-eye-open"></i> <a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <i class="icon-comments-alt"></i> <a href="#"> <?php comments_number( 'no responses', 'one response', '% ' ); ?> Comments</a>  <i class="icon-tag"></i>	<span class="tagss" ><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo ' <a href="#">' . $tag->name . '</a>  ';
  }
}
?></span> </div>
                  </div>
                  <!--.post-meta-->
                </div>
				<?php    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
              <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
if(!empty($url)){

?>

                <figure class="blogimg">
				<a class="prettyPhoto" href="<?php echo $url; ?>"><?php the_post_thumbnail(); ?>  </a>
				</figure>

				<?php } ?>
				<div class="contents" ><?php the_content(); ?></div>



				      <?php   $inclusion = get_post_custom_values('services_inclusion', $postid);

					 if(!empty($inclusion)){
					 ?>

					 <div id="inclusion1">
					 <ul id="formuli">
					 <?php
							echo "<h4>Services We Provide</h4>";
						if(count($inclusion) == 1){

						?>

					 <li><strong>	<?php  print_r($inclusion[0]); ?></strong> </li>

						<?php }else{

						foreach($inclusion as $incl){

						?>

						<div style="clear:both;"> <i class="icon-ok" style="color:#87D4F3;float:left;margin-top:5px;"></i><li style="float:left;">	&nbsp;<?php  print_r($incl); ?> </li></div>



					<?php

						} } ?>

						</ul>

						<br/>

			<div id="formdata">
			<span style="  font-style: italic;font-weight: bolder;padding:10px 0;font-family: 'Oswald',sans-serif;font-size: 22px;">Send Inquiry</span>
			<br/>
			<form id="form5" class="comment-form" method="post" action="http://www.designersx.com/wp-comments-post.php" style="margin:0px;width:80%;margin-top:10px;" name="form5" >
<p class="comment-form-author" style="width:100%;margin-right:3px;float:left;">
<input  type="text" aria-required="true" id="fnamenews" type="text" placeholder="Full Name" class="author" onfocus="hidehdr();" onblur="emails1new();showhdr();" name="fnamenew">
</p>
<p class="comment-form-email"  style="width:100%;margin-left:3px;float:left;">
<input id="emailss" type="text" aria-required="true" placeholder="Email Address" onkeydown="appearform(this.value);" onfocus="hidehdr();" onblur="showhdr();" name="email" autocomplete="off" class="author" >
</p>
<div style="clear:both;"></div>
<div id="hiddenform">
<p class="comment-form-email"  style="">
<textarea id="commentboxs" aria-required="true" rows="4" cols="45" id="Poverviews"   onfocus="hidehdr();" onblur="showhdr();" placeholder="Project Overview" name="Poverview" style="height:122px;" ></textarea>
</p>





	 <div class="name span3" style="margin-top:10px;width: 475px;">
		<div class="cleck_bgsd" >
		<div style="width:220px; margin-left: 8px;float:left;" >
	   	<img src="http://www.designersx.com/wp-content/themes/dxdev/captcha.php" id="captchaImage4" alt="captchaImagecaptchaImage"  /></div>
	<div class="" style="float:left; width: 245px;" >

<span  onclick="document.getElementById('captchaImage4').src='http://www.designersx.com/wp-content/themes/dxdev/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image4" style="cursor:pointer;font-size:11px; margin-left: 20px;">click if text not readable.</span><div class="clear"></div>
		<input type="hidden" name="validateror" value="false" id="validateror" />
<input type="text" name="captcha"  id="captchaFieldss" style="border: 1px solid rgb(233, 233, 233); height: 30px;margin-left: 20px; width: 100%;" placeholder="Enter Captcha" onfocus="hidehdr();" onblur="showhdr();" />
	<input type="hidden" name="onids" id="onids" value="<?php echo $emails; ?>" />
	<input type="hidden" id="loc12" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
<input  name="service"  value="<?php the_title(); ?>" id="services" type="text" style="display:none;"/>
		 </div>
	  </div>


	  </div>

</div>



<div id="show3" style="height:50px">
<span  class="btn-dark2" onclick="submitinqry();" style="cursor:pointer; font-size: 15px;font-weight: bold;float: left;padding: 4px 10px;" class="">
<span class="ions" style="cursor:pointer;  font-size: 15px;font-weight: bold;">
<i class="icon-ticket"> </i>
</span>
 Submit
</span><div class="contacttext_f1" style="margin: 18px 0px 0px 10px;width:55%;">We will get back to you in 1 business day!</div>
</div>

<div id="loader3" style="display:none;height:50px">
<span  class="btn-dark2" onclick="submitinqry();" style="cursor:pointer;  font-size: 15px;font-weight: bold;opacity: 0.45;float: left;padding: 4px 10px;" class="">
<span class="ions" style="cursor:pointer;  font-size: 15px;font-weight: bold;">
<i class="icon-ticket"> </i>
</span>
 Submit
</span>
	<div class="contacttext_f1" style="margin: 18px 0px 0px 10px;width:55%;"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
		</div>

</form>
</div>


							</div>

<?php

						}else{
					}



					  ?>






              </article>
			 <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
    <!--=======third=======-->
  </div>
  <div class="spacer-60"></div>
  <!--==============================footer=================================-->
<style>
div.mr_social_sharing_wrapper{
width:auto!important;
 float: right!important;
 margin: -40px 0!important;
}
.twitter-share-button{
float: left;

    margin-left: -70px;
    margin-top: -22px;
    position: absolute;


}
</style>

<script>
$('.contents a').addClass('prettyPhoto');
$("#change-image4").trigger("click");


function hidehdr(){

$("#nav-sticky-wrapper").hide();


}
function showhdr(){

$("#nav-sticky-wrapper").show();

}

function submitinqry(){

if(fphonenew() == false){
	alert("Please fill Full Name");
}else if(emails1new() == false){
	alert("Please fill Valid Email Address");
}else{

var str=document.getElementById("captchaFieldss").value;
if(str==""){

alert("please Fill captcha code");
		return false;
}else{
			$('#loader3').show();
			$('#show3').hide();
var xmlhttp;

	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){

	if (xmlhttp.readyState==4 && xmlhttp.status==200){
		if(xmlhttp.responseText=="ok"){


		var service = $('#services').val();
		var fnamenew = $('#fnamenews').val();
		var email = $('#emailss').val();
		var Poverview = $('#commentboxs').val();
		var onids = $('#onids').val();
			var loc1 = $('#loc12').val();
	    $.ajax({
        url: "http://www.designersx.com/wp-content/themes/dxdev/code.php?service="+service+"&fnamenew="+fnamenew+"&email="+email+"&Poverview="+Poverview+"&onids="+onids+"&location="+loc1+"",
        type: "get",
        dataType: "text",
        success: function(responce){
			$('#loader3').hide();
			$('#show3').show();
			$("#formdata").html('<span style=" font-style: italic;font-weight: bolder;padding:10px 0;font-size:22px;">"Success !!! - Thanks for completing the form"</span><p style="font-size:12px;font-weight: bold;">Your form has been submitted successfully . Thanks you for your time & will get back to you in less than 24 hours.</p>');


        },
        error:function(){
            alert("error creating option");

        }

    });



		}else{

			$('#loader3').hide();
			$('#show3').show();
			alert("please enter right captcha code");
			return false;

		}
		}
  }
	xmlhttp.open("GET","http://www.designersx.com/wp-content/themes/dxdev/form.php?q="+str,true);
	xmlhttp.send();
	return false;
	}
	}
  }


function emails1new(){

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["form5"]["emailss"].value;
if(reg.test(address) == false) {

      return false;
   }
else
  {
 return true;

  }

}


function fphonenew(){

var x=document.forms["form5"]["fnamenew"].value;
if (x==null || x=="")
 {

      return false;


  }else
  {

  }

}



</script>
<?php get_footer(); ?>
