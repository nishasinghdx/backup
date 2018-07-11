<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>

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

	<div class="top_bg"><img src="<?php bloginfo('template_directory'); ?>/images/quote-ttl.png" alt="quote" /></div>
	<!-- BG CENTER FORM START HERE -->
	<div id="bg_center">

		<div class="crosss popup-align"><a href="javascript:close_form()" ><img src="<?php bloginfo('template_directory'); ?>/images/562154.png" alt="close form" width="40" /></a></div>

		<!-- MAIN CENTER FORM START HERE -->
		<div id="main_center">
	<div id="main_leftarea">
	<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form1"  class="form1 popup-wid-top" id="form1" >

		 	<div class="name span3 footer-wid3">

		 	<input onkeypress="return validateFirstname(event)"  name="fname" type="text" class=""  onblur="firstname1();" placeholder="Full Name:" id="firstname"  />

			<div id="fname" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="fnamee" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>

			<input name="site" type="hidden"  value="<?php echo bloginfo(url); ?>"/>

			<input type="hidden" name="onid" id="onid" value="<?php echo $emails; ?>" />
			<input type="hidden" name="subject" id="subject" value="DesignersX Services Page Submession" />


			<input type="hidden" id="loc1" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
			</div>
		 	<div class="name span3 footer-wid3">
			<input  name="email"  value="<?php echo $_GET['email']; ?>" id="email_id" type="text"  onblur="emails1();" placeholder="Email Address:"/>
			<div id="femailid" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>

			<div id="femails" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			</div>
			<div class="name span3 footer-wid3">
			<input name="phone" id="phone" type="text" maxlength="10" onkeypress="return isNumberKey1(event)"  onblur="fphone();" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
			<div id="phones" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="phonese" class="validtn popup-left-top" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
			</div>

		<div class="name span3 footer-wid3">
			<input name="Cwebsite" type="text"   placeholder="Current Website:"   id="Cwebsite"/></div>





		<div class="name span3 footer-wid3">
				<select id="budget" name="budget"  onchange="sele(this.value)"  onfocus="if(this.value=='Select Below') this.value=''" onblur="if(this.value=='') this.value='Select Below'">
			<option value="select">Select Your Budget</option>
			 <?php $Budgets = of_get_option('budget');
				$Budget=explode(",",$Budgets);
				foreach($Budget as $Bug){
		  ?>


			<option value="<?php echo $Bug; ?>"><?php echo $Bug; ?></option>

			<?php } ?>
			</select>

			<div id="selec" class="validtn popup-left-top" ><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
			<div id="selece" class="validtn popup-left-top" ><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
     </div>


		<div id="cleck_bg">
				<div class="contact_heading popup-mar7">Services Required</div>


				<div class="cleckbox">
		<input type="checkbox" name="services[0]" value="Design and Animation" class="check" id="services0" /><span class="cleckboxtext">&nbsp;&nbsp;Design and Animation</span></div>


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

		</div>

    <div class="name span3 popup-wid-mar">

         <textarea name="Poverview" ondrop="return false;"
        id="Poverview" onkeypress="return textareacheck(event);" placeholder="Project Overview" class="popup-wid-hei" ></textarea>
          <span id="error" class="custom-red">*  Some of Special Characters not allowed</span>
     </div>





 <script>
 function isNumberKey3(evt){
 		var charCode = (evt.which) ? evt.which : event.keyCode
		console.log(charCode);
		if (charCode > 64 && charCode < 91 )
				return false;
		return true;
 }
 function isNumberKey1(evt){
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
         return false;
     return true;
 }
      var recaptcha1;
      var recaptcha2;
      var myCallBack = function() {

		  //Render the recaptcha1 on the element with ID "recaptcha1"
        recaptcha1 = grecaptcha.render('recaptcha1', {

          'sitekey' : '6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5', //Replace this with your Site key
          'theme' : 'light'
        });

        //Render the recaptcha2 on the element with ID "recaptcha2"
        recaptcha2 = grecaptcha.render('recaptcha2', {
          'sitekey' : '6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5', //Replace this with your Site key
          'theme' : 'light'
        });
      };
    </script>




<div class="name span3 popup-marwidth">
	<div id="recaptcha1"></div>
</div>

	<div class="footer-clear"></div>
<div id="show" class="footer-hei">
<span class="submitt"><img  src="<?php bloginfo('template_directory'); ?>/img/submit%20copy.jpg" alt="submit" onclick="validtnateForm()"   /></span>
	<div class="contacttext_f1" id="messagebox" >We will get back to you in 1 business day !</div>
