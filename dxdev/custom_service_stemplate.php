<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
<?php
/**

Template Name: custom_service

*/ 
global $simple_mb ;
$meta = $simple_mb->the_meta();
?>
<script type='text/javascript'>
function callPlayer(frame_id, func, args) { 

			$('#startlink').css("display","none");
			$("#whateverID").css("display","block");
			
	setTimeout(function() {
     if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
    var iframe = document.getElementById(frame_id);
    if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
        iframe = iframe.getElementsByTagName('iframe')[0];
    }

    if (!callPlayer.queue) callPlayer.queue = {};
    var queue = callPlayer.queue[frame_id],
        domReady = document.readyState == 'complete';

    if (domReady && !iframe) {
           window.console && console.log('callPlayer: Frame not found; id=' + frame_id);
        if (queue) clearInterval(queue.poller);
    } else if (func === 'listening') {
         if (iframe && iframe.contentWindow) {
            func = '{"event":"listening","id":' + JSON.stringify(''+frame_id) + '}';
            iframe.contentWindow.postMessage(func, '*');
        }
    } else if (!domReady ||
               iframe && (!iframe.contentWindow || queue && !queue.ready) ||
               (!queue || !queue.ready) && typeof func === 'function') {
        if (!queue) queue = callPlayer.queue[frame_id] = [];
        queue.push([func, args]);
        if (!('poller' in queue)) {
            // keep polling until the document and frame is ready
            queue.poller = setInterval(function() {
                callPlayer(frame_id, 'listening');
            }, 250);
            // Add a global "message" event listener, to catch status updates:
            messageEvent(1, function runOnceReady(e) {
                    if (!iframe) {
                        iframe = document.getElementById(frame_id);
                        if (!iframe) return;
                        if (iframe.tagName.toUpperCase() != 'IFRAME') {
                            iframe = iframe.getElementsByTagName('iframe')[0];
                            if (!iframe) return;
                        }
                    }
                if (e.source === iframe.contentWindow) {
                 
                    clearInterval(queue.poller);
                    queue.ready = true;
                    messageEvent(0, runOnceReady);
                    // .. and release the queue:
                    while (tmp = queue.shift()) {
                        callPlayer(frame_id, tmp[0], tmp[1]);
                    }
                }
            }, false);
        }
    } else if (iframe && iframe.contentWindow) {
       
        if (func.call) return func();
     
        iframe.contentWindow.postMessage(JSON.stringify({
            "event": "command",
            "func": func,
            "args": args || [],
            "id": frame_id
        }), "*");
    }
   
    function messageEvent(add, listener) {
        var w3 = add ? window.addEventListener : window.removeEventListener;
        w3 ?
            w3('message', listener, !1)
        :
            (add ? window.attachEvent : window.detachEvent)('onmessage', listener);
    }
		
	},100);	

}


</script>

<?php
wp_head();

$user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );
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
<title><?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; ?> | <?php  echo $meta['title']; ?> | DesignersX</title>   
<link rel="icon" href="<?php  echo $meta['fav']; ?>" type="image/x-icon"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/style.css" type="text/css" media="all" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/camera.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Jura:400,500,600,300' rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bjqs.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/responsive.css" type="text/css" media="screen">
<link href="<?php bloginfo('template_directory'); ?>/images/popjs/bootstrap.min.css"  type="text/css" rel="stylesheet">

<style> 
.header {
background-color:<?php  echo $meta['logo']; ?>;
}
.font-group li.cur, .font-group li.over, .font-group li:hover {
background-color:<?php  echo $meta['logo']; ?>;
}
#font-awesome-list li :hover {
background-color:<?php  echo $meta['logo']; ?>;
}
#font-awesome-list li a:hover {
background-color:<?php  echo $meta['logo']; ?>; 
}
.main .post-cnt ul li span {
background-color:<?php  echo $meta['logo']; ?>;border-radius:30px;width:23px; position:absolute;margin-left: -38px;
}
.modal-header {
background-color:<?php  echo $meta['logo']; ?>;
color: #fff;
}
.camera_next > span { background-color:  <?php  echo $meta['logo']; ?>; } 
.camera_prev > span { background-color:  <?php  echo $meta['logo']; ?>; } 
.video {
    background: url("<?php  echo $meta['bgimg']; ?>") repeat scroll center top rgba(0, 0, 0, 0);
    margin-top: 47px;
}
#feedback-badge-right{
display:none!important;
}
iframe{
border: medium none !important;
}


