<!DOCTYPE html>	
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Cache-control" content="public" />
<meta name="viewport" content="width=device-width" />
<?php
/**

Template Name: custom_service

*/ 
global $simple_mb ;
$meta = $simple_mb->the_meta();

wp_head();
?>
<?php
/*$user_query = new WP_User_Query( array( 'role' => 'Administrator' ) );
				$i=1;
			 foreach($user_query->results as $email){
					if($i == 1){
						$emails = $email->user_email;
					}else{
						$emails = $emails.','.$email->user_email;						
					}
				$i++;
				}*/	
				?>
<title><?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; ?> | <?php  echo $meta['title']; ?> | DesignersX</title>   
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ic" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/style.css" type="text/css" media="all" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/jquery.mmenu.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/camera.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Jura:400,500,600,300' rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bjqs.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/images/popjs/responsive.css" type="text/css" media="screen">
 <link href="<?php bloginfo('template_directory'); ?>/images/popjs/bootstrap.min.css" rel="stylesheet">

<style>
#feedback-badge-right{
display:none!important;
}
</style>


</head>
<body>
<div class="wrapper">
<div id="page" style="position:absolute; margin-top:200px;width:100%;">
			
		<a class="btn-responsive-menu mm-fixed-top" id="menu_button" href="#menu" onclick="javascript:showDiv();" onclick="hide();"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></a>
				
			<nav id="menu" >
				<ul>
					<li><a href="#" id="menu_11" >Skills</a></li>
					<li><a href="#" id="menu_21">Portfolio</a></li>
					<li><a href="#" id="menu_31"><?php  echo $meta['menu']; ?></a></li>
					<li><a href="#myModal2" data-toggle="modal"    >Hire Dedicated Developer</a></li>
					
				</ul>
			</nav>
			
	</div>
	<!-- wrapper -->
	
	<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
			
					
					<div class="col-xs-3 col-md-4" ><a id="logo" href="#"><?php the_post_thumbnail('large' , array('alt' => ''.get_the_title().'' , 'class' => 'header-toim')); ?>
					<span style="width:38%;"><h1><?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h1>
					<p> by DesignersX</p><span>
					</a></div>
					<nav class="col-md-8 col-xs-9" id="top-nav">
						<ul id="color_one">
							<li><a href="#" id="menu_1" class="menu_123" >Skills</a></li>
							<li>I</li>
							<li><a href="#" id="menu_2" class="menu_123">Portfolio</a></li>
							<li>I</li>
							<li><a href="#" id="menu_3" class="menu_123">Why Android?</a></li>
							<li>I</li>
							<li><a  href="#myModal2" data-toggle="modal"   id="menu_4" class="menu_123"><img src="<?php bloginfo('template_directory'); ?>/images/hire_button.png" alt="video" /></a></li>
						</ul>
					</nav>
					
					<!--<nav id="navigation">
						<a href="#" class="nav-btn">Home<span></span></a>
						<ul>
							<li class="active home"><a href="#">Skills</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Why Android?</a></li>
							<li style="border:none;"><a href="#" ><img src="<?php bloginfo('template_directory'); ?>/images/hire_button.png" alt="video" /></a></li>
						</ul>
					</nav>-->
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
				<iframe width="610" height="340" src="<?php  echo $meta['video']; ?>?wmode=transparent&feature=oembed&amp;hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=0" frameborder="0"  ></iframe>
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
							
							
							<li class="click"><a href="#myModal" data-toggle="modal" ><img src="http://www.designersx.com/wp-content/uploads/2014/04/click_button.png" /></a></li>
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
				
				<!-- cols -->
				<!--<section class="cols">

					<div class="col">
						<img src="<?php bloginfo('template_directory'); ?>/images/col-img1.png" alt="" />
						<div class="col-cnt">
							<h2>BRAINSTORM</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing dolor emor</p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="<?php bloginfo('template_directory'); ?>/images/col-img2.png" alt="" />
						<div class="col-cnt">
							<h2>DESIGN</h2>
							<p>Duis risus elit, imperdiet eget sollicitudin quis, gravida sed mi. </p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="col">
						<img src="<?php bloginfo('template_directory'); ?>/images/col-img3.png" alt="" />
						<div class="col-cnt">
							<h2>CODE</h2>
							<p>Proin quis sem in mauris fringilla commodo ac a felis.</p>
							<a href="#" class="more">view more</a>
						</div>
					</div>
					<div class="cl">&nbsp;</div>

				</section>-->
				<!-- end of cols -->


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



				<!--<div class="socials">
					<p>We are currently <strong>available</strong> for work. Please, contact us for a quote at <span><a href="#">contact [at] websitename [dot] com</a></span></p>
					<ul>
						<li><a href="#" class="facebook-ico">facebook-ico</a></li>
						<li><a href="#" class="twitter-ico">twitter-ico</a></li>
						<li><a href="#" class="skype-ico">skype-ico</a></li>
						<li><a href="#" class="rss-ico">rss-ico</a></li>
					</ul>
				</div>-->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
		<!-- portfolio -->
		<div id="portfolio">
			<div class="shell">
		<!-- main -->
			<div class="main ">
				
				<!--<section class="proj">
					
					<div class="cl">&nbsp;</div>
				</section>-->
				
				<section class="partners">
					
					<!--<div id="partners-slider">
						<div class="slider-holder2">
						<div >
						<h1>Projects Portfolio</h1>
						   <img src="<?php bloginfo('template_directory'); ?>/images/mobile_image.png" alt="" />
					<div class="proj-cnt">
						<h1>Projects Portfolio</h1>
						<h2>Project Name: Remind ME</h2>
						<p>
							DesignersX Android is the dominant platform & system of choice for most of the smartphone users on the planet. But knowing how to reach that large market with the right idea which utilizes the full potential of the Google Mobile OS is important. Google updates the system almost every year with new features and new devices. 
						</p>
							<span class="discuss"><img src="<?php bloginfo('template_directory'); ?>/images/discuss.png" alt="" /></span>
						<h2>Features Developed For this Project</h2>
						<ul>
							<li><a href="#">Specialized User Experience</a></li>
							<li><a href="#">Custom Date, Time & Selector</a></li>
							<li><a href="#">Help you manage your schedule</a></li>
							<li><a href="#">Open Call, Message or Email Apps</a></li>
							<li><a href="#">Multiple Color Themes</a></li>
						</ul>
					</div>
					</div>
					
				
				
						</div>
					</div>
					<div class="slider-arr">
						<a class="prev-arr arr-btn" href="#"></a>
						<a class="next-arr arr-btn" href="#"></a>
					</div>-->
					<div id="intro">
						<!-- Slider -->
						<div class="slider-fixed">
							<div class="slider">
								<div class="heading-fix">	
									<div class="creativemain">
										
											<!-- SEARCHBOX START FROM HERE -->
										<div style="margin-top:0px;margin-left: 0px;" class="upimg">
											
											<div class="heading_slid" style="float:left;">
											<h4>Projects Portfolio</h4>
												<span class="discuss"><a href="#myModal" data-toggle="modal"  ><img src="<?php bloginfo('template_directory'); ?>/images/discuss.png" alt="" /></a></span>
												
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

			
						
						<div data-src="<?php echo $project['projshot']; ?>">
										<div class="camera-caption fadeIn">  
						<h2>Project Name: <p style="display: inline;"><?php echo $project['projname']; ?></p></h2>
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
                                        <button type="button" class="close" style="display:none" id="close2" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Hire Dedicated Developer For <?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-md-7">
                                		   
										   
		<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form2"  id="form2" > 
	
			<div class="form-group" style=" float: left; margin-bottom: 15px; width: 100%;">
		 	<input name="fname" type="text" class="form-control"  onblur="firstname2();" placeholder="Full Name:" id="f2name"  style="width:95%;float:left;"/>
		<div id="fname2" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="fnamee2" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>
			
			
			<input type="hidden" name="services" id="services1" value="<?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; // end of the loop. ?>" /> 
			<input type="hidden" name="onid" id="onid1" value="<?php echo $emails; ?>" />
			
			<input type="hidden" id="loc11" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
						
			 </div>
			 
			 
		 	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input  name="email_id"  style="width:95%;float:left;" class="form-control" value="" id="email_id1" type="text"  onblur="emails2();" placeholder="Email Address:"/>
			<div id="femailid2" style="float:left;padding-left:6px;padding-top:8px; display:none;margin-left: -35px;"  class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			
			<div id="femails2" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px; " class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			
			</div>
			
			<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input name="phone" id="phone2" style="width:95%;float:left;" type="text"  class="form-control" onblur="" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			
			<div id="phones2" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="phonese2" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			
					
			</div>
				<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input name="C2website" class="form-control" type="text"   placeholder="Your Company :" style="width:95%;float:left;"  id="C2website"/>
			</div>
		
	
	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
         <textarea name="Poverview2" class="form-control" ondrop="return false;"
        id="Poverview2"  placeholder="Project Overview" style="width: 95%!important;height:150px;" ></textarea>
         
    </div>
	

	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >	
	<div class="" style="float:right; width: 222px;" >
	  <img src="http://www.designersx.com/wp-content/themes/dxdev/captcha.php" id="captchaImages" alt="captchaImagecaptchaImage"  />
