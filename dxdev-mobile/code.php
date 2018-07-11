<?php

/* Wp Config FIle and SuiteCrm Config */
include('../../../wp-config.php');
$url = "http://designersx.com/suit/service/v4_1/rest.php";
$username = "admin";
$password = "dxdev@699";


/* Google ReCapch Test */
$post_data = http_build_query(
    array(
        'secret' => '6LfnexsUAAAAAA1YOQ9j0QwByg8mwXLQ7TIi1Ml0',
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);

//print_r($response);
if ($result->success) {

//function to make cURL request
function call($method, $parameters, $url)
{
	ob_start();
	$curl_request = curl_init();
	curl_setopt($curl_request, CURLOPT_URL, $url);
	curl_setopt($curl_request, CURLOPT_POST, 1);
	curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	curl_setopt($curl_request, CURLOPT_HEADER, 1);
	curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
	$jsonEncodedData = json_encode($parameters);
	$post = array(
		"method" => $method,
		"input_type" => "JSON",
		"response_type" => "JSON",
		"rest_data" => $jsonEncodedData
	);
	curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
	$result = curl_exec($curl_request);
	curl_close($curl_request);
	$result = explode("\r\n\r\n", $result, 2);
	$response = json_decode($result[1]);
	ob_end_flush();
	return $response;
}

	//login ---------------------------------------------
	$login_parameters = array(
		"user_auth" => array(
			"user_name" => $username,
			"password" => md5($password),
			"version" => "1"
		),
			"application_name" => "RestTest",
			"name_value_list" => array(),
	);

	$login_result = call("login", $login_parameters, $url);
	//get session id
	$session_id = $login_result->id;
	//extract post data -------------------------------------
	extract($_POST);

	// data preparing

	$fullName = explode(" ",$fname);
	$firstName = $fullName[0];
	$lastName = '';
	if(isset($fullName[1])){
		$lastName = $fullName[1];
	}
	if(isset($services) && !empty($services)){
		foreach ($services as $service){
			$services_c = $services_c.', '.$service;
		}
	}

	/* Get Location from IP*/
	$urls = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$location."&format=json"));
	$locn= $urls->cityName .' , '. $urls->countryName;

	//create account -------------------------------------
	$set_entry_parameters = array(
		//session id
		"session" => $session_id,

		//The name of the module.
		"module_name" => "Leads",

		//Record attributes
		"name_value_list" => array(
			//to insert a record
			array("name" => "first_name", "value" => $firstName),
			array("name" => "last_name", "value" => $lastName),
			array("name" => "email1", "value" => $email),
			array("name" => "subject_c", "value" => $subject),
			array("name" => "message_c", "value" => $Poverview),
			array("name" => "ip_c", "value" => $location),
			array("name" => "alt_address_city", "value" => $urls->cityName),
			array("name" => "alt_address_state", "value" => $urls->regionName),
			array("name" => "alt_address_postalcode", "value" => $urls->zipCode),
			array("name" => "alt_address_country", "value" => $urls->countryName),
			array("name" => "website", "value" => $Cwebsite),
			array("name" => "phone_mobile", "value" => $phone),
			array("name" => "budget_c", "value" => $budget),
			array("name" => "services_c", "value" => $services_c),
			array("name" => "page_c", "value" => $subject),
			array("name" => "department", "value" => 'Sales'),
			array("name" => "form_c", "value" => 'Quotation')
		),
	);

	if(!empty($email)){
		$create_user = call("set_entry", $set_entry_parameters, $url);
	}

}






?>
