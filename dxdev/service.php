<?php
/**

Template Name: services

 **/
 include (TEMPLATEPATH . '/custom-header.php');
?>


<script type="text/javascript">

var onloadCallback = function() {
  grecaptcha.render('html_element', {
    'sitekey' : '6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5'
  });
};



function submitinqry(){

 //console.log('clicked');
var response2 = grecaptcha.getResponse(recaptcha2);
//console.log('response2');
//console.log(response2);
var y = document.getElementById("fnamenew").value;
var emaily = document.getElementById("email").value;
emaily =emaily.trim();
console.log(y);
y =y.trim();
console.log(y);
/*if(fphonenew() == false){
	alert('Please enter your full name');
}else if(emails1new() == false){
	alert("Please fill Valid Email Address");
}else if(response2.length ==  0){*/
if(y == null || y == ""){
	alert('Please enter your full name');
}else if(emaily == null || emaily == ""){
	alert("Please fill Valid Email Address");
}else if(fphonenew() == false){
	alert("Please fill Valid Email Address");
}else if(response2.length ==  0){
	alert("Please make sure to validate Humanity");
}else{
		$('#loader2').show();
		$('#show2').hide();
		var formdata = $("#enqueryForm1").serializeArray();
    //return false;
		$.ajax({
			url: "<?php bloginfo('template_directory') ?>/code.php",
			type: "POST",
			data: formdata,
			dataType: "text",
			success: function(response){
        //console.log(response);
				/*$('#loader2').hide();
				$('#show2').show();
				$("#contact_formnew").hide();
				$("#contact_form1new").hide();

        */
        document.getElementById("successmessagebox").innerHTML = "Thank You ! Message has been is sent!";

         $('#show2').show();
         $('#loader2').hide();
        setTimeout(function(){
                  $('#show2').show();
                  $("#contact_formnew").hide();
                  $("#contact_form1new").hide();

                    document.getElementById("successmessagebox").innerHTML="We will get back to you in 1 business day !";

               }, 3000);


		},
		error:function(){
			alert("Something Went Wrong :(");
		}
		});
	}
}



$(window).resize(function() {

  $("#contact_form1new").css("margin-left", ($(window).width() - 350)/2);

});

function get_contact_formnew(service){

			document.getElementById("service").value=service;
			document.getElementById("contact_formnew").style.display="block";
			document.getElementById("contact_form1new").style.display="block";
			var windowWidth = $(window).width();
			$("#contact_form1new").css("margin-left", ($(window).width() - 350)/2);

			document.forms["Form2"]["fnamenew"].value = "";
			document.forms["Form2"]["email"].value = "";
				$(".valid").hide();



 $('#fnamenew').val("");
 $('#email').val("");
 $('#Poverview').val("");
 $('#captchaField2').val("");


	setTimeout(
	function()
	{
		$("#change-image2").trigger("click");
		$("#fnamenew").focus();

	}, 1000);


			}

			function close_formnew(){


		 if (confirm("Are You Sure You Want To Close???"))
		{ 	document.getElementById("contact_formnew").style.display="none";
			document.getElementById("contact_form1new").style.display="none";

		}else{




		}



			}
</script>


<script>
	.cus{
		cursor:pointer;
	}

	.ab{
		height: 142px;
	}

	.bc{
		width:100%
	}

	.ro{
		text-align:center;
		border-top: 1px solid rgb(239, 239, 239);
		padding-top:20px;
	}

	.au{
		margin:auto;
	}
