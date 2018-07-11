<?php
/**

Template Name: getaquote

 */
 include (TEMPLATEPATH . '/custom-header.php');
?>


<a href="" ><div class="popupopen" style="display:none;position:fixed;z-index:1200;" id="contact_form5" >

</div></a>

<div id="contact_forms5" style="display:none;position:fixed;z-index:1500;margin-top:30px;width:100%; margin-top: 35%;">
<div id="formcontainers" style="width:100%;text-align:center;">
	<div class="thanks"><div style="margin-top:20px;"><br/><img src="<?php bloginfo('template_directory'); ?>/images/thanks-ttl.png" alt="" /><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold;">-</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold; text-decoration: underline;"><a href="http://designersx.com/site4/" >Go to Homepage</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="<?php bloginfo('template_directory'); ?>/images/thanks-continue-btn.png" alt="" onclick="hidethanks();" style="cursor:pointer;"/></span>
	</div></div>
</div>
</div>


<a href="" ><div class="popupopen" style="display:none;position:fixed;z-index:1200;" id="contact_form5" >

</div></a>

<div id="contact_forms5" style="display:none;position:absolute;z-index:1500;margin-top:30px;width:100%; margin-top: 35%;">
<div id="formcontainers" style="width:100%;text-align:center;">
	<div class="thanks"><div style="margin-top:20px;"><br/><img src="<?php bloginfo('template_directory'); ?>/images/thanks-ttl.png" alt="" /><br/>
		<span style="color:#FFFFFF;">Your form has been submitted successfully . Thanks you for your time & will get back to you in less than 24 hours.</span><br/><br/><span style="color:#177F98;font-weight:bold; text-decoration: underline;"><a href="http://designersx.com/site4/?page_id=15" >Read Blog</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold;">-</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#177F98;font-weight:bold; text-decoration: underline;"><a href="http://designersx.com/site4/" >Go to Homepage</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="<?php bloginfo('template_directory'); ?>/images/thanks-continue-btn.png" alt="" onclick="hidethanks();" style="cursor:pointer;"/></span>
	</div></div>
</div>
</div>
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


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/forms.css" type="text/css" media="screen">

<script type="text/javascript">


function fphonenew(){


var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form2"]["email"].value;
if(reg.test(address) == false) {
      document.getElementById("phonesnew").style.display="none";
	  document.getElementById("phonesenew").style.display="block";
      return false;
   }
else
  {
 document.getElementById("phonesnew").style.display="block";
 document.getElementById("phonesenew").style.display="none";
  }



}


function emails1new(){


var x=document.forms["Form2"]["fnamenew"].value;
if (x==null || x=="")
 {
document.getElementById("femailidnew").style.display="none";
document.getElementById("femailsnew").style.display="block";
      return false;


  }else
  {
		document.getElementById("femailidnew").style.display="block";
		document.getElementById("femailsnew").style.display="none";
  }

}





function hidethanks(){

$("#contact_form5").hide();
$("#contact_forms5").hide();
$("#show").show();
$("#loader").hide();

 $('#firstname').val("");
 $('#email_id').val("");
 $('#phone').val("");
 $('#Cwebsite').val("");
 $('#Poverview').val("");
$("#budget").val('select');
 $('#captchaFields').val("");
$('#cleck_bg').find('input[type=checkbox]:checked').removeAttr('checked');
$(".validtn").css('display','none');


}


</script>

<script type="text/javascript">
function firstname1()
{

var x=document.forms["Form1"]["fname"].value;
if (x==null || x=="")
 {
 document.getElementById("fname").style.display="none";
document.getElementById("fnamee").style.display="block";


  }else
  {
  document.getElementById("fnamee").style.display="none";
document.getElementById("fname").style.display="block";
  }
 }
 function emails1()
 {

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form1"]["email_id"].value;
if(reg.test(address) == false) {
      document.getElementById("femails").style.display="block";
	  document.getElementById("femailid").style.display="none";
      return false;
   }
else
  {
 document.getElementById("femails").style.display="none";
 document.getElementById("femailid").style.display="block";
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

        function textareacheck(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode) || (keyCode >= 32 && keyCode <= 46));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }





 function fphone()
 {
var reg = /[a-zA-z]/;
var phone = document.forms["Form1"]["phone"].value;
if(reg.test(phone) == true || phone =="" || phone.length >= 12  || phone.length <= 9 )
{
	document.getElementById("phones").style.display="none";
	document.getElementById("phonese").style.display="block";
      return false;

}else
  {
  document.getElementById("phonese").style.display="none";
document.getElementById("phones").style.display="block";
  }
 }

 function sele(val)
 {


	if(val== "select")
	{
	document.getElementById("selec").style.display="none";
	document.getElementById("selece").style.display="block";
	}else{
	document.getElementById("selec").style.display="block";
	document.getElementById("selece").style.display="none";
	}
 }




