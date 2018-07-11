<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

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
									<?php
										$address = of_get_option('address1');
										$faddress = explode("?", $address);
									?>
									<strong><?php print_r($faddress[0]); ?></strong><br>
									<span><?php print_r($faddress[1]); ?></span>
								</li>
								<li>
									<?php
										$address = of_get_option('address2');
										$faddress = explode("?", $address);
									?>

									<strong><?php print_r($faddress[0]); ?></strong><br>
									<span><?php print_r($faddress[1]); ?></span>
								</li>
								<li>
									<?php
										$address = of_get_option('address3');
										$faddress = explode("?", $address);
									?>
									<strong><?php print_r($faddress[0]); ?></strong><br>
									<span>  <?php print_r($faddress[1]);?></span>
								</li>
							</ul>
						<!-- end Basic jQuery Slider -->
						</div>
					</address>
					<a class="btn-dark2" href="  <?php echo $join = of_get_option('join'); ?>">Join Us</a>
				</div>
			</div>

			<script class="secret-source">
				var $ = jQuery.noConflict();
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
						<?php
							if (is_active_sidebar('footer-content')):
						?>
						<?php
							dynamic_sidebar('footer-content');
						?>
						<?php
							endif;
						?>
					</div>
					<!--Footer Links-->
					<div class="span2" >

						<h3>Latest Blogs</h3>
							<ul class="footer-list">
								<?php
									query_posts('category_name=Blog&showposts=6');
								?>
								<?php while (have_posts()):  the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php    the_title_attribute(); ?>"><?php the_title(); ?></a>
								</li>
								<?php endwhile; ?>
							</ul>
					</div>
					<!--Footer Twitter-->
					<div class="span4" >
						<!--// TWITTER FEEDS STARTS-->
						<div class="TwitterFeeds">
							<div class="TwitterLogo"><img src="<?php bloginfo(template_directory);?>/img/twitter-icon.png" alt="twitter logo" /></div>
							<div id="ticker">
								<?php
									if (is_active_sidebar('footer-tweets')):
								?>
								<?php dynamic_sidebar('footer-tweets'); ?>
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
			</div>
			<div class="span12">
				<p class="span6">
					<a href="<?php echo get_home_url(); ?>"><?php echo $copyright = of_get_option('copyright');	?></a>
				</p>
				<!--Footer Logo-->
				<div class="footer-links fcenter span5" >
					<?php wp_nav_menu(array('menu' => 'footermenu')); ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php
	if (is_page_template('index.php')) {
?>
<a href="javascript:close_form()" >
	<div class="popupopen footer-dis-fix" id="contact_form" ></div>
</a>

<div id="contact_form1" class="footer-pos-z">
	<div id="formcontainer" >
		<?php
			include 'popups.php';
		?>
	</div>
</div>

<a href="">
	<div class="popupopen footer-dis-abs" id="contact_form5" ></div>
</a>

<div id="contact_forms5" class="footer-dis-zfix">
	<div id="formcontainers" class="footer-text-c">
		<div class="thanks">
			<div class="footer-martop"><br/><img src="<?php bloginfo('template_directory'); ?>/images/thanks-ttl.png" alt="thanks border" /><br/>
				<span class="footer-whit">Your form has been submitted successfully . Thanks you for your time & will get back to you in less than 24 hours.</span><br/><br/><span class="footer-colr"><a href="http://designersx.com/site4/?page_id=15" >Read Blog</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-col-bol">-</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-colr"><a href="http://designersx.com/site4/" >Go to Homepage</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="<?php
				bloginfo('template_directory'); ?>/images/thanks-continue-btn.png" alt="continue button" onclick="hidethanks();" class="footer-cur"/></span>
			</div>
		</div>
	</div>
</div>

<?php
} else {
?>

<a href="javascript:close_form()" >
	<div class="popupopen footer-dis-fix" id="contact_form"></div>
</a>

<div id="contact_form1" class="footer-pos-z">
	<div id="formcontainer" >
		<?php
			include 'popups2.php';
		?>
	</div>
</div>
<a  onclick="close_formnew()" ><div class="popupopen footer-top-dis" id="contact_formnew" ></div></a>

<div id="contact_form1new" class="footer-wid-top">
<div class="top_bg"><img src="<?php
    bloginfo('template_directory');
?>/images/service_inquiry-ttl.png" alt="service inquiry" />
<br/><span> </span>
</div>
<div id="formcontainerss" >	<!-- BG CENTER FORM START HERE -->	<div id="ndbgcenter"   >
<div class="crosss footer-top-rig" ><img class="footer-cur" onclick="close_formnew()" src="<?php
    bloginfo('template_directory');
?>/images/562154.png" alt="cross" width="40" /></div>
		<!-- MAIN CENTER FORM START HERE -->		<div id="main_centers">			<div id="main_leftareanew"  class="footer-mar-15">
	<form action="<?php bloginfo(template_directory); ?>/code.php" method="post" id = "enqueryForm1" class="form1" name="Form2"  >
<div class="name span3 footer-wid">
<input  name="service"  value="" id="service" type="text"  class="footer-bot-back" readonly />	</div>
<div class="name span3 footer-wid">
<input  name="fname" onblur="emails1new()" value="" id="fnamenew" type="text" onkeypress="return validateFirstname(event)"  placeholder="Full Name" class="footer-bol15" />
<input type="hidden" name="onids" id="onids" value="<?php    echo $emails; ?>" />
<input name="site" type="hidden"  value="<?php
    bloginfo(url);
?>"/>
<input type="hidden" id="loc123" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
<div id="femailidnew" class="footer-left-pd"  class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
<div id="femailsnew" class="footer-left-pd"  class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>

</div>














<div class="name span3 footer-wid">
<input name="email" id="email" type="text"  onblur="fphonenew()"  placeholder="Email Address" >

<div id="phonesnew" class="validtn footer-left-pd"><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
<div id="phonesenew" class="validtn footer-left-pd"><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
</div>

<div class="name span3 footer-wid3">
	<textarea name="Poverview" id="Poverviews"  placeholder="Project Overview" class="footer-box" ></textarea>
</div>





<div class="name span3 footer-wid">

	<div class="g-recaptcha" data-sitekey="6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5"></div>
</div>









<div class="footer-clear"></div>

<div id="show2" class="footer-hei{">
<span class="submitt"><img src="<?php bloginfo('template_directory'); ?>/img/submit%20copy.jpg" class="footer-cur" alt="submit" onclick="submitinqry();" /></span>
<div id = "successmessagebox" class="contacttext_f1">We will get back to you in 1 business day !</div>
	</div>

<div id="loader2" class="footer-dis50">
<span class="submitt footer-opa">
<img src="<?php
    bloginfo('template_directory');
?>/img/submit%20copy.jpg" alt="loader" /></span>
<div class="contacttext_f1"><img src="<?php
    bloginfo('template_directory');
?>/images/ajax-loader.gif" alt="loader" /></div>
	</div>

<div class="contacttext_f1"></div>
<div class="clear"></div>
</form>
</div>
</div>
<!-- MAIN CENTER FORM START HERE -->
</div><!-- BG CENTER FORM END HERE -->
</div>
</div>

<a href="" ><div class="popupopen footer-dis-abs" id="contact_form5" >

</div></a>

<div id="contact_forms5" class="footer-dispos-mar">
<div id="formcontainers" class="footer-text-c">
<div class="thanks"><div class="footer-martop"><br/><img src="<?php
    bloginfo('template_directory');
?>/images/thanks-ttl.png" alt="thanks border" /><br/>
	<span class="footer-whit">Your form has been submitted successfully . Thanks you for your time & we will get back to you in less than 24 hours.</span><br/><br/><span class="footer-colr"><a href="http://designersx.com/site4/?page_id=15" >Read Blog</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-col-bol">-</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="footer-colr"><a href="http://designersx.com/site4/" >Go to Homepage</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="<?php
    bloginfo('template_directory');
?>/images/thanks-continue-btn.png" alt="continue button" onclick="hidethanks();" class="footer-cur"/></span>
</div></div>
</div>
</div>

<?php
}
?>