</div>

	<div id="loader" class="footer-dis50">
<div class="submitt footer-opa">
<img src="<?php bloginfo('template_directory'); ?>/img/submit%20copy.jpg" alt="loader" /></div>
	<div class="contacttext_f1"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="loader" /></div>
		</div>

	 <div class="clear"></div>
	 </form>
	</div>

	<div id="main_leftarea1">

		<div class="rightarea_heading">What would you get?</div>

        	<div class="rightarea_contant">
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" alt="bullets" /></div>
                 <div class="rightarea_matter">A <span>phone call / Email</span> from one of our Business Consultants</div>
          	   </div>
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" alt="bullets" /></div>
                 <div class="rightarea_matter">A <span>cost estimate</span> for your Project</div>
          	   </div>
               <div class="rightarea_mattermain">
                 <div class="rightarea_bullets"><img src="<?php bloginfo('template_directory'); ?>/img/bullets.png" alt="bullets" /></div>
                 <div class="rightarea_matter">Access to our <span>Client Management System</span> after the start of the project</div>
          	   </div>

            </div>

		<div class="rightarea_heading">Customer Privacy</div>

		<div class="rightsaidarea">

			<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/top_bg.jpg" alt="img" /></div>

            <div class="rightside_center">
               <div class="customprivacy_image"><img src="<?php bloginfo('template_directory'); ?>/img/customprivacy_img.png" alt="customprivacy_image" /></div>
               <div class="customprivacy">Your information will not be shared with any 3rd parties under any circumstances.</div>
            </div>

			<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/buttom_bg.jpg" alt="img" /></div>
		</div>


			<div class="contact_heading1 custom-closenone">Security Check</div>
<input name="fsec" type="hidden" class="popup-padwid-top" id="fsec" />
		 	<div>

		 	</div>


	     </div>


		</div>
		<!-- MAIN CENTER FORM START HERE -->
	</div>
<!-- BG CENTER FORM END HERE -->


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
 x = x.trim();
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
 $('#captchaField2').val("");
$('#cleck_bg').find('input[type=checkbox]:checked').removeAttr('checked');
$(".validtn").css('display','none');


}


function get_contact_form(emailid)
{

		var id=document.getElementById(emailid).value;
		var x=id;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Please check email ID.");
			return false;
		}
		else
		{
		setTimeout(
	function()
	{
		$("#change-image").trigger("click");

	}, 1000);
		document.getElementById("email_id").value=id;
		emails1();
		document.getElementById("contact_form").style.display="block";
		document.getElementById("contact_form1").style.display="block";
		document.getElementById("container").className="transparent";
		document.getElementById("femailid").style.display="block";

		return false;
		}
}


function close_form()
{
 if (confirm("Are You Sure You Want To Close???")){
	document.getElementById("contact_form").style.display="none";
	document.getElementById("contact_form1").style.display="none";
}

}


</script>

<script type="text/javascript">
function firstname1()
{

var x=document.forms["Form1"]["fname"].value;
x= x.trim();
console.log('test');
console.log(x);
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


var data = $("#form1").serializeArray();
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form1"]["email_id"].value;
var x=document.forms["Form1"]["fname"].value;
var sel=document.forms["Form1"]["budget"].value;
var regs = /[a-zA-z]/;
var check= document.getElementById("fsec").value;

var phone = document.forms["Form1"]["phone"].value;
x= x.trim();

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


var response = grecaptcha.getResponse(recaptcha1);

if(response.length > 0){
	al(data);

}else{
	alert("Please make sure to validate Humanity");
	return false;
}

}

$("ul li").has("ul");
$("ul li ul").parent().addClass("menu-itemaa");



function al(formdata){
$("#show").hide();
$("#loader").show();


		$.ajax({
			url: "<?php bloginfo('template_directory') ?>/code.php",
			type: "POST",
			data: formdata,
			dataType: "text",
			success: function(responce){

				document.getElementById("messagebox").innerHTML = "Thank You ! Your message has been is sent!";

				 $('#show').show();
				 $('#loader').hide();
				setTimeout(function(){
					      $("#contact_form").hide();
				        $("#contact_form1").hide();
								document.getElementById("messagebox").innerHTML="We will get back to you in 1 business day !";

							 }, 3000);
				// alert(responce);



			},
			error:function(){
				alert("error creating option");

			}
		});

  }

</script>
<script type="text/javascript">
 $("#contact_form1").css("margin-left", ($(window).width() - 750)/2);

</script>