</style>

</head>
<body>
<div class="wrapper">

	
	<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
			
					<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(300, 300), false, ''); 
					$name = explode("/" ,$src[0]); 
					$name = explode("." ,$name[7]); 
					?>
					<div class="col-xs-3 col-md-4" ><a id="logo" ><?php the_post_thumbnail('large' , array('alt' => $name[0] , 'class' => 'header-toim')); ?> 
					<h1 class="custom-stem2upp"><?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h1>
					<p> by DesignersX</p>
					</a></div>
					<nav class="col-md-8 col-xs-9" id="top-nav">
						<ul id="color_one">
							<li><a  id="menu_1" class="menu_123" >Skills</a></li>
							<li>I</li>
							<li><a  id="menu_2" class="menu_123">Portfolio</a></li>
							<li>I</li>
							<li><a  id="menu_3" class="menu_123"><?php  echo $meta['menu']; ?></a></li>
							<li>I</li>
							<li><a  href="#myModal2" data-toggle="modal"   onclick="captch2();"  id="menu_4" class="menu_123"  ><img src="<?php bloginfo('template_directory'); ?>/images/hire_button.png" alt="hire" /></a></li>
						</ul>
					</nav>
					<div class="cl">&nbsp;</div>
				</div>
				
			</div>
		</header>
		<!-- end of header -->
		
		
		<div class="video">
			<div class="shell">
			<div class="main">
				<section class="heading">
					<h2><?php  echo $meta['title']; ?></h2>
					<p><?php  echo $meta['titledescription']; ?></p>
				</section>
				<section class="post">
			
				<div class="entry-content">
				<a id="startlink" href="javascript:void callPlayer(&quot;whateverID&quot;,&quot;playVideo&quot;)"><img src="<?php  echo $meta['videoimg']; ?>" alt="<?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?>video" /></a>
				<!--<iframe width="610" height="340" src="<?php  echo $meta['video']; ?>?wmode=transparent&feature=oembed&amp;hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=0" frameborder="0"  ></iframe>-->
				<div id="whateverID" class="custom-closenone">
				<iframe width="602" height="340" src="<?php  echo $meta['video']; ?>?enablejsapi=1&amp;wmode=transparent&amp;feature=oembed&amp;hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=0"  ></iframe> 
				</div>
				</div>
					<div class="post-cnt">
						<ul>						
						<?php  $services = $meta['services']; 
							foreach($services as $service){					
						
						?>
							<li><span><img src="<?php bloginfo('template_directory'); ?>/images/check_01.png" alt="bullet" /></span><?php  echo $service['serv']; ?></li>
				
							<?php 
							}			
						
						?>
							
							<li class="click"><a href="#myModal" data-toggle="modal" onclick="captch1();" ><img src="http://www.designersx.com/wp-content/uploads/2014/04/click_button.png" alt="Get Free Consultation"  /> </a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</section>
			</div>
			</div>

		</div>
		<!-- shell -->
		<div class="shell" id="shell" >
			<!-- main -->
			<div class="main">
				
<section class="social">
 <div class="span6">
      <div id="cbp-qtrotator" class="cbp-qtrotator"> <img class="testi-icon" src="<?php bloginfo('template_directory'); ?>/img/fon2-before.png" alt="test">
         		<?php
$catquery = new WP_Query( 'category_name=Testimonials&showposts=9' );
while($catquery->have_posts()) : $catquery->the_post();
?>	 
              <div class="cbp-qtcontent"> <?php the_post_thumbnail('large' , array('alt' => ''.get_the_title().'')); ?>              <div class="testi-text">
                  <span> <?php the_title(); ?></span><?php the_content(); ?> 
                  <div class="testi-name"><?php 
				   $custom_fields = get_post_custom_values('testimonials_author'); 
				  if(!empty($custom_fields)){	 
				     foreach ( $custom_fields as  $field_values ) {
						echo $field_values;
					}
				}

				  ?>  </div>
                </div>
              </div>
             
              <?php endwhile; ?>	
            </div>
</div>
			