<!-- Jquery Starts  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sitemap.js"></script>
<!-- Superfish  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<!-- Camera Slider  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/camera.js"></script>
<?php
echo $stransPeriod = of_get_option('stransPeriod');
?>
<script>
jQuery(function(){

		jQuery('.camera_wrap').camera({
			fx: '<?php
echo $dxdev = of_get_option('radio1');
?>',
			time:<?php
$stime = of_get_option('stime');
if (!empty($stime)) {
    echo $stime;
} else {
    echo "7000";
}
?>,
			transPeriod:<?php
$stransPeriod = of_get_option('stransition');
if (!empty($stransPeriod)) {
    echo $stransPeriod;
} else {
    echo "1500";
}
?>

		});

	});
</script>
<!-- Bootstrap jquery's  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
<!-- Accordion -->
<script type="text/javascript"  src="<?php bloginfo('template_directory');?>/js/accordion.js"></script>
<script type="text/javascript"  src="<?php bloginfo('template_directory');?>/js/jquery.quicksand.js"></script>
<!-- Tweets  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.tweet.js"></script>

<!-- Equal Heights  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.equalheights.js"></script>
<script>
$(window).load(function() {
jQuery(".maxheight").equalHeights();
})
</script>
<!-- Elastislider  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.elastislide.js"></script>
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

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.prettyphoto.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory');?>/lightbox/js/lightbox-plus-jquery.min.js"></script>
 Nice scroll  -->

