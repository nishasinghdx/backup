<?php
/**

Template Name: thanks

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/forms.css" type="text/css" media="screen">


    <?php   $about_banner = get_post_custom_values('banners');   
		$txtbanners = explode(",", $about_banner[0]);
		
		?>

    <!--==============================content=================================-->

    <!--==============================content=================================-->
    <div id="second">
      <div class="container">
        <!-- contact form & map -->
        <div class="row">
		
		 <div class="span12">
		
            <div class="camera-caption1" style="font-size:14px;background: none repeat scroll 0 0 #289DCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
    color: #FFFFFF;
    display: inline-block;
    font-family: 'Open Sans',sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 34px;
    margin-bottom: 0;
    padding: 0 15px;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
    text-transform: uppercase;width:100%;text-align:center;" >
          Thanks for getting in touch! .  We appreciate your interest in DESIGNERSX and we wll respond shortly.   
            </div>
		
          </div><br/><br/><br/><br/>
		
		
		
		
		
		
		
		
          <div class="span12">
            <div class="map">
              <iframe src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=Envato+Level+13,+2+Elizabeth+St,+Melbourne+Victoria+3000+Australia&amp;daddr=&amp;hl=en&amp;geocode=FZQHv_0d_AykCCGxVRMNIz_D7Q&amp;aq=t&amp;sll=-37.812332,144.968956&amp;sspn=0.012087,0.022724&amp;mra=prev&amp;ie=UTF8&amp;t=m&amp;iwloc=ddw0&amp;ll=-37.812332,144.968956&amp;spn=0.012087,0.022724&amp;output=embed"></iframe>
            </div>
          </div>
		  
	    	  
	







	
		  

        </div>
      </div>
    </div>
  </div>
  <div class="spacer-60"></div>
   </div>
   <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/forms.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
   
    <script type="text/javascript">  
 
 function validateForm()
{

var fname = document.getElementById("Fname1").value;
var email = document.getElementById("Email1").value;
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var phone1 = document.getElementById("Phoneno1").value;


var regs = /[a-zA-z]/;
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
	document.getElementById("form1").submit();
}

}



</script>
   
   
   
<?php get_footer();?>
</body>
</html>



<a href="javascript:close_form()" ><div class="popupopen" style="display:none;position:fixed;z-index:1200;" id="contact_form" >

</div></a>
 
<div id="contact_form1" style="display:none;position:absolute;z-index:1500;margin-top:30px;">



<div id="formcontainer" style="">


	<div class="top_bg"><img src="<?php bloginfo('template_directory'); ?>/images/quote-ttl.png" alt="" /></div>
	<!-- BG CENTER FORM START HERE -->
	<div id="bg_center">
	
		<div style=" margin-top: -30px; text-align: right;" class="crosss"><a href="javascript:close_form()" ><img src="<?php bloginfo('template_directory'); ?>/images/562154.png" alt="" width="40" /></a></div>
		
		<!-- MAIN CENTER FORM START HERE -->
		<div id="main_center">
			<div id="main_leftarea">
			<form action="<?php bloginfo(template_directory) ?>/code.php" method="post" class="form" name="Form1" style="width:400px; margin-top:-30px;">
		  	<div class="contact_heading1">Full Name</div>
		 	<div class="contactus_textbox">
		 	<input name="fname" type="text" class="contactus_textfield"  onblur="firstname()"  style="width:280px;height:25px;border:0px;"/>
		 	</div>
			<div id="fname"style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="fnamee"style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
			<input name="site" type="hidden"  value="<?php bloginfo(url) ?>"/>
			<input type="hidden" name="onid" value="<?php echo get_option('admin_email');?>" style="width:280px;height:25px;border:0px;"/>
<input type="hidden" id="loc1" name="location"/>
		 	<div class="contact_heading">Email Address</div>
			<div class="contactus_textbox"><input  name="email" onblur="emails1()" value="<?php echo $_GET['email']; ?>" id="email_id" type="text" class="contactus_textfield" onblur="emails()"; style="width:280px;height:25px;border:0px;"/></div><div id="femailid" style="float:left;padding-left:6px;padding-top:8px; display:none;"  class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="femails" style="float:left;padding-left:6px;padding-top:8px;display:none; " class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
			<div class="contact_heading">Phone Number<span class="contacttext_f">(Business / Mobile)</span></div>
			<div class="contactus_textbox"><input name="phone" id="phone" type="text" class="contactus_textfield" onblur="fphone()" onkeypress="return isNumberKey(event);" style="width:280px;height:25px;border:0px;" /></div><div id="phones" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="phonese" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
			<div class="contact_heading">Budget for the Project<span class="contacttext_f">(Choose below)</span></div>
	
			<div class="contactus_select">
				<select id="budget" name="budget" class="contactus_selectdropdown" onchange="sele(this.value)" value="Select Below" onfocus="if(this.value=='Select Below') this.value=''" onblur="if(this.value=='') this.value='Select Below'">
			<option value="select">Select Your Budget</option>
			 <?php $Budgets = of_get_option('budget');
				$Budget=explode(",",$Budgets);
				foreach($Budget as $Bug){
		  ?>
			
			
			
			
			
			<option value="<?php echo $Bug; ?>"><?php echo $Bug; ?></option>
			
			<?php } ?>
			</select>
			</div>
			<div id="selec"style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="selece"style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn"><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
     
			<div class="contact_heading">Current Website<span class="contacttext_f">(Optional)</span></div>
			<div class="contactus_textbox"><input name="Cwebsite" type="text" class="contactus_textfield" style="width:280px;height:25px;border:0px;" id="Cwebsite"/></div>
		<div id="cleck_bg">
				<div class="contact_heading" style="margin:7px 0px 5px 10px;">Services Required</div>
				
				
				<div class="cleckbox">
		<input type="checkbox" name="services[0]" value="Design and Animation" /><span class="cleckboxtext">&nbsp;Design and Animation</span></div>
				
				
				<?php

        $blogCategoryID = "23"; // current category ID

        $childCatID = $wpdb->get_col("SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$blogCategoryID");

        if ($childCatID){

	$i=1;

            foreach ($childCatID as $kid)

            {

                $childCatName = $wpdb->get_row("SELECT name, term_id FROM $wpdb->terms WHERE term_id=$kid");

				$catname =explode(",", $childCatName->name);

				

			
                ?>

<div class="cleckbox">
				<input type="checkbox" name="services[<?php echo $i; ?>]" value="<?php echo  $catname[1]; ?>" /><span class="cleckboxtext">&nbsp;&nbsp;<?php echo  $catname[1]; ?></span></div>


				

               

           <?php

		   $i++;

            }

        }



    ?>


		
		</div>
		
		
	<div class="contact_heading" style="margin-left:19px;">Project Overview <span class="contacttext_f">(Optional Detail)</span></div>
	<div class="contactus_textareamain">
    
	    <div class="contactus_textarea">
         <textarea name="Poverview" id="Poverview" class="contactus_textarea2" value=""  style="border:0px;box-shadow:none;"></textarea>
         </div>
     
	</div>
	
	<div style="clear:both;"></div>
	   <div class="cleck_bgsd" style="margin-top: 20px;">
	   	<img src="captcha.php" id="captchaImage" />
	<div class="" style="float: right; width: 193px; margin-top: 6px;">
		
<span  onclick="document.getElementById('captchaImage').src='<?php bloginfo('template_directory'); ?>/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image">click if text not readable.</span>
<input type="text" name="captcha"  id="captchaField" style="width:150px;"/>
		 </div>
	  </div>
	
	
	
	
	<div class="clear"></div>
	<span class="submitt"><input name="submit" onclick="return validtnateForm();al();" type="image" src="<?php bloginfo('template_directory'); ?>/img/submit copy.jpg" /></span>
	<div class="contacttext_f1">We will get back to you in 1 business day !</div>
	
	 
	 <div class="clear"></div>
	 
	</div>
	<div id="main_leftarea1">
          

		<div class="rightarea_heading">What would you get?</div>
        
        	<div class="rightarea_contant">
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" /></div>
                 <div class="rightarea_matter">A <span>phone call / Email</span> from one of our Business Consultants</div>
          	   </div>
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" /></div>
                 <div class="rightarea_matter">A <span>cost estimate</span> for your Project</div>
          	   </div>
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" /></div>
                 <div class="rightarea_matter">Access to our <span>Client Management System</span> after the start of the project</div>
          	   </div>
            </div>
        
		<div class="rightarea_heading">Customer Privacy</div>
        
		<div class="rightsaidarea">
		
				
		
			<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/top_bg.jpg" alt="" /></div>
			
            <div class="rightside_center">
               <div class="customprivacy_image"><img src="<?php bloginfo('template_directory'); ?>/img/customprivacy_img.png" /></div>
               <div class="customprivacy">Your information will not be shared with any 3rd parties under any circumstances.</div>
            </div>
            
			<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/buttom_bg.jpg" alt="" /></div>
		</div>
			<div class="contact_heading1" style="display:none;">Security Check</div>
<input name="fsec" type="text" style="width:150px;margin-left:20px;padding-top:10px;display:none" id="fsec" style="width:280px;height:25px;border:0px;"/>
		 	<div>
		 	
		 	</div> </form>
	     </div>
		 </form>
		</div>
		<!-- MAIN CENTER FORM START HERE -->
	</div>
<!-- BG CENTER FORM END HERE -->
	
</div>
</div>