<h3><?php  echo $meta['skilltitle']; ?></h3>
					
	<div id="font-awesome-list">
	<ul class="font-group">
	<?php  $skills = $meta['skills']; 
		 $skills	=  explode("," ,$skills);
		foreach($skills as $skill){
		$both = str_replace(array( '(', ')' ), '', $skill);
		$getval =  explode(":", $both);
	?>
<li><i class="fa <?php  echo $getval[0]; ?>"></i> <span class="icon-name"><?php  echo $getval[1]; ?></span></li>
<?php }	?>
</ul>  
</div>
</section>

			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		<!-- portfolio -->
		<div id="portfolio">
			<div class="shell">
		<!-- main -->
			<div class="main ">
								
				<section class="partners">
					
					<div id="intro">
						<!-- Slider -->
						<div class="slider-fixed">
							<div class="slider">
								<div class="heading-fix">	
									<div class="creativemain">
										
											<!-- SEARCHBOX START FROM HERE -->
										<div class="upimg custom-upmar">
											
											<div class="heading_slid custom-slidleft">
											<h4>Projects Portfolio</h4>
												<span class="discuss"><a href="#myModal" data-toggle="modal" onclick="captch1();"  ><img src="<?php bloginfo('template_directory'); ?>/images/discuss.png" alt="discuss your project" /></a></span>
												
											</div>
												
										</div>
										<div class="clearboth"> </div>
										<!-- SEARCHBOX START FROM HERE -->
									</div>
								</div>
								<div class="camera_wrap camera_emboss" id="camera_wrap_3">
						
						<?php $projects = $meta['Project'];	
							foreach($projects  as $project){

						?>
						
				
						
						<div data-src="<?php echo $project['projshot']; ?>"  >
										<div class="camera-caption fadeIn">  
						<h2>Project Name: <span class="custom-disline"><?php echo $project['projname']; ?></span></h2>
						<p>
						<?php echo $project['projdisc']; ?>
						</p>
						
						<h3>Features Developed For this Project</h3>
							<ul>
							
							<?php 
							$features  = explode("," , $project['features']);
							
							foreach( $features  as $feature){ ?>
							
								<li><?php echo $feature  ?></li>
								
							<?php		}		?>	
								
							</ul>
										</div>
									</div>
				

	<?php		}		?>


									
								</div>
							</div>
						</div>
					</div> 	

				</section>
				
			</div>
		</div>
	</div>
		<!-- end of portfolio -->	
		
		<div class="modal fade" id="myModal2" tabindex="-1" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
									  <button type="button" class="close"  onclick="closepopup();" >&times;</button>  
                                        <button type="button" class="close custom-closenone" id="close2" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Hire Dedicated Developer For <?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-md-7">
                                		   
										   
		<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form2"  id="form2" > 
	
			<div class="form-group custom-frombot">
		 	<input name="fname" type="text" class="form-control custom-wid"  onblur="firstname2();" placeholder="Full Name:" id="f2name" />
		<div id="fname2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="fnamee2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>
			
			
			<input type="hidden" name="services" id="services1" value="<?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; // end of the loop. ?>" /> 
			<input type="hidden" name="onid" id="onid1" value="<?php echo $emails; ?>" />
			
			<input type="hidden" id="loc11" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
						
			 </div>
			 
			 
		 	<div class="form-group custom-frombot" >
			<input  name="email_id" class="form-control custom-wid" value="" id="email_id1" type="text"  onblur="emails2();" placeholder="Email Address:"/>
			<div id="femailid2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			
			<div id="femails2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			
			</div>
			
			<div class="form-group custom-frombot" >
			<input name="phone" id="phone2" type="text"  class="form-control custom-wid" onblur="" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			
			<div id="phones2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="phonese2" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			
					
			</div>
				<div class="form-group custom-frombot" >
			<input name="C2website" class="form-control custom-wid" type="text"   placeholder="Your Company :"  id="C2website"/>
			</div>
		
	
	<div class="form-group custom-frombot" >
         <textarea name="Poverview2" class="form-control cumtom-pove" ondrop="return false;"
        id="Poverview2"  placeholder="Project Overview"  ></textarea>
         
    </div>
	

<div class="form-group custom-frombot" >	
	<div class="custom-rig-wid" >
	   	<img src="captcha.php" id="captchaImage1" alt="captchaImagecaptchaImage1"  />		
	<span  onclick="document.getElementById('captchaImage1').src='<?php bloginfo('template_directory'); ?>/captcha.php?'+Math.random();document.getElementById('captchaField1').focus();" id="change-image1" class="footer-cur">click if text not readable.</span>
	</div>
	<input type="hidden" name="validateror1" value="false" id="validateror1" />
	<input type="text" name="captcha1"  class="form-control custom-wid-mar" id="captchaField1"  placeholder="Enter Captcha Code:" />
	
