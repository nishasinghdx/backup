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




if(isset($_GET["fname"]))
{


	
	$name = $_GET['fname'];	
	$loc= $_GET["location"];
	$emailid=$_GET['email'];
	if(isset($_GET['company'])){
		$company=$_GET['company'];
	}
	if(isset($_GET['phone'])){
		$phone=$_GET['phone'];
	}
	
	$Poverview = $_GET['discription'];
	
	$service =$_GET['services'];
	$to=$_GET['onid'];
	$location=$_GET['location'];
	
	
	
	
$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$location."&format=json"));
$locn= $loc.' /  '.$urls->cityName .' , '. $urls->countryName;



date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "
Name: $name <br/>
Email: $emailid <br/>
Phone No: $phone<br/>
Company: $company<br/>
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
$mail->Subject    = "DX_LP - Hire Full Time Developer - ".$service."";

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
echo "ok";
}









?>