function validtnateForm()
{
//var response2 = grecaptcha.getResponse(recaptcha2);
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form1"]["email_id"].value;
var x=document.forms["Form1"]["fname"].value;
var sel=document.forms["Form1"]["budget"].value;
var regs = /[a-zA-z]/;
var check= document.getElementById("fsec").value;
//console.log(response2);
var phone = document.forms["Form1"]["phone"].value;
if (x==null || x=="")
 {
	alert('Please enter your full name');

  return false;
  }else if(reg.test(address) == false)
{

      alert('Please enter a valid email address');
      return false;
   } else if(reg.test(phone) == true || phone.length >= 13  || phone.length <= 9)
{

      alert('Please enter a valid Phone no');
      return false;

}else if(sel==null || sel=="select")
		{
		alert("Please select your Budget");
		}

if(check=="" || check==null)
{

al();
}
if(check!="" || check!=null)
{

//return false;
}
}

$("ul li").has("ul");
$("ul li ul").parent().addClass("menu-itemaa");


  var onloadCallback = function() {
    grecaptcha.render('html_element', {
      'sitekey' : '6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5'
    });
  };


function al(){
//var response2 = grecaptcha.getResponse(html_element);

var str=document.getElementById("g-recaptcha-response").value;
console.log(str);
if(str==""){

alert("Please make sure to validate Humanity");
		return false;
}else{

$("#show").hide();
$("#loader").show();
var formdata = $("#form1").serializeArray();
console.log(formdata);
//return false;
	 $.ajax({
        url: "http://www.designersx.com/wp-content/themes/dxdev/code.php",
        type: "POST",
  			data: formdata,
  			dataType: "text",
        success: function(responce){
			$("#show").show();
			$("#loader").hide();
			$("#contact_form").hide();
			$("#contact_form1").hide();
			$("#contact_form5").show();
			$("#contact_forms5").show();
      //console.log(responce);
      setTimeout(function(){ location.reload(); }, 2000);

       //alert('ok');
        },
        error:function(){
            alert("error creating option");

        }

    });


		return false;
		//document.Form1.submit();


		}

  }



</script>









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
		 <?php if(isset($_GET['mode']) && $_GET['mode'] == "thank"){?>
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
           Thank you for contacting us .  We appreciate your interest in DESIGNERSX and we wll respond shortly.
            </div>
			<?php } ?>
          </div>

<?php

if(isset($_POST["Fname"]))
{

$dsx = "http://".$_SERVER['SERVER_NAME'].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

$query="CREATE TABLE if not exists `wp_customerquestion` (`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(255) NOT NULL, `phone` VARCHAR(255) NOT NULL,`email` VARCHAR(255) NOT NULL,`department` VARCHAR(255) NOT NULL,`comment` VARCHAR(255) NOT NULL)ENGINE = InnoDB;";

mysql_query($query);
$name=$_POST['Fname'].$loc;
$email=$_POST["Email"];
$phone=$_POST["Phoneno"];
$department=$_POST["dep"];
$messag=$_POST["latter2"];
$to = "sikandermn34.dx@gmail.com";

$dv = "insert into wp_customerquestion values('','$name','$phone','$email','$department','$messag')";
mysql_query($dv);


error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "
Name: ____________________________________$name <br/>
Phone No: ________________________________$phone <br/>
Email : __________________________________$email <br/>
Department: __________________$department <br/>
comments: ________________________$messag <br/>

";

$mail->IsSMTP(); // telling the class to use SMTP

$mail->Host       = "designers-x.com"; // SMTP server

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "";                 // sets the prefix to the servier

$mail->Host       = "designers-x.com";      // sets GMAIL as the SMTP server

$mail->Port       = 25;                   // set the SMTP port for the GMAIL server

$mail->Username   = "staff@designers-x.com";  // GMAIL username

$mail->Password   = "dxdev123";            // GMAIL password

$mail->SetFrom('staff@designers-x.com', $name);

$mail->AddReplyTo($to);

$mail->Subject    = "Site Viewer Information";

$mail->AltBody    = "Site Viewer Information"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $to;

$mail->AddAddress($address, "Vishal Kumar");

if($mail->Send()) {
 header("location:$dsx&mode=thank");
} else {
  echo"";
}




}

?>


















         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



						<?php the_content(); ?>