</div>  
	

<div class="footer-clear"></div> 

<div id="show11" class="footer-hei">
<div class="pull-left custom-marrig">
<button class="btn btn-primary" onclick="hireform();" type="button">Submit</button>
</div>

</div>
		
<div id="loader11" class="footer-dis50">
<div class="pull-left custom-opa-mar">
<button class="btn btn-primary" onclick="" type="button">Submit</button>
</div>
<div class="contacttext_f1"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
</div>	

	
	
	 </form>
										   
										   
                                            
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
	
		
		
         <div class="modal fade" id="myModal" tabindex="-1" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                           <button type="button" class="close"  onclick="closepopup();" >&times;</button>  
						   <button type="button" class="close custom-closenone" id="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Get Free Consultation for <?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-md-7">
                                                                                    
										   
										   
		<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form1"  id="form1" > 
	
			<div class="form-group custom-frombot">
		 	<input name="fname" type="text" class="form-control custom-wid"  onblur="firstname1();" placeholder="Full Name:" id="firstname"/>
		 	
			<div id="fname" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="fnamee" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>
			
			<input name="site" type="hidden"  value="<?php echo bloginfo(url); ?>"/>
			<input type="hidden" name="services" id="services" value="<?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; // end of the loop. ?>" /> 
			<input type="hidden" name="onid" id="onid" value="<?php echo $emails; ?>" />
			
			<input type="hidden" id="loc1" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
			 </div>
			 
			 
		 	<div class="form-group custom-frombot" >
			<input  name="email" class="form-control custom-wid" value="<?php echo $_GET['email']; ?>" id="email_id" type="text"  onblur="emails1();" placeholder="Email Address:"/>
			<div id="femailid"  class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			
			<div id="femails" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div></div>
			
			<div class="form-group custom-frombot" >
			<input name="phone" id="phone" type="text"  class="form-control custom-wid" onblur="" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			<div id="phones" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="phonese" class="validtn custom-vali" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			</div>
		
			<div class="form-group custom-frombot" >
			<input name="Cwebsite" class="form-control custom-wid" type="text"   placeholder="Your Company:"  id="Cwebsite"/>
			</div>
					
			

    
			
	
	<div class="form-group custom-frombot" >
         <textarea name="Poverview" class="form-control cumtom-pove" ondrop="return false;"
        id="Poverview" onkeypress="return textareacheck(event);" placeholder="Project Overview" ></textarea>
          <span id="error" class="custom-red">*  Some of Special Characters not allowed</span>
    </div>
	
	
	
	<div class="form-group custom-from-bot" >
			<input name="coupon" type="text"    class="form-control custom-wid95" placeholder="Enter Coupon for discount:"   id="Ccoupon" onblur="checkcoupon(this.value);" />	&nbsp;&nbsp;<span id="cpnmsg" ></span>	
	</div>
	
	
	<div class="form-group custom-frombot" >	
	<div class="custom-rig-wid" >
	   	<img src="captcha.php" id="captchaImage" alt="captchaImagecaptchaImage"  />		
<span  onclick="document.getElementById('captchaImage').src='<?php bloginfo('template_directory'); ?>/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image" class="footer-cur">click if text not readable.</span>
</div>

<input type="hidden" name="validateror" value="false" id="validateror" />
<input type="text" name="captcha"  class="form-control custom-wid-mar" id="captchaField"  placeholder="Enter Captcha Code:" />
	
	  </div>
	
<div class="footer-clear"></div> 
<div id="show" class="footer-hei">
<div class="pull-left custom-marrig">
<button class="btn btn-primary" onclick="return validtnateForm();al();" type="button">Submit</button>
</div>
<div class="contacttext_f1">We will get back to you in 1 business day !</div>
</div>
		
