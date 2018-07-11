
  <!--==============================footer=================================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <!--Footer Location-->
        <div class="span3 rel">
          <!--Footer tooltip-->
          <div class="location-tip">Our Locations
            <div class="tooltip-bottom"></div>
          </div>
          <!--box-dark starts-->
		  
          <div class="box-color"> <img alt="Desigbersx , designersx at extreme" src=" <?php echo $address = of_get_option('alogo'); ?>">
            <address>
			     <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li>
		  
		   <?php  $address = of_get_option('address1'); 
		   $faddress = explode("?",$address);
		   ?>
		   
<strong>
  <?php print_r($faddress[0]); ?>
</strong>
<br>
<span>  <?php print_r($faddress[1]); ?></span>

		  </li>
       <li>
		  
		   <?php  $address = of_get_option('address2'); 
		   
		   $faddress = explode("?",$address);
		  		   
		   ?>
		   
<strong>
  <?php print_r($faddress[0]); ?>
</strong>
<br>
<span>  <?php print_r($faddress[1]); ?></span>
 
		  </li><li>
		  
		   <?php  $address = of_get_option('address3'); 
		   
		   $faddress = explode("?",$address);
		  		   
		   ?>
		   
<strong>
  <?php print_r($faddress[0]); ?>
</strong>
<br>
<span>  <?php print_r($faddress[1]); ?></span>

	  
		  </li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
		    </address>
            <a class="btn-dark2" href="  <?php echo $join = of_get_option('join'); ?>">Join Us</a> </div>
        </div>
		
       <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 320,
            width       : 620,
            responsive  : true
          });

        });
		
      </script>
		
        <!--Footer Right -->
        <div class="span9">
          <div class="row">
            <!--Footer About-->
            <div class="span3">
			
			<?php if ( is_active_sidebar( 'footer-content' ) ) : ?>					
						<?php dynamic_sidebar( 'footer-content' ); ?>				
                     <?php endif; ?>
			
            </div>
            <!--Footer Links-->
             <div class="span2">
			
              <h3>Latest Blogs</h3>
				<ul class="footer-list">
					<?php query_posts('category_name=Blog&showposts=6'); ?>
     <?php while (have_posts()) : the_post(); ?>
					<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
					 <?php endwhile; ?>		
              </ul>
			  
            </div>
            <!--Footer Twitter-->
            <div class="span4">
              <!--// TWITTER FEEDS STARTS-->
              <div class="TwitterFeeds">
                <div class="TwitterLogo"><img src="<?php bloginfo(template_directory) ?>/img/twitter-icon.png" alt="twitter logo" /></div>
                <div id="ticker" class="app-foot-hei"> 
			<?php if ( is_active_sidebar( 'footer-tweets' ) ) : ?>					
						<?php dynamic_sidebar( 'footer-tweets' ); ?>				
                     <?php endif; ?>
			
				</div>
                <!--// TWITTER FOLLOW STARTS-->
				
                <a href="https://twitter.com/DesignersX" class="btn-dark2 bot-0" data-show-count="true">Follow @DesignersX.com</a>
              
                <!--// TWITTER FOLLOW ENDS-->
              </div>
              <!--// TWITTER FEEDS ENDS-->
            </div>
          </div>
          <!--Footer separator-->
          <div class="footer-separator"></div>
          <!--Footer Logo-->
          <p class="fleft"> <?php echo $copyright = of_get_option('copyright'); ?></p>
          <!--Footer Logo-->
		 
          <div class="footer-links fright">
		  
		   <?php wp_nav_menu(array('menu'=>'footermenu' )); ?>
		  
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php include 'pop3.php'; ?>
<script type="text/javascript">