<span  onclick="document.getElementById('captchaImage').src='http://www.designersx.com/wp-content/themes/dxdev/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image" style="cursor:pointer;">click if text not readable.</span>
</div>
	<input type="hidden" name="validateror1" value="false" id="validateror1" />
	<input type="text" name="captcha1"  class="form-control" id="captchaField1"  placeholder="Enter Captcha Code:" style="width: 48%!important; margin-top: 36px;" />
	
</div>  
	

<div style="clear:both;"></div> 

<div id="show11" style="height:50px">
<div class="pull-left" style="margin-right:20px;">
<button class="btn btn-primary" onclick="hireform();" type="button">Submit</button>
</div>

</div>
		
<div id="loader11" style="display:none;height:50px">
<div class="pull-left" style="margin-right:20px;opacity: 0.45;">
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
						   <button type="button" class="close" style="display:none" id="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Get Free Consultation for <?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?>	<?php endwhile; // end of the loop. ?></h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-md-7">
                                                                                    
										   
										   
		<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form1"  id="form1" > 
	
			<div class="form-group" style=" float: left; margin-bottom: 15px; width: 100%;">
		 	<input name="fname" type="text" class="form-control"  onblur="firstname1();" placeholder="Full Name:" id="firstname"  style="width:95%;float:left;"/>
		 	
			<div id="fname" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="fnamee" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>
			
			<input name="site" type="hidden"  value="<?php echo bloginfo(url); ?>"/>
			<input type="hidden" name="services" id="services" value="<?php while ( have_posts() ) : the_post(); ?><?php the_title(); ?><?php endwhile; // end of the loop. ?>" /> 
			<input type="hidden" name="onid" id="onid" value="<?php echo $emails; ?>" />
			
			<input type="hidden" id="loc1" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
			 </div>
			 
			 
		 	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input  name="email"  style="width:95%;float:left;" class="form-control" value="<?php echo $_GET['email']; ?>" id="email_id" type="text"  onblur="emails1();" placeholder="Email Address:"/>
			<div id="femailid" style="float:left;padding-left:6px;padding-top:8px; display:none;margin-left: -35px;"  class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			
			<div id="femails" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px; " class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div></div>
			
			<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input name="phone" id="phone" style="width:95%;float:left;" type="text"  class="form-control" onblur="" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			<div id="phones" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="phonese" style="float:left;padding-left:6px;padding-top:8px;display:none;margin-left: -35px;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			</div>
		
			<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
			<input name="Cwebsite" class="form-control" type="text"   placeholder="Your Company:" style="width:95%;float:left;"  id="Cwebsite"/>
			</div>
					
			

    
			
	
	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >
         <textarea name="Poverview" class="form-control" ondrop="return false;"
        id="Poverview" onkeypress="return textareacheck(event);" placeholder="Project Overview" style="width: 95%!important;height:150px;" ></textarea>
          <span id="error" style="color: Red; display: none">*  Some of Special Characters not allowed</span>
    </div>
	
	
	
	<div class="form-group"  style=" float: left; margin-bottom: -15px; width: 100%;" >
			<input name="coupon" type="text"    class="form-control" style="width: 95%!important;" placeholder="Enter Coupon for discount:"   id="Ccoupon" onblur="checkcoupon(this.value);" />	&nbsp;&nbsp;<span id="cpnmsg" ></span>	
	</div>
	
	
	<div class="form-group"  style=" float: left; margin-bottom: 15px; width: 100%;" >	
	<div class="" style="float:right; width: 222px;" >
	  <img src="http://www.designersx.com/wp-content/themes/dxdev/captcha.php" id="captchaImages" alt="captchaImagecaptchaImage"  />
