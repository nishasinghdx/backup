

<script type="text/javascript">

function checkcoupon(coupon){


		  $.ajax({
        url: "<?php bloginfo('template_directory') ?>/code.php?coupon="+coupon+"",
        type: "get",
        dataType: "text",
        success: function(responce){
		responces = 	$.trim(responce);
        if(responces == "nexist"){ 
			
				$("#cpnmsg").html("Sorry , Coupon code is not valid");
				$("#Ccoupon").val("");
		}else{
			$("#cpnmsg").html(responce);
		}		
        },
        error:function(){
            //alert("error");
           
        }
		
    });
	
	
}

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


		 if (confirm("Are You Sure You Want To Close???"))
		{ 

		document.getElementById("contact_form").style.display="none";
		document.getElementById("contact_form1").style.display="none";
		} 
		else{
		
		
		
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
var address = document.forms["Form1"]["email"].value;
var x=document.forms["Form1"]["fname"].value;
var regs = /[a-zA-z]/;
var phone = document.forms["Form1"]["phone"].value;
if (x==null || x=="")
 {
	alert('Please enter your full name');
  
  return false;
  }else if(reg.test(address) == false) 
{
		
      alert('Please enter a valid email address');
      return false;
   }else{
		
			al();
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
	
		var Poverview = $('#Poverview').val();	
		var coupon = $('#Ccoupon').val();
		if(coupon != ""){
			coupon = coupon;
		}else{
			coupon = "notapplied";
		}		
		
		var onid = $('#onid').val();
		var validateror = $('#validateror').val();
		
			var servc = $('#services').val();	
	 
		
		  $.ajax({
        url: "<?php bloginfo('template_directory') ?>/codeland.php?fname="+fname+"&email_id="+email_id+"&phone="+phone+"&cwebsite="+Cwebsite+"&Poverview="+Poverview+"&servc="+servc+"&loc1="+loc1+"&onid="+onid+"&validateror="+validateror+"&coupon="+coupon+"",
        type: "get",
        dataType: "text",
        success: function(responce){

		
			alert("Thanks for your time, We have received your consultation request. We will get back to you in 24 hours for your requirement.");
			$("#close").click();
			$("#show").show();
			$("#loader").hide();
		
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