<?php
	if(!isset($_POST['g-recaptcha-response']) || isset($_POST['g-recaptcha-response']) && empty($_POST['g-recaptcha-response'])){
		echo 'Please fill the capcha first. Before submit the form.';
		exit;
	}
	$url = "http://designersx.com/suit/service/v4_1/rest.php";
    $username = "admin";
    $password = "dxdev@699";
	$fullName = explode(" ",$_POST['name']);
	$firstName = $fullName[0];
	$lastName = '';
	if(isset($fullName[1])){
		$lastName = $fullName[1];
	}

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
				array("name" => "email1", "value" => $_POST['email']),
				array("name" => "subject_c", "value" => $_POST['subject']),
				array("name" => "message_c", "value" => $_POST['message']),
				array("name" => "ip_c", "value" => $_SERVER['REMOTE_ADDR']),
				array("name" => "page_c", "value" => $_POST['currentPage']),
				array("name" => "phone_mobile", "value" => $_POST['phone']),
				array("name" => "company_c", "value" => $_POST['company']),
				array("name" => "form_c", "value" => trim($_POST['queryForm']))
			),
		);

		$create_user = call("set_entry", $set_entry_parameters, $url);
		if(isset($create_user->id)){
			echo 'success';
		}else{
			echo 'sorry';
		}





?>
