<?php


$databasehost = "localhost";
$databasename = "designer_wrdp3";
$databaseusername ="designer_wrdp3";
$databasepassword = "rV2bkNysvWd[";
$connection = mysql_connect($databasehost,$databaseusername,$databasepassword) or die(mysql_error());
mysql_select_db($databasename) or die(mysql_error());

$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME']."/site4/"; 
include('../../../wp-config.php');
mysql_connect("localhost","designer_lms","Leads2013");
mysql_select_db("designer_lms");



if(isset($_GET["type"])   && $_GET["type"] == "contact" )
{

$fname=$_GET['fname'];
$emailid=$_GET['email'];
$con=$_GET['phone1'];
$latter=$_GET['latter'];
$location=$_GET['loc'];
$to=$_GET['onids'];

$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$location."&format=json"));
$locn= $location.' /  '.$urls->cityName .' , '. $urls->countryName;

date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();
$body             = "
DesignersX Contact Form has been Filled, Please check below<br/><br/>

Name: $fname <br/>
Phone No: $con <br/>
Email: $emailid <br/>
Location: $locn<br/>
Project Overview: $latter <br/>

	
";

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "";                 // sets the prefix to the servier

$mail->Host       = "designersx.com";      // sets GMAIL as the SMTP server

$mail->Port       = 25;                   // set the SMTP port for the GMAIL server

$mail->Username   = "notification@designersx.com";  // GMAIL username
$mail->AddReplyTo($emailid, $name);
$mail->Password   = "DxdeV29/6";            // GMAIL password

$mail->SetFrom('notification@designersx.com', $fname);

$mail->Subject    = "DesignersX Contact Form Submission";

$mail->AltBody    = "DesignersX Contact Form has been Filled, Please check below"; // optional, comment out and test

$mail->MsgHTML($body);


$what_to_find = ',';
if (preg_match('/\b' . $what_to_find . '\b/', $to)) { 
 $address = explode("," , $to);
 foreach($address as $addres){
	$mail->AddAddress($addres); 
 }
}else{
	$mail->AddAddress($to); 

}

if(!$mail->Send()) {

} else {

}
 exit;




}



if(isset($_GET["fname"])   && $_GET["validateror"] == "true" )
{
	$dsx = "http://".$_SERVER['SERVER_NAME']."/site4/"; 
	$loc= $_GET["loc1"];
	$fname=$_GET['fname'];
	$emailid=$_GET['email_id'];
	$con=$_GET['phone'];
	$Budget=$_GET['budget'];
	$Coupon=$_GET['coupon'];
	$cwebsite=$_GET['cwebsite'];
	$ftype ="quote";
	$discprition=$_GET['Poverview'];
	$to=$_GET['onid'];
	if($Coupon != "notapplied"){
	$sql = "SELECT * FROM wp_coupon WHERE coupon = '" . mysql_real_escape_string($Coupon) . "' ";
	$result = mysql_query($sql,$connection);
    $row = mysql_fetch_array($result);
     if(mysql_num_rows($result)) {
	 $sername =  get_cat_name($row['services'] );	 
    $Coupon = $Coupon." , ".$row['discount']." discount on ".$sername." Service" ;
    }
}else{
	 $Coupon = "No Coupon Applied";

}
	
	
	
$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$loc."&format=json"));
$locn= $loc.' /  '.$urls->cityName .' , '. $urls->countryName;

	
	mysql_query("insert into leads values('','$fname','$emailid','$con','$Budget','$cwebsite','$discprition','$locn','$junk','','0') ");	
	$id = mysql_insert_id();
	
if (strpos($_GET['servc'],',') != false) {
   $servicesss = explode(",",$_GET['servc']);
	$i=1;
	foreach($servicesss as $services){
		if($i == 1 ){		
		}else{
			mysql_query("insert into services values('','$id','$services','') ");
			$servicess = $servicess.",".$services;
		}
	$i++;
	}
}else{

$servicess = $_GET['servc'];
}


	
	
	 
	
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();
$body             = "
DesignersX Quotation Request Form has been Filled, Please check below<br/><br/>

<b>Name: </b>$fname <br/><br/>
<b>Phone No: </b>$con <br/><br/>
<b>Email: </b>$emailid <br/><br/>
<b>Location: </b>$locn<br/><br/>
<b>Comapny: </b>$cwebsite <br/><br/>
<b>Services Required: </b>$servicess<br/><br/>
<b>Coupon: </b>$Coupon<br/><br/>
<h4>Project Overview: </h4>$discprition 
	
";

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "";                 // sets the prefix to the servier

$mail->Host       = "designersx.com";      // sets GMAIL as the SMTP server

