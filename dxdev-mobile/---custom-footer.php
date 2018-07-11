
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
             <div class="span2" style="">
			
              <h3>Latest Blogs</h3>
				<ul class="footer-list">
					<?php query_posts('category_name=Blog&showposts=6'); ?>
     <?php while (have_posts()) : the_post(); ?>
					<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
					 <?php endwhile; ?>		
              </ul>
			  
            </div>
            <!--Footer Twitter-->
            <div class="span4" style="">
              <!--// TWITTER FEEDS STARTS-->
              <div class="TwitterFeeds">
                <div class="TwitterLogo"><img src="<?php bloginfo(template_directory) ?>/img/twitter-icon.png" alt="twitter logo" /></div>
                <div id="ticker">
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

 
 function firstname2()
{
var x=document.forms["Form2"]["fname"].value;
if (x==null || x=="")
 {
 document.getElementById("fname2").style.display="none";
document.getElementById("fnamee2").style.display="block";
  
 
  }else
  {
  document.getElementById("fnamee2").style.display="none";
document.getElementById("fname2").style.display="block";
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
  }
  
 }
 
 
 
 
 
 
   var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
		specialKeys.push(44); //Right
		specialKeys.push(32); //Right
		
     function textareacheck(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode) || (keyCode >= 32 && keyCode <= 46));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.elastislide.js"></script>
<script>
  jQuery("#carousel-blog").elastislide({
  	imageW 		: 270,
  	minItems	: 1,
  	speed		: 600,
  	easing		: "easeOutQuart",
  	margin		: 30,
  	border		: 0,
  	onClick		: function() {}
  });</script>
<!-- Pretty photo  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyphoto.js"></script>
<!-- Nice scroll  -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicescroll.plus.js"></script>

<script>
  $(document).ready(function() {    
	$("html").niceScroll({styler:"fb",cursorcolor:"#000"});
  });
</script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.customized.min.js"></script>
<!-- Sticky  -->

<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<!-- Rotator  -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.rotator.js"></script>
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



</body>

</html>
