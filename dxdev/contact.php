<?php
/**
Template Name: contact
 */
 include (TEMPLATEPATH . '/custom-header.php');
?>
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

				<li> <img src="<?php echo $banner; ?>" alt="banners"> </li>
<?php
	 } $i++; }?>

        <?php  	$address1 = of_get_option('address1');
				$faddress1 = explode("?",$address1);

				$address2 = of_get_option('address2');
				$faddress2 = explode("?",$address2);

				$address3 = of_get_option('address3');
				$faddress3 = explode("?",$address3);

			 $address1country =  explode(" ",$faddress1[0]);
			$address1countrys = count($address1country) - 1;
			$address2country =  explode(" ",$faddress2[0]);
			$address2countrys = count($address2country) - 1;

			$address3country =  explode(" ",$faddress3[0]);
			$address3countrys = count($address3country) - 1;

		   ?>

        </ul>
      </div>
    </section>
    <!--==============================content=================================-->
    <div id="second" class="contact-ser">
      <div class="container">
        <!-- contact form & map -->
        <div class="row">
          <div class="span12">


		       <div class="row">
          <div class="span12">
            <div>

             <h3 class="title"> <span>Contact Us</span> </h3>
              <div class="float-tab fright">
                <ul id="myTab">
				 <li  class=" active tb">
				 <a  data-toggle="tab" href="#1">
				 <i class="icon-home"></i>&nbsp;<?php echo $address1country[$address1countrys]; ?></a></li>

				 <li  class="tb">
				 <a  data-toggle="tab" href="#2">
				 <i class="icon-home"></i>&nbsp;<?php echo $address2country[$address2countrys]; ?></a></li>
				 <li  class="tb">
				 <a  data-toggle="tab" href="#3">
				 <i class="icon-home"></i>&nbsp;<?php echo $address3country[$address3countrys]; ?></a></li>
                </ul>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="tab-content bot-40 cont-load" id="myTabContent">
              <!-- 5 rows Price list -->

			<div class="camera_loaders" id="camera_loaders"></div>
			<div class="camera_loaderss" id="camera_loaderss"   rel="nofollow">Loading Location Map...</div>

			<div id="1" class="imap active ">

			    <div class="map">
					<?php   $faddress1[0] =  strip_tags($faddress1[0]);    ?>
			<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAhQ8owhQ1KU8TXVISHB4Umgh0JsiJdNM&q=<?php  echo $faddress1[0];   ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


			</div>

              </div>	<div id="2" class="imap">
		    <div class="map">
			<?php  $faddress2[0] =  strip_tags($faddress2[0]);  print_r($faddress2[0]);?>
				<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAhQ8owhQ1KU8TXVISHB4Umgh0JsiJdNM&q=<?php  echo $faddress2[0];   ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
			  <div id="3" class="imap">


			    <div class="map">
				<?php  $faddress3[0] =  strip_tags($faddress3[0]); ?>
         <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAhQ8owhQ1KU8TXVISHB4Umgh0JsiJdNM&q=<?php  echo $faddress3[0];   ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


              </div>

		     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<div class="cont-mare"><?php the_content(); ?></div>

<?php endwhile; // end of the loop. ?>

            </div>
          </div>
        </div>

          </div>

          <!-- Form -->

		      <div class="span3">
            <h3 class="title"> <span>Services</span> </h3>
        <address>
    <div class="span3 bot-30">

            <ul id="navigation">

				<?php
        $blogCategoryID = "23"; // current category ID
        $childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");
        if ($childCatID){
		$i=1;
            foreach ($childCatID as $kid)
            {
                $childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");
				$category_link = get_category_link( $childCatName->term_id );

			?>

			  <li><a href="<?php echo $category_link; ?>" target="_blank" ><?php echo $childCatName->name; ?></a>

			    <ul>
				<?php
					$cat_ID = $childCatName->term_id;
				$myposts = get_posts("numberposts=20&category=$cat_ID");
				foreach($myposts as $post) :

				?>



					<li><a href="<?php 	echo $permalink = get_permalink( $post->post_id ); ?>" target="_blank"><?php print_r($post->post_title); ?></a></li>


					  <?php  $i++; endforeach;?>

                 </ul>

			  </li>

           <?php
		   $i++;
            }
        }

    ?>

            </ul>
          </div>