<?php

if (!stristr($_SERVER['HTTP_USER_AGENT'], 'iPad')) {
?>
<script src="<?php
    bloginfo('template_directory');
?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php
    bloginfo('template_directory');
?>/js/jquery.nicescroll.plus.js">
</script>
<script>
$(document).ready(function() {
$("html").niceScroll({styler:"fb",cursorcolor:"#000"});
});
</script>
<?php
}

?>

<!--[if (gt IE 9)|!(IE)]><!-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.mobile.customized.min.js"></script>
<!-- Sticky  -->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/sticky.js"></script>
<script src="http://www.designersx.com/wp-content/themes/dxdev-mobile/js/modernizr.custom.js"></script>
<!-- Rotator  -->
<script src="http://www.designersx.com/wp-content/themes/dxdev/js/modernizr.custom1.js"></script>
<script src="http://www.designersx.com/wp-content/themes/dxdev/js/jquery.cbpQTRotator.min.js"></script>
<script>
$( function() {
$( '#cbp-qtrotator' ).cbpQTRotator();
} );
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom.js"></script>

<script type="text/javascript"  src="<?php bloginfo(template_directory);?>/js/jquery.feedbackBadge.min.js"></script>

<a  href="#" title="Give us feedback" id="feedback-badge-right" class="" onmouseover="swing()" onmouseout="swingrem()" class="footer-cur"><span>Feedback</span></a>
	<script type="text/javascript">


		function swing(){
		//$('#feedback-badge-right').removeClass('flipInY');
		$('#feedback-badge-right').addClass('swing');
		var delay = setTimeout(function(){
			$('#feedback-badge-right').removeClass('swing');
			//$('#feedback-badge-right').addClass('flipInY');

		}, 900)

		}

		$('#feedback-badge-right').feedbackBadge({
				css3Safe: $.browser.safari ? true : false, //this trick prevents old safari browser versions to scroll properly
				float: 'right',
				onClick: function () {

setTimeout(
function()
{
	$("#change-image").trigger("click");
	$("#firstname").focus();
}, 1000);

				document.getElementById("contact_form").style.display="block";
				document.getElementById("contact_form1").style.display="block";
				document.forms["Form1"]["fname"].value = "";
					document.forms["Form1"]["phone"].value = "";
						document.forms["Form1"]["Cwebsite"].value = "";
							document.forms["Form1"]["Poverview"].value = "";
							document.forms["Form1"]["email_id"].value = "";
								$(".validtn").hide();

var windowWidth = $(window).width();
if(windowWidth < 1000){
$("#contact_form1").css("margin-left", ($(window).width() - 340)/2);
}else{

$("#contact_form1").css("margin-left", ($(window).width() - 750)/2);
}

				}
			});

	$(window).resize(function() {
var windowWidth = $(window).width();

$("#contact_form1").css("margin-left", ($(window).width() - 750)/2);

});

</script>
<script type="text/javascript">
$("ul li").has("ul");
$("ul li ul").parent().addClass("menu-itemaa");

</script>

<?php
wp_footer();
?>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1jKZVV7mqHerXaTm44xn0hxKEKWKWK0C';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

<!-- Quantcast Tag -->
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

<noscript>
<div class="custom-closenone">
<img src="//pixel.quantserve.com/pixel/p-4UVttzJgfpt_t.gif"  height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->

	<script type="text/javascript">
		var lsBaseURL = (("https:" == document.location.protocol) ? "https://tracker.leadsius.com/djs/" : "http://tracker.leadsius.com/djs/");
		document.write(unescape("%3Cscript src='" + lsBaseURL + "tracker.js?_k=7fed0a4c36570e3123f5cac1d7ed1efd9868e1c1' type='text/javascript'%3E%3C/script%3E"));
	</script>

</body>

</html>
