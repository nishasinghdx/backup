  <footer id="footer">
    <div class="container">
      <div class="row">

        <div class="span9">
          <div class="row">
           </div>
          </div>
          <!--<div class="footer-separator"></div> -->      
          <p class="fleft"><?php echo $copyright = of_get_option('copyright'); ?></p>

          <ul class="footer-links fright">
		   <?php wp_nav_menu(array('menu'=>'footermenu' )); ?>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  	<div id="nav" style="position: fixed; bottom: 0px; padding: 0px;top: auto;width: 100%;height: 55px;" class="phnmsg" >
<div class="container" style="margin-top: 8px;">

<div class="navbar navbar_ clearfix">
<div class="navbar-inner" style="margin-left: -10px;">
<div class="clearfix" style="text-align: center;padding: 7px 6px;background: #289DCC;width:46%;border-radius:5px;">
<span class="camera-caption1"><i class="icon-phone-sign" style="color: #ffffff;font-size: 13px;"></i>&nbsp;&nbsp;
<a href="tel:<?php $number = of_get_option('number');
				if(!empty($number)){   ?><?php echo $number;  } ?>" style="color: #ffffff;font-size: 13px;">   <?php $number = of_get_option('number');
				if(!empty($number)){
		  ?>
            <?php echo $number; } ?> </a></span>
</div>
</div>

</div>
</div>
</div>



</div>
<!-- Jquery Starts  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sitemap.js"></script>
<!-- Superfish  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/camera.js"></script>
<?php echo $stransPeriod = of_get_option('stransPeriod'); ?>
<script>
   jQuery(function(){

			jQuery('.camera_wrap').camera({
				fx: '<?php echo $dxdev = of_get_option('radio1'); ?>',
				time:<?php $stime = of_get_option('stime'); if(!empty($stime)){ echo $stime; }else{ echo "7000"; } ?>,
				transPeriod:<?php $stransPeriod = of_get_option('stransition'); if(!empty($stransPeriod)){ echo $stransPeriod; }else{ echo "1500"; } ?>

			});

		});
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script type="text/javascript"  src="<?php bloginfo('template_directory'); ?>/js/accordion.js"></script>
<script type="text/javascript"  src="<?php bloginfo('template_directory'); ?>/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.equalheights.js"></script>
<script>
  $(window).load(function() {
    jQuery(".maxheight").equalHeights();
  })
</script>
<!-- Elastislider  -->
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

<!--[if (gt IE 9)|!(IE)]><!-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.customized.min.js"></script>
<!-- Sticky  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sticky.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<!-- Rotator  -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.rotator.js"></script>

<script type="text/javascript">
$("ul li").has("ul");
$("ul li ul").parent().addClass("menu-itemaa");

</script>
<?php wp_footer(); ?>
<style>
.icon-troph:before {
  content: "\<?php echo $trophy = of_get_option('icon1'); ?>";
}
.icon-cogd:before {
  content: "\<?php echo $cogs = of_get_option('icon2'); ?>";
}
.icon-rockd:before {
  content: "\<?php echo $rocket = of_get_option('icon3'); ?>";
}
.icon-beake:before {
  content: "\<?php echo $beaker = of_get_option('icon4'); ?>";
}
.pluginButton{
padding:0 6px!important;margin-top: 6px!important;
}

.timeline-footer{
display:none!important;
}

.pluginCountBox{
display:none!important;
}
</style>
</body>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1jKZVV7mqHerXaTm44xn0hxKEKWKWK0C';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</html>
