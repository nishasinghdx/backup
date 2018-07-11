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

<div class="top_bg"><img src="<?php bloginfo('template_directory'); ?>/images/quote-ttl.png" alt="quote-ttl" /></div>
<!-- BG CENTER FORM START HERE -->
<div id="bg_center">

	<div style=" margin-top: -30px; text-align: right;" class="crosss"><a href="javascript:close_form()" ><img src="<?php bloginfo('template_directory'); ?>/images/562154.png" alt="close form" width="40" /></a></div>

	<!-- MAIN CENTER FORM START HERE -->
	<div id="main_center">
<div id="main_leftarea">
<form action="<?php bloginfo(template_directory) ?>/code.php" method="post"  name="Form1" style="width:381px; margin-top:-30px;"  class="form1" id="form1" >

		<div class="name span3" style="width: 300px;">
		<input name="fname" type="text" class=""  onblur="firstname1();" placeholder="Full Name:" id="firstname"  />

		<div id="fname" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
		<div id="fnamee" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="cross" /></div>

		<input name="site" type="hidden"  value="<?php echo bloginfo(url); ?>"/>

		<input type="hidden" name="onid" id="onid" value="<?php echo $emails; ?>" />

		<input type="hidden" id="loc1" name="location" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
		</div>
		<div class="name span3" style="width: 300px;">
		<input  name="email"  value="<?php echo $_GET['email']; ?>" id="email_id" type="text"  onblur="emails1();" placeholder="Email Address:"/>
		<div id="femailid" style="float:left;padding-left:6px;padding-top:8px; display:none;"  class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>

		<div id="femails" style="float:left;padding-left:6px;padding-top:8px;display:none; " class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="buttom_bg" /></div>
		</div>
		<div class="name span3" style="width: 300px;">
		<input name="phone" id="phone" type="text"  onblur="fphone();" onkeypress="return isNumberKey(event);" placeholder="Phone Number:"  />
		<div id="phones" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
		<div id="phonese" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" > <img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
		</div>

	<div class="name span3" style="width: 300px;">
		<input name="Cwebsite" type="text"   placeholder="Current Website:"   id="Cwebsite"/></div>
	<div class="name span3" style="width: 300px;">
			<select id="budget" name="budget"  onchange="sele(this.value)"  onfocus="if(this.value=='Select Below') this.value=''" onblur="if(this.value=='') this.value='Select Below'">
		<option value="select">Select Your Budget</option>
		 <?php $Budgets = of_get_option('budget');
			$Budget=explode(",",$Budgets);
			foreach($Budget as $Bug){
	  ?>


		<option value="<?php echo $Bug; ?>"><?php echo $Bug; ?></option>

		<?php } ?>
		</select>

		<div id="selec" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/tick.png" alt="tick" /></div>
		<div id="selece" style="float:left;padding-left:6px;padding-top:8px;display:none;" class="validtn" ><img src="<?php bloginfo('template_directory'); ?>/img/1323948774_DeleteRed.png" alt="tick" /></div>
 </div>


	<div id="cleck_bg">
			<div class="contact_heading" style="margin:7px 0px 5px 10px;">Services Required</div>


			<div class="cleckbox">
	<input type="checkbox" name="services[0]" value="Design and Animation" class="check" id="services0" /><span class="cleckboxtext">&nbsp;Design and Animation</span></div>


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




<div class="name span3" style="margin-top:15px;width: 350px;">

	 <textarea name="Poverview" ondrop="return false;"
	id="Poverview" onkeypress="return textareacheck(event);" placeholder="Project Overview" style="width: 169%!important;height:150px;" ></textarea>
	  <span id="error" style="color: Red; display: none">*  Some of Special Characters not allowed</span>
 </div>

 <div class="name span3" style="margin-top:10px;width: 475px;">
	<div class="" >
	<div style="width:220px; margin-left: 8px;float:left;" >
	<img src="<?php bloginfo('template_directory'); ?>/captcha.php" id="captchaImage" alt="captchaImagecaptchaImage"  /></div>
<div class="" style="float:left; width: 245px;" >

<span  onclick="document.getElementById('captchaImage').src='<?php bloginfo('template_directory'); ?>/captcha.php?'+Math.random();document.getElementById('captchaField').focus();" id="change-image" style="cursor:pointer;">click if text not readable.</span>
<input type="hidden" name="validateror" value="false" id="validateror" />
<input type="text" name="captcha"  id="captchaField" style="width:170px;"/>
	 </div>
  </div>


  </div>



<div style="clear:both;"></div>
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



		<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/top_bg.jpg" alt="tick" /></div>

		<div class="rightside_center">
