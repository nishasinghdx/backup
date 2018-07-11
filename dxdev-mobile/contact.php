<?php
/**

Template Name: contact

 */

 include (TEMPLATEPATH . '/custom-header.php');
 $suceess = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
            <div class="map">
              <iframe src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=Envato+Level+13,+2+Elizabeth+St,+Melbourne+Victoria+3000+Australia&amp;daddr=&amp;hl=en&amp;geocode=FZQHv_0d_AykCCGxVRMNIz_D7Q&amp;aq=t&amp;sll=-37.812332,144.968956&amp;sspn=0.012087,0.022724&amp;mra=prev&amp;ie=UTF8&amp;t=m&amp;iwloc=ddw0&amp;ll=-37.812332,144.968956&amp;spn=0.012087,0.022724&amp;output=embed"></iframe>
            </div>
          </div>

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
            <h3 class="title"> <span>Get In Touch</span> </h3>
            <!-- contact form -->
            <form class="row" id="form1"  action="" method="post">

              <div id = "success_msg" style = "display:none" class="success">
                <div class="success_txt">Contact form submitted!<br />
                  <strong> We will be in touch soon.</strong>
                </div>
              </div>

              <fieldset>
              <label class="name span3">
              <input onkeypress="return validateFirstname(event)" type="text" name="Fname" value="Name:" id="Fname1" >
              <!--<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>-->
              <label class="email span3">
              <input type="text" value="E-mail:" name="Email" id="Email1">
              <!--<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>-->
              <label class="phone span3">
              <input type="text" onkeypress="return isNumberKey1(event)" value="Phone:" name="Phoneno"  id="Phoneno1">
              <!--<span class="error">*This is not a valid phone number.</span> <span class="empty">*Please enter Phone</span> </label>-->
              <label class="message span9">
              <textarea name="latter2" id="latter">Message</textarea>
              <!--<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
              --><div class="clear"></div>
              <div class="name span3 footer-wid">
                <div id="html_element"></div>
              </div>
                </fieldset>
            </form>
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                async defer>
            </script>
            <div class="link-form span8">  <a class="btn-dark2"  data-type="submit" onclick="return validateForm()">Sumit comment</a> </div>

            <!-- end contact form -->
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

    var onloadCallback = function() {
      grecaptcha.render('html_element', {
        'sitekey' : '6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5'
      });
    };
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
  var str=document.getElementById("g-recaptcha-response").value;
  console.log(str);
  if(str==""){

  alert("Please make sure to validate Humanity");
  		return false;
  }else{

//  $("#show").hide();
//  $("#loader").show();
  var formdata = $("#form1").serializeArray();
  console.log(formdata);
  	 $.ajax({
          url: "http://www.designersx.com/wp-content/themes/dxdev/code.php",
          type: "POST",
    			data: formdata,
    			dataType: "text",
          success: function(responce){
            document.getElementById("success_msg").style = 'display:block';
            setTimeout(function(){ alert('ok'); document.getElementById("success_msg").style = 'display:none'; }, 6000);
            window.location.href = '<?php echo $suceess; ?>';

        },
          error:function(){

              alert("error creating option");

          }

      });


  		return false;
	//document.getElementById("form1").submit();
}
}
}





</script>



<?php get_footer();?>
</body>
</html>