$mail->Port       = 25;                   // set the SMTP port for the GMAIL server

$mail->Username   = "notification@designersx.com";  // GMAIL username
$mail->AddReplyTo($emailid, $name);
$mail->Password   = "DxdeV29/6";            // GMAIL password

$mail->SetFrom('notification@designersx.com', $fname);

$mail->Subject    = "DX_LP - Qutation/Consulation Request - ".$servicess."";

$mail->AltBody    = "DesignersX Quotation Request Form has been Filled, Please check below"; // optional, comment out and test

$mail->MsgHTML($body);


$what_to_find = ',';
if (preg_match('/\b' . $what_to_find . '\b/', $to)) { 
 $address = explode("," , $to);
 foreach($address as $addres){
	$mail->AddAddress($addres); 
 }
}else{
	$mail->AddAddress($to); 

}

if(!$mail->Send()) {

} else {

}
 exit;

}

if(isset($_GET['mode']) && $_GET['value'] =="" && $_GET['mode'] =="close")
{

$dsx = "http://".$_SERVER['SERVER_NAME']."/designersx4/"; 
 header("location:$dsx");

}
if(isset($_GET['mode']) && $_GET['value'] !="" && $_GET['mode'] =="close")
{



$to = $_GET['value'];
$dsx = "http://".$_SERVER['SERVER_NAME']."/designersx4/"; 

require_once 'mail/Mandrill.php'; //Not required with Composer
$mandrill = new Mandrill('a8LaLPYYZKt7ewDwYDK3ww');

$message = array(
    'subject' => 'Form Abondoned at DesignersX Website',
    'from_email' => 'notification@designersx.com',
	'from_name' => 'DesignersX Support Staff',
    'html' => 'Site Viewer Information',
    'to' => array(array('email' =>$to , 'name' => '')),
    'merge_vars' => array(array(
        'rcpt' => $to,
        'vars' =>
        array())));

$template_name = 'designersX';
$template_content = array();

$mandrill->messages->sendTemplate($template_name, $template_content, $message);
exit;

}

if(isset($_GET["service"]))
{


	$dsx = "http://".$_SERVER['SERVER_NAME']."/site4/"; 
	$name = $_GET['fnamenew'];	
	$loc= $_GET["location"];
	$emailid=$_GET['email'];
	$Poverview=$_GET['Poverview'];
	$service=$_GET['service'];
	$ftype ="service";
	$to=$_GET['onids'];
	
$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$loc."&format=json"));
$locn= $urls->cityName .' , '. $urls->countryName;
	mysql_query("insert into leads values('','$name','$emailid','','','','','$Poverview','$loc','$ftype','') ");	


date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "
Name: $name <br/>
Email: $emailid <br/>
Services Required: $service <br/><br/>
Description: $Poverview<br/>
Location: $locn<br/>
	
";

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

// 1 = errors and messages

// 2 = messages only

$mail->SMTPAuth   = true;                  // enable SMTP authentication

$mail->SMTPSecure = "";                 // sets the prefix to the servier

$mail->Host       = "designersx.com";      // sets GMAIL as the SMTP server

$mail->Port       = 25;                   // set the SMTP port for the GMAIL server

$mail->Username   = "notification@designersx.com";  // GMAIL username

$mail->Password   = "DxdeV29/6";            // GMAIL password

$mail->SetFrom("notification@designersx.com",$name);
$mail->AddReplyTo($emailid, $name);
$mail->Subject    = "DesignersX Service Requirement";

$mail->AltBody    = "DesignersX Service Requirement"; // optional, comment out and test

$mail->MsgHTML($body);

$what_to_find = ',';
if (preg_match('/\b' . $what_to_find . '\b/', $to)) { 
 $address = explode("," , $to);
 foreach($address as $addres){
	$mail->AddAddress($addres); 
 }
}else{
	$mail->AddAddress($to); 

}

if(!$mail->Send()) {

} else {

}

}







if(isset($_GET['coupon']) && $_GET['coupon'] != "")
{
		$date = new DateTime();
	$current = date('d-m-Y');
	$timestamp1 = strtotime($current);
	 
	 
    $sql = "SELECT * FROM wp_coupon WHERE coupon = '" . mysql_real_escape_string($_GET['coupon']) . "'  and edate >= '".$timestamp1."'  ";
    $result = mysql_query($sql,$connection);
    $row = mysql_fetch_array($result);
     if(mysql_num_rows($result)) {
	 $sername =  get_cat_name($row['services'] );	 
    echo "you get ".$row['discount']." discount on ".$sername." Service";
    }else{
		echo "nexist";
	}

}


?>