<div class="customprivacy_image"><img src="<?php bloginfo('template_directory'); ?>/img/customprivacy_img.png" alt="customprivacy_image" /></div>
		   <div class="customprivacy">Your information will not be shared with any 3rd parties under any circumstances.</div>
		</div>

		<div class="rightsaid_bannertop"><img src="<?php bloginfo('template_directory'); ?>/img/buttom_bg.jpg" alt="buttom bg" /></div>
	</div>


		<div class="contact_heading1" style="display:none;">Security Check</div>
<input name="fsec" type="hidden" style="width:150px;margin-left:20px;padding-top:10px;display:none" id="fsec" />
		<div>

		</div>


	 </div>


	</div>
	<!-- MAIN CENTER FORM START HERE -->
</div>
<!-- BG CENTER FORM END HERE -->


<script type="text/javascript">

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
$('#captchaField').val("");
$('#cleck_bg').find('input[type=checkbox]:checked').removeAttr('checked');
$(".validtn").css('display','none');


}



function get_contact_form()
{

	var id=document.getElementById("getemail").value;
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
	$("#firstname").focus();
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


	var head ="<?php bloginfo(url) ?>";
	var bemail="<?php echo get_option('admin_email')?>";
	var email = document.getElementById("email_id").value;
	if(email != ""){
	 if (confirm("Are You Sure You Want To Close???"))
{

document.getElementById("contact_form").style.display="none";
	document.getElementById("contact_form1").style.display="none";

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{


}
}
xmlhttp.open("GET","<?php bloginfo(template_directory) ?>/code.php?mode=close&value="+email+"&values="+bemail,true);
xmlhttp.send();



	}
	}else{

	document.getElementById("contact_form").style.display="none";
	document.getElementById("contact_form1").style.display="none";


	}

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
	specialKeys.push(32); //Right

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
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms["Form1"]["email_id"].value;
var x=document.forms["Form1"]["fname"].value;
var sel=document.forms["Form1"]["budget"].value;
var regs = /[a-zA-z]/;
var check= document.getElementById("fsec").value;

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

return false;
}
}

$("ul li").has("ul");
$("ul li ul").parent().addClass("menu-itemaa");



function al(){

var str=document.getElementById("captchaField").value;
if(str==""){

alert("Please make sure to validate Humanity");
	return false;
}else{

$("#show").hide();
$("#loader").show();

var xmlhttp;

if (window.XMLHttpRequest){
	xmlhttp=new XMLHttpRequest();
}else{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status==200){
	if(xmlhttp.responseText=="ok"){
	document.getElementById("validateror").value = "true";
	var fname = $('#firstname').val();
	var loc1 = $('#loc1').val();
	var email_id = $('#email_id').val();
	var phone = $('#phone').val();
	var Cwebsite = $('#Cwebsite').val();
	if (Cwebsite.indexOf("http://") >= 0)
	{
	Cwebsite = Cwebsite.replace(/^http:\/\//i, '');
	}else if (Cwebsite.indexOf("https://") >= 0)
	{
	Cwebsite = Cwebsite.replace(/^https:\/\//i, '');
	}else{
	Cwebsite = Cwebsite;
	}
	var budget = $('#budget').val();
	var Poverview = $('#Poverview').val();
	var onid = $('#onid').val();
	var validateror = $('#validateror').val();
	var CheckedTrue = 0;
	var CheckboxList = $(".check").attr('cb', true);
	for(var i = 0; CheckboxList.length > i; i++)
	{
	   if(CheckboxList.get(i).checked == true)
		{
			var servc = servc+","+$('#services'+i).val();

		}
	}

	$.ajax({
	url: "<?php bloginfo('template_directory') ?>/code.php?fname="+fname+"&email_id="+email_id+"&phone="+phone+"&cwebsite="+Cwebsite+"&budget="+budget+"&Poverview="+Poverview+"&servc="+"fdgfdg"+"&loc1="+loc1+"&onid="+onid+"&validateror="+validateror+"",
	type: "get",
	dataType: "text",
	success: function(responce){
		$("#show").show();
		$("#loader").hide();
		$("#contact_form").hide();
		$("#contact_form1").hide();
		$("#contact_form5").show();
		$("#contact_forms5").show();

	},
	error:function(){
		alert("error creating option");

	}

});

	return false;
	//document.Form1.submit();


	}else{

	$("#show").show();
	$("#loader").hide();

		alert("Please enter correct captcha code ");
		return false;

	}
	}
}
xmlhttp.open("GET","<?php bloginfo(template_directory) ?>/form.php?q="+str,true);
xmlhttp.send();
return false;
}
}



</script>
<script type="text/javascript">
$("#contact_form1").css("margin-left", ($(window).width() - 750)/2);
$(window).resize(function() {
var windowWidth = $(window).width();
if(windowWidth < 1000){
$("#contact_form1").css("margin-left", ($(window).width() - 340)/2);
}else{
$("#contact_form1").css("margin-left", ($(window).width() - 750)/2);
}
});
</script>