<?php endwhile; // end of the loop. ?>
          <!-- Form -->
          <div class="span9">



		<div id="main_center">
	<div id="main_leftarea">
	<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form1" style="width:381px; margin-top:-30px;"  class="form1" id="form1" >

		 	<label class="name span3" style="width: 300px;">
		 	<input onkeypress="return validateFirstname(event)" name="fname" type="text" class=""  onblur="firstname1();" placeholder="Full Name:" id="firstname"  />

			<div id="fname" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="fnamee" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>

			<input name="site" type="hidden"  value="<?php echo bloginfo(url); ?>"/>

			<input type="hidden" name="onid" id="onid" value="<?php echo $emails; ?>" />

			<input type="hidden" id="loc1" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
			</label>
		 	<label class="name span3" style="width: 300px;">
			<input  name="email"  value="<?php echo $_GET['email']; ?>" id="email_id" type="text"  onblur="emails1();" placeholder="Email Address:"/>
			<div id="femailid" style="float:left;padding-left:6px;padding-top:8px; display:none;"  class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>

			<div id="femails" style="float:left;padding-left:6px;padding-top:8px;display:none; " class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
			</label>
			<label class="name span3" style="width: 300px;">
			<input name="phone" onkeypress="return isNumberKey1(event)" id="phone" type="text"  onblur="fphone();" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			<div id="phones" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="phonese" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
			</label>

		<label class="name span3" style="width: 300px;">
			<input name="Cwebsite" type="text"   placeholder="Current Website:"   id="Cwebsite"/></label>
		<label class="name span3" style="width: 300px;">
				<select id="budget" name="budget"  onchange="sele(this.value)"  onfocus="if(this.value=='Select Below') this.value=''" onblur="if(this.value=='') this.value='Select Below'">
			<option value="select">Select Your Budget</option>
			 <?php $Budgets = of_get_option('budget');
				$Budget=explode(",",$Budgets);
				foreach($Budget as $Bug){
		  ?>


			<option value="<?php echo $Bug; ?>"><?php echo $Bug; ?></option>

			<?php } ?>
			</select>

			<div id="selec" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="" /></div>
			<div id="selece" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="" /></div>
     </label>


		<label id="cleck_bg" style="margin-left:0px;">
				<div class="contact_heading" style="margin:7px 0px 5px 10px;">Services Required</div>


				<div class="cleckbox">
		<input type="checkbox" name="services[0]" value="Design and Animation" class="check" id="services0" size="35" /><span class="cleckboxtext">&nbsp;&nbsp;Design and Animation</span></div>


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

				<input type="checkbox" name="services[<?php echo $i; ?>]" value="<?php echo  $childCatName->name; ?>" class="check" id="services<?php echo $i; ?>" />

				<span class="cleckboxtext"><?php echo  $childCatName->name; ?></span></div>






           <?php

		   $i++;

            }

        }



    ?>



		</label>




    <div class="name span3" style="margin-top:15px;width: 350px;">

         <textarea name="Poverview" ondrop="return false;"
        id="Poverview" onkeypress="return textareacheck(event);" placeholder="Project Overview" style="width: 80%;height:120px;" ></textarea>
          <span id="error" style="color: Red; display: none">*  Some of Special Characters not allowed</span>
     </div>

	<!-- <div class="name span3" style="margin-top:10px;">


	   	<img src="http://www.designersx.com/wp-content/themes/dxdev/captcha.php" id="captchaImages" alt="captchaImagecaptchaImage"  />


<div  onclick="document.getElementById('captchaImages').src='http://www.designersx.com/wp-content/themes/dxdev/captcha.php?'+Math.random();document.getElementById('captchaFields').focus();" id="change-image5" style="cursor:pointer;">click if text not readable.
<input type="hidden" name="validateror" value="false" id="validateror" />
<input type="text" name="captcha"  id="captchaFields" style=""/>
</div>



-->

    <div class="name span3 footer-wid">
    	<div id="html_element"></div>
    </div>

</div>

	<div style="clear:both;"></div>








	 <div class="clear"></div>
	 </form>
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
       async defer>
   </script>
   <div id="show" style="height:50px">
   <span class="submitt">
   <input name="submit" onclick="return validtnateForm();al();" type="image" src="<?php bloginfo('template_directory'); ?>/img/submit%20copy.jpg" alt="submit" /></span>
   	<div class="contacttext_f1">We will get back to you in 1 business day !</div>
   		</div>

   	<div id="loader" style="display:none;height:50px">
   <div class="submitt" style="opacity: 0.45;">
   <img src="<?php bloginfo('template_directory'); ?>/img/submit%20copy.jpg" alt="loader" /></div>
   	<div class="contacttext_f1"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
   		</div>
	</div>


<input name="fsec" type="text" style="width:150px;margin-left:20px;padding-top:10px;display:none" id="fsec" />



          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="spacer-60"></div>
   </div>




<?php get_footer();?>
<style>
.phnmsg{
display:none;
}
</style>
   <script>
   	setTimeout(
  function()
  {
   $("#change-image5").trigger("click");
   $("#firstname").focus();

  }, 1000);
   </script>
</body>
</html>