</script>
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



        </ul>
      </div>
    </section>
    <!--=======second=======-->




    <div id="second">
      <div class="container">
        <!-- Price -->
        <div class="row">
          <div class="span12">
            <div>




              <h3 class="title"> <span>Services</span> </h3>
              <div class="float-tab fright">
                <ul id="myTab">

					<?php
						$blogCategoryID = "23"; // current category ID
						$childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");
						if ($childCatID){
						$i=1;
							foreach ($childCatID as $kid)
							{
								$childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");
								$catname =explode(",", $childCatName->name);
								$catfst = explode(" ", $childCatName->name);
								if($i == 1){
								?>
									<li  class="<?php echo  $catfst[0]; ?> active tb">
								<?php }else{ ?>
									<li class="<?php echo  $catfst[0]; ?> tb">
								<?php }?>
									<a  data-toggle="tab" href="#<?php echo $childCatName->term_id; ?>">
									<i class="icon-<?php echo $childCatName->term_id; ?>"></i> <?php echo $childCatName->name; ?></a></li>
							<?php
								$i++;
							}
						}

					?>
                </ul>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="tab-content bot-40" id="myTabContent">
              <!-- 5 rows Price list -->


			<?php
			$j=1;
				$blogCategoryID = "23"; // current category ID
				$childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");
				if ($childCatID){
					foreach ($childCatID as $kid)
					{
						$childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");

			?>
			<?php
				$cat_ID = $childCatName->term_id;
				$myposts = get_posts("numberposts=5&category=$cat_ID");
				$thisCat = get_category($cat_ID,false);
				$catname =explode(",", $childCatName->name);
				$catfst = explode(" ", $childCatName->name);
			?>


				<?php $i= 0;foreach($myposts as $post) :


				?>
				  <?php  $i++; endforeach;?>

			<?php if($j == 1){  ?>
			<div id="<?php echo $cat_ID;  ?>" class="tab-pane fade in active  btb <?php echo $catfst[0];?>1">
			  <?php }else{ ?>
				<div id="<?php echo $cat_ID;  ?>" class="tab-pane fade   btb <?php echo $catfst[0];?>1">
			  <?php } ?>



			  <p><?php
			  $description =explode(":",$thisCat->description);


			  print_r($description[0]); ?></p>



                <div class="price-table price-table-<?php if($i == 1){  echo "one";}elseif($i == 2){  echo "two";  }elseif($i == 3){  echo "three"; }elseif($i == 4){ echo "four";  }elseif($i == 5){  echo "five"; }elseif($i == 6){  echo "six"; } ?>">

				<?php foreach($myposts as $post) :
				$postid = $post->ID;
				?>
				 <?php   $special = get_post_custom_values('special_offer', $postid);
				if(!empty($special[0]) && $special[0] == "yes"){
				echo'<div class="price-column  price-column-featured">';
				}else{
				echo'<div class="price-column  price-column-first">';
				}
				 ?>

                    <h4><?php the_title(); ?></h4>
                    <ul>
                      <li class="first">
                        <div class="price-tag"><span class="price-value"> <?php   $custom = get_post_custom_values('service_header', $postid); $price = explode("," , $custom[0]); echo $price[0];?></span><span class="price-period"><?php echo $price[1] ?></span></div>
                      </li>
                      <li style="min-height:89px"><strong></strong><?php print_r($post->post_excerpt); ?></li>

                     <?php   $inclusion = get_post_custom_values('services_inclusion', $postid);
					 if(!empty($inclusion)){
						if(count($inclusion) == 1){
						?>
					 <li><strong>	<?php  print_r($inclusion[0]); ?></strong> </li>
						<?php }else{
						foreach($inclusion as $incl){
						?>
						 <li><strong>	<?php  print_r($incl); ?></strong> </li>

					<?php
						}

					}
					}else{

					echo "Text not avaliable!";
					}
					  ?>

 <li class="last"><span class="btn-dark2 cus" onclick="get_contact_formnew('<?php echo$childCatName->name." ".$catfst[2]; ?>: <?php the_title(); ?>');"><span  class="ions">&nbsp;<i class="icon-ticket">&nbsp;</i></span>&nbsp;Inquire</span></li>
                    </ul>
                  </div>
			  <?php endforeach; ?>



                </div>
              </div>


				<?php
					$j++; }
				}

				?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!--=======third=======-->
    <div id="third">
      <div class="section-1">
        <div class="container">
          <!-- Strip with button -->
          <div class="row">
            <article class="span12">
              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			  <?php endwhile; // end of the loop. ?>
            </article>
            <div class="box-list">
			<ul class="thumbnails">
			<?php   $custom_fields = get_post_custom_values('services_features');
					$i=1;
					foreach($custom_fields as $services){
					$bot = explode(":",$services);

				  ?>


<li class="span3 thumbnail">
<div class="block-thumbnail maxheight col ab">
<i class="icon-3x icon-troph<?php echo $i;?>">
<i class="circle-border"></i>
</i>
<a class="link" href="#">
<h3><?php echo $bot[0] ?></h3>
</a>
<p>
<?php echo $bot[2] ?>

</p>
</div>
</li>


			  <?php 	$i++; } ?>
                </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
    <!--=======Fifth=======-->
    <div id="fifth">
      <div class="container">
        <div class="row">
           <article class="span12 bc">
            <h2> Our Core Concepts </h2>

			<?php if ( is_active_sidebar( 'services-peragraph' ) ) : ?>
						<?php dynamic_sidebar( 'services-peragraph' ); ?>
                     <?php endif; ?>

          </article>


        </div>
      </div>

   <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>


       <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade2').bjqs({

          width       : 1200,
            responsive  : true
          });

        });



      </script>
      <div class="container">
        <div class="row">

			 <div class="span12 ro">



			     <div id="banner-fade2 au">

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

        </div>
      </div>
    </div>





 </div>
   <div class="spacer-60"></div>
  <!--==============================footer=================================-->

</div>
<?php

$catfst = explode(" ", $_GET['category']); ?>
<script>
if ($(".<?php echo $catfst[0] ?>")){
 $( ".tb" ).removeClass( "active" )
 $( ".<?php echo $catfst[0]?>" ).addClass( "active" );
 $( ".btb" ).removeClass( "active" )
 $( ".<?php echo $catfst[0] ?>1" ).addClass( "in active" );


}


</script>

<?php get_footer();?>
