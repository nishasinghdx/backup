<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

 include (TEMPLATEPATH . '/custom-header.php'); ?>



    <div id="second">
      <div class="container">
        <!-- who we are -->
        <div class="row">
          <article class="span8" style="min-height: 681px;">
            <div class="post-border-right">

			<?php while ( have_posts() ) : the_post(); ?>
			 <?php setPostViews(get_the_ID()); ?>

              <article class="post-holder">
                <div>
                  <div class="date"> <span class="day"> <?php the_time('j') ?></span> <span class="month"><?php the_time('F') ?></span> </div>
                  <h3 class="entry-title"><a href="#"><?php the_title(); ?></a></h3>
                  <div class="post-meta">
                    <div class="fleft">
<i class="icon-eye-open"></i>
<a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <i class="icon-comments-alt"></i>
<a href="#"> <?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?></a>


<!-- Social Share -->
<i class="fa fa-facebook" aria-hidden="true" style="color:#4267b2;"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" class="iconfb customer share">&nbsp;&nbsp;Facebook share</a></i>
<i class="fa fa-twitter" aria-hidden="true" style="color:#1b95e0;"><a  href="https://twitter.com/share?url=<?php the_permalink() ?>&amp;text=<?php the_title(); ?> &amp;hashtags=Designersx" class="iconfb customer share">&nbsp;&nbsp;Tweet</a></i>

 <i class="icon-tag"></i>

	<span class="tagss" ><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo ' <a href="http://www.designersx.com/?s='  . str_replace(' ', '%20', $tag->name). '">' . $tag->name . '</a>  ';
  }
}
?></span> 	 </div>
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
				 <div class="clearfix"></div> <br/>
					 <div id="inclusion1">
					 <h4>Services We Provide</h4>
					 <ul id="formuli">
					 <?php

						if(count($inclusion) == 1){

						?>

					 <li><strong>	<?php  print_r($inclusion[0]); ?></strong> </li>

						<?php }else{

						foreach($inclusion as $incl){

						?>

						 <li style="float:left;width:90%"><i  class="icon-ok" style="color:#87D4F3;float:left;margin-top:5px;width:8%"></i>	&nbsp;<?php  print_r($incl); ?> </li>



					<?php

						} } ?>

						</ul>
						</div>

						 <div id="inclusion2">


					<?php  $user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );
				$i=1;
			 foreach($user_query->results as $email){
					if($i == 1){
						$emails = $email->user_email;
					}else{
						$emails = $emails.','.$email->user_email;
					}
				$i++;
				}

	 ?>

						<div id="cbp-qtrotator" class="cbp-qtrotator">
<img class="testi-icon" alt="" src="http://www.designersx.com/wp-content/themes/dxdev/images/fon2-before1.png" style=" left: -9px!important;">
<div class="cbp-qtcontent cbp-qtcurrent" style="transition: opacity 700ms ease 0s;">

<div class="testi-text" style="margin:0px;width: 90%;padding:10px;background: none repeat scroll 0 0 #e6f5fb;">
<div id="formdata" >
<span style="  font-style: italic;font-weight: bolder;padding:10px 0;font-size: 20px;">Send Inquiry for your project</span>

			<form id="form5" class="comment-form" method="post" action="http://www.designersx.com/wp-comments-post.php" style="margin:0px;" name="form5" >
<p class="comment-form-author" style="width:47%;margin-right:3px;float:left;">
<input  type="text" aria-required="true" id="fnamenews"  placeholder="Full Name" class="author" onblur="emails1new()" name="fnamenews">
</p>
<p class="comment-form-email"  style="width:47%;margin-left:3px;float:left;">
<input id="emailss" type="text" aria-required="true" placeholder="Email Address" onkeydown="appearform(this.value)" name="email" autocomplete="off" class="author" >
</p>
<div style="clear:both;"></div>
<!--<div id="hiddenform">-->
<p class="comment-form-email"  style="">
<textarea   aria-required="true" rows="3" cols="45" id="commentboxs"  placeholder="Project Overview" name="Poverview" style="height:100px;width:95%;"></textarea>
</p>