function closepopup(){

var r=confirm("Are you sure you want to close ???");
if (r==true)
  {
  $("#close").trigger("click");
			  $("#close2").trigger("click");
  var loc1 = $('#loc1').val();
	var email = $("#mainemail").val();
	var onidss = $("#onid").val();
	var service = $("#services1").val();
	
    $.ajax({
        url: "<?php bloginfo('template_directory') ?>/saveemail.php?email="+email+"&loc1="+loc1+"&onidss="+onidss+"&service="+service+"",
        type: "get",
        dataType: "text",
        success: function(responce){
			//alert(responce); 
			  
        },
        error:function(){
            //alert("error");
           
        }
		
    });
  }
else
  {

  }
  
   

}

 
 function firstname2()
{
var x=document.forms["Form2"]["fname"].value;
if (x==null || x=="")
 {
 document.getElementById("fname2").style.display="none";
document.getElementById("fnamee2").style.display="block";
  return false;
 
  }else
  {
  document.getElementById("fnamee2").style.display="none";
document.getElementById("fname2").style.display="block";

 return true;

  }
 }
 
  function emails2()
 {
 
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form2"]["email_id"].value;
if(reg.test(address) == false) {
      document.getElementById("femails2").style.display="block";
	  document.getElementById("femailid2").style.display="none";
      return false;
   }
else
  {
 document.getElementById("femails2").style.display="none";
 document.getElementById("femailid2").style.display="block";
  return true;
  }
  
 }
 
  function fphone2()
 {
var reg = /[a-zA-z]/;
var phone = document.forms["Form2"]["phone"].value;
if(reg.test(phone) == true || phone =="" || phone.length >= 12  || phone.length <= 9 ) 
{
	document.getElementById("phones2").style.display="none";
	document.getElementById("phonese2").style.display="block";     
      return false;
	  
}else
  {
  document.getElementById("phonese2").style.display="none";   
document.getElementById("phones2").style.display="block";
 return true;
  }
 }
 
 function hireform(){
 
 $("#show11").hide();
$("#loader11").show();

 var fname = document.forms["Form2"]["fname"].value;
var email=document.forms["Form2"]["email_id"].value;
var phone=document.forms["Form2"]["phone"].value;
var company = document.forms["Form2"]["C2website"].value;
var captcha = document.forms["Form2"]["captcha1"].value;
var discription = document.forms["Form2"]["Poverview2"].value;
var services = document.forms["Form2"]["services"].value;
var onid = document.forms["Form2"]["onid"].value;
var location = document.forms["Form2"]["location"].value;


 if(firstname2() == false){
  $("#show11").show();
	$("#loader11").hide();
 }else if(emails2() == false){
  $("#show11").show();
	$("#loader11").hide();
 }else { 
	if(captcha == ""){
		alert("Please make sure to validate Humanity");
	$("#show11").show();
	$("#loader11").hide();
	}else{
	
	var xmlhttp;

	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function(){
	if (xmlhttp.readyState==4 && xmlhttp.status==200){
		if(xmlhttp.responseText=="ok"){		
		
		
			  $.ajax({
        url: "<?php bloginfo('template_directory') ?>/hire.php?fname="+fname+"&email="+email+"&phone="+phone+"&company="+company+"&discription="+discription+"&services="+services+"&onid="+onid+"&location="+location+"",
        type: "get",
        dataType: "text",
        success: function(responce){

		 $("#show11").show();
		$("#loader11").hide();
		alert("Thanks for your time, We have received your message. We will get back to you in 24 hours for your requirement");
         $("#close2").click();
       
		
		
        },
        error:function(){
            alert("error creating option");
           
        }
		
    });
	
		
		}else{	
		alert("Please enter correct captcha code ");		
		
		 $("#show11").show();
		$("#loader11").hide();
	
		
		}
		}
  }
	xmlhttp.open("GET","<?php bloginfo(template_directory) ?>/form.php?q="+captcha,true);
	xmlhttp.send();
	return false;
	}
	}
	
 
 }
 

</script>
  

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>	
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<!-- Camera Slider  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/camera2.js"></script> 
<?php echo $stransPeriod = of_get_option('stransPeriod'); ?>
<script>
   jQuery(function(){
			
			jQuery('.camera_wrap').camera({
				fx: 'simpleFade',
				time:7000,
				transPeriod:1200				
			});

		});
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.plus.js"></script>
<script>
  $(document).ready(function() {    
	$("html").niceScroll({styler:"fb",cursorcolor:"#000"});
  });
</script>

<script src="http://www.designersx.com/wp-content/themes/dxdev-mobile/js/modernizr.custom.js"></script>
<script src="http://www.designersx.com/wp-content/themes/dxdev/js/modernizr.custom1.js"></script>
	<script src="http://www.designersx.com/wp-content/themes/dxdev/js/jquery.cbpQTRotator.min.js"></script>
<script>
  $( function() {
    $( '#cbp-qtrotator' ).cbpQTRotator();
  } );
</script>

<?php wp_footer(); ?>

<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-4UVttzJgfpt_t"
});
</script>

<!-- End Quantcast tag -->

<!-- End Quantcast tag -->



       <script type="text/javascript">
		var lsBaseURL = (("https:" == document.location.protocol) ? "https://tracker.leadsius.com/djs/" : "http://tracker.leadsius.com/djs/");
		document.write(unescape("%3Cscript src='" + lsBaseURL + "tracker.js?_k=61fb4f326ace5447b6223303e957c81530e2379b' type='text/javascript'%3E%3C/script%3E"));
</script>



</body>