<div id="loader" class="custom-stem-hei">
<div class="pull-left custom-opa-mar">
<button class="btn btn-primary" onclick="" type="button">Submit</button>
</div>
<div class="contacttext_f1"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
</div>	
	
	 </form>
										   
										   
                                            
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
						
						
		<!-- shell -->
		<div class="shell" id="mcont" >
			<div class="main">
				<section class="content custom-bot0">
						<div class="content-cnt">	
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; // end of the loop. ?>
						</div>
				</section>	
			</div>
			<div class="footer-clear"></div>
		</div>	
		<div class="shell"  >
			<div class="main custom-pad0">
				<section class="content custom-pad32">
				
		<a href="#myModal" data-toggle="modal" >
		<img class="started" src="http://www.designersx.com/wp-content/uploads/2014/04/started_button.png" alt="get free consultation" /></a>					
					 
					
				</section>
			</div>
		</div>
		
		<!-- end of shell -->
		
		
		<!--<footer id="footer">
			
				
  </footer>-->
		
	</div>
	<!-- end of wrapper -->


<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>   
    <script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>
	<script type='text/javascript' src='http://demo.onedesigns.com/pinboard/wp-content/themes/pinboard/scripts/fitvids.js'></script>

<script>
/* <![CDATA[ */
	jQuery(document).ready(function($) {
	
						$('audio,video').mediaelementplayer({
			videoWidth: '102%', 
			videoHeight: '102%',
			audioWidth: '102%',
			alwaysShowControls: true,
			features: ['playpause','progress','tracks','volume'],
			videoVolume: 'horizontal'
		});
		$(".entry-attachment, .entry-content").fitVids({ customSelector: "iframe[src*='wordpress.tv'], iframe[src*='www.dailymotion.com'], iframe[src*='blip.tv'], iframe[src*='www.viddler.com']"});
	});
/* ]]> */


</script>
<script>

function show(){
	document.getElementById('menu').style.display="";
}
show();
function hide(){
	document.getElementById('mm-blocker').click();
		
	
	
}
</script>

<script type='text/javascript' src='http://demo.onedesigns.com/pinboard/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.13.0'></script>

   
       <script class="secret-source">
	
$("#menu_1").click(function() {

    $('html, body').animate({
        scrollTop: $("#shell").offset().top - 236
    }, 1000);
});


$("#menu_2").click(function() {
    $('html, body').animate({
        scrollTop: $("#portfolio").offset().top - 60
    }, 1000);
});
	   
   
$("#menu_3").click(function() {
    $('html, body').animate({
        scrollTop: $("#mcont").offset().top - 60
    }, 1000);
});

	   	   
$("#logo").click(function() {
    $('html, body').animate({
        scrollTop: $(".wrapper").offset().top - 60
    }, 1000);
});	   	   
	   
	   
 jQuery(document).ready(function($) {

 $('#banner-fade2').bjqs({
          
          width       : 1200,
            responsive  : true
          });

        });
		
	
		
      </script>

<?php
 include (TEMPLATEPATH . '/custom-footer.php');
?>



<script src="<?php bloginfo('template_directory'); ?>/js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/images/popjs/bootstrap.min.js"></script>


		<script type="text/javascript">
			$(function() {
				var $menu = $('nav#menu'),
					$html = $('html, body');

				$menu.mmenu();
				$menu.find( 'li > a' ).on(
					'click',
					function()
					{
						var href = $(this).attr( 'href' );

						//	if the clicked link is linked to an anchor, scroll the page to that anchor 
						if ( href.slice( 0, 1 ) == '#' )
						{
							$menu.one(
								'closed.mm',
								function()
								{
									setTimeout(
										function()
										{
											$html.animate({
												scrollTop: $( href ).offset().top
											});	
										}, 10
									);	
								}
							);						
						}
					}
				);
			});
			
			
			
			
		
$("#menu_11").click(function() {

    $('html, body').animate({
        scrollTop: $("#shell").offset().top - 100
    }, 1000);
});




$("#menu_21").click(function() {
    $('html, body').animate({
        scrollTop: $("#portfolio").offset().top - 60
    }, 1000);
});
	   
	   
	   
$("#menu_31").click(function() {
    $('html, body').animate({
        scrollTop: $("#mcont").offset().top - 60
    }, 1000);
});
	  
	
			
			setTimeout(
	function() 
	{
		$("#change-image").trigger("click");
			$("#change-image1").trigger("click");
	}, 1000);
			


function captch1(){
	setTimeout(
		function() 
		{
			$("#change-image").trigger("click");
				
		}, 500);
}

function captch2(){
setTimeout(
	function() 
	{	
			$("#change-image1").trigger("click");
	}, 500);
}







			
			
		</script>
		