</address>
          </div>










  <form action="<?php    bloginfo(template_directory);?>/code.php" method="post" class="form1" name="Form3"  id="Form3">
    <div class="span9" id="contactthanks" >
    <h3 class="title"> <span>Get In Touch</span> </h3>
    <!-- contact form -->
    <fieldset>
    <span class="name span3"> <input type="text" name="fname" value="" placeholder="Name:" id="Fname1" onkeypress="return validateFirstname(event)" class="contactfield" /> </span>
    <span class="email span3"><input type="text" value="" name="email" placeholder="Email:" id="Email1" class="contactfield" />	</span>
    <span class="phone span3"> <input onkeypress="return isNumberKey(event)" maxlength="10" type="text" value="" name="phone"  placeholder="Phone no:" id="Phoneno1" class="contactfield" >
    <input type="hidden" value="<?php echo $emails ;?>" name="onids"  id="onidss" class="contactfield" />
    <input type="hidden" value="<?php echo $emails ;?>" name="contact"  name="type" class="contactfield" />
    <input type="hidden" name="contactform"  value="singleinquire" />
    <input type="hidden" name="subject" id="subject" value="DesignersX Contact Us Page Submession" />
    <input type="hidden" id="loc1s" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />

    </span>
    <span class="message span9"><textarea name="Poverview" id="latter" class="contacttextarea"  placeholder="Message:" ></textarea> </span>
        <div class="clear"></div>
          <div id="recaptcha2" style="margin: 20px 30px;      float: left;"></div>
    <div class="clear"></div>
    <div class="name span3 footer-wid">

    </div>



    <div class="clear"></div>
    <div class="link-form span8" id="showbox">  <a class="btn-dark2 cont-subm"  data-type="submit" onclick="validateForm();">Submit</a> <div class="contacttext_f1 contact-lef">We will get back to you in 1 business day!</div></div>
    <div class="link-form span8 contact-opic" id="hidebox">  <a class="btn-dark2 contact-cur"  data-type="submit" onclick="return validateForm();">Submit</a> <div class="contacttext_f1 contact-wid"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div></div>
    </fieldset>
    <!-- end contact form -->
    </div>
  </form>







		     <div class="container">
        <div class="row">

		      <div class="span12 bot-40">

			   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"  ></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"  ></script>

			       <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade2').bjqs({

            width       : 1200,
            responsive  : true
          });

        });



      </script>



		   <div class="span12 contact-text-c">



			     <div id="banner-fade2" class="contact-aut">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">




<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php  $about_banners = get_post_custom_values('footer_banner');

foreach($about_banners  as $about_banner){
  ?>

  	<li>

	<?php
				  $fbanner= explode("," , $about_banner);
				  $fbanners= explode("^" , $about_banner);

			 if(!empty($fbanner[0]) && $fbanners[0] != "code"){

				  ?>

				<a href="<?php echo $fbanner[5]; ?>" id="callout"> <strong><?php echo $fbanner[3]; ?></strong> <span><?php echo $fbanner[4]; ?></span> </a>

			</li>
<?php  }else {
echo  $fbanners[1];

 } ?>

<?php
}
endwhile; // end of the loop. ?>

	  </ul>
        <!-- end Basic jQuery Slider -->

      </div>
		  </div>



		  </div>  </div>  </div>









        </div>
      </div>
    </div>
  </div>
  <div class="spacer-60"></div>


   </div>


    <script type="text/javascript">






function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

 function validateForm()
{


var fname = document.getElementById("Fname1").value;
var email = document.getElementById("Email1").value;
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var phone1 = document.getElementById("Phoneno1").value;
var latter = document.getElementById("latter").value;
var onids = document.getElementById("onidss").value;
var loc = document.getElementById("loc1s").value;
var captchaField12 = $("#captchaField").val();
var regs = /[a-zA-z]/;
fname = fname.trim(fname);
if(fname==null || fname=="" || fname=="Fname1")
 {
	alert('Please Enter Your First Name');

  return false;
  }else if(reg.test(email) == false)
{

      alert('Invalid Email Address');
      return false;
   }
else if(phone1.length >= 12  || phone1.length <= 9)
{

      alert('Invalid Phone No');
      return false;

}else{


		var formdata = $("#Form3").serializeArray();
		$.ajax({
			url: "<?php bloginfo('template_directory') ?>/code.php",
			type: "POST",
			data: formdata,
			dataType: "text",
			success: function(responce){

			$('#hidebox').hide();
			$('#showbox').show();
			$("#contactthanks").html('<div style="margin-top:100px;"><span style=" font-style: italic;font-weight: bolder;padding:10px 0;font-size:36px;">"Success !!! - Thanks for completing the form"</span><p style="font-size:14px;">Your form has been submitted successfully . Thanks you for your time & will get back to you in less than 24 hours.</p></div>');


		},
		error:function(){
			alert("Something Went Wrong :(");
		}
		});



}

}


 $(".imap").css('visibility', 'hidden');
setTimeout(
	function()
	{

		 $("#camera_loaders").css('display', 'none');
		  $("#camera_loaderss").css('display', 'none');
		 $(".imap").addClass("tab-pane fade in btb");
		  $(".imap").css('visibility', 'visible');
	}, 11000);





</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>

<?php get_footer();?>
