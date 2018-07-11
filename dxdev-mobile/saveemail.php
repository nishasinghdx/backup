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

if(isset($_GET["email"]))
{ 

$email=$_GET['email'];
$location=$_GET['loc1'];
$to=$_GET['onidss'];
$service = $_GET['service'];

$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$location."&format=json"));
$locn= $location.' /  '.$urls->cityName .' , '. $urls->countryName;

date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();
$body             = "
DesignersX Quotation Request Form has been Filled, Please check below<br/><br/>

Email: $email <br/>
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
$mail->AddReplyTo( $email);
$mail->Password   = "DxdeV29/6";            // GMAIL password

$mail->SetFrom("notification@designersx.com",$name);

$mail->Subject    = "DX_LP - Qutation/Consulation Request - ".$service."";

$mail->AltBody    = "Qutation/Consulation Request"; // optional, comment out and test

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





?>