<div class="name span3 popup-marwidth">
	<div id="recaptcha2"></div>
</div>
<div id="show3" style="height:50px">
<div style="float: left;">
<div  class="btn-dark2"  onclick="submitinqry();" style="cursor:pointer; font-size: 15px;font-weight: bold;padding: 4px 10px;" >
<span class="ions" style="cursor:pointer;  font-size: 15px;font-weight: bold;">
<i class="icon-ticket"> </i>
</span>&nbsp;
 Submit
</div></div>
<div class="contacttext_f1" style="float: left;padding: 4px 10px;width:55%;margin:0px;">We will get back to you in 1 business day!</div>
</div>

<div id="loader3" style="display:none;height:50px">
<div style="float: left;">
<div  class="btn-dark2"  style="opacity: 0.45;cursor:pointer; font-size: 15px;font-weight: bold;padding: 4px 10px;" >
<span class="ions" style="cursor:pointer;  font-size: 15px;font-weight: bold;">
<i class="icon-ticket"> </i>

</span>
 Submit&nbsp;
</div></div>
	<div class="contacttext_f1" style="float: left;padding: 15px 0px;width:55%;margin:0px;"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
		</div>

</form>
</div>
</div>
</div></div>


							</div>

<?php

						}else{
					}



					  ?>






              </article>


			 <div class="clearfix"></div>


			  	<?php comments_template( '', true ); ?>

              <div class="clear"></div>


            </div>
          </article>


		 <?php endwhile; // end of the loop. ?>

		  <article class="span4 fright">

		  <?php get_sidebar(); ?>


          </article>
        </div>
      </div>
    </div>
    <!--=======third=======-->
  </div>  </div>
  <div class="spacer-60"></div>
  <!--==============================footer=================================-->





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









<script>

$("#change-image4").trigger("click");

function appearform(val){
if (val.indexOf("@") >= 0){
$("#hiddenform").show(200);
$("#inclusion2").css("height","500px");

}else{
$("#hiddenform").hide(200);
$("#inclusion2").css("height","auto");
}
}



function submitinqry(){

  var name = document.getElementById("fnamenews").value;

  name =name.trim();
  if(name == null||name ==""){
    alert('Please enter your full name');
  }
if(fphonenews() == false){
		alert('Please enter your full name');
}else if(emails1news() == false){
	alert("Please fill Valid Email Address");
}else{

var str = grecaptcha.getResponse(recaptcha2);
if(str==""){

alert("Please make sure to validate Humanity");
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
		//if(xmlhttp.responseText=="ok"){


		var service = $('#services').val();
		var fnamenew = $('#fnamenews').val();
		var email = $('#emailss').val();
		var Poverview = $('#commentboxs').val();
		var onids = $('#onidss').val();
		var loc1 = $('#loc12').val();

	    $.ajax({
        url: "http://www.designersx.com/wp-content/themes/dxdev/code.php",
        type: "post",
        dataType: "text",
        success: function(responce){

			$('#loader3').hide();
			$('#show3').show();
			$("#formdata").html('<span style=" font-style: italic;font-weight: bolder;padding:10px 0;">"Success !!! - Thanks for completing the form"</span><p style="font-size:14px;">Your form has been submitted successfully . Thanks you for your time & we will get back to you in less than 24 hours.</p>');

            setTimeout(function(){ $('#cbp-qtrotator').hide();
       }, 5000);
        },
        error:function(){
            alert("error creating option");

        }

    });



		//}else{

			//$('#loader3').hide();
			//$('#show3').show();
			//		alert("Please enter correct captcha code ");
			//return false;

		//}
		}
  }
	xmlhttp.open("GET","<?php bloginfo(template_directory) ?>/form.php?q="+str,true);
	xmlhttp.send();
	return false;
	}
	}
  }


function emails1news(){

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


function fphonenews(){

var x=document.forms["form5"]["fnamenews"].value;
if (x==null || x=="")
 {

      return false;


  }else
  {

  }

}

$('.advrt').removeClass('prettyPhoto');

</script>
<?php get_footer(); ?>