<span  onclick="document.getElementById('captchaImage').src='http://www.designersx.com/wp-content/themes/dxdev/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image" style="cursor:pointer;">click if text not readable.</span>
</div>

<input type="hidden" name="validateror" value="false" id="validateror" />
<input type="text" name="captcha"  class="form-control" id="captchaField"  placeholder="Enter Captcha Code:" style="width: 48%!important; margin-top: 36px;" />
	
	  </div>
	
<div style="clear:both;"></div> 
<div id="show" style="height:50px">
<div class="pull-left" style="margin-right:20px;">
<button class="btn btn-primary" onclick="return validtnateForm();al();" type="button">Submit</button>
</div>
<div class="contacttext_f1">We will get back to you in 1 business day !</div>
</div>
		
<div id="loader" style="display:none;height:50px">
<div class="pull-left" style="margin-right:20px;opacity: 0.45;">
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
<!-- shell -->
<div class="shell" id="mcont" >
<div class="main">
<section class="content">
<div class="content-cnt">
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>
</div>



</section> </div> </div>

<div class="shell" id="mcont" >
<div class="main">
<section class="content" style="margin-bottom:0px;padding:0px;">

<a href="#myModal" data-toggle="modal" ><img class="started" src="http://www.designersx.com/wp-content/uploads/2014/04/started_button.png" alt="get free consultation" /></a>


</section>
</div>
</div>
<!-- end of shell -->

		<!-- end of shell -->
		
		
		<!--<footer id="footer">
			
				
  </footer>-->
		
	</div>
	<!-- end of wrapper -->
	
</body>
</html>



<br/><br/>
 <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>   
    <script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.min.js"></script>
	<script type='text/javascript' src='http://demo.onedesigns.com/pinboard/wp-content/themes/pinboard/scripts/fitvids.js'></script>


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
        scrollTop: $("#shell").offset().top - 100
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
		
