<?php

if(!empty($_POST)){
	
	$action = $_POST['action'];
	
	$signupObj = new Signup();
	
	switch($action){
		
		case "check_domain_availability" : 
			$domain = $_POST['domain'];
			if($domain)
				$signupObj->check_domain_availability($domain);
			else
				echo json_encode(array("ERROR" => "Please provide Domain Name"));
			break;
		case "saveFormData" : 
			$signupObj->saveFormData($_POST);
			break;
			
	}
	
}

class Signup{
	
	function check_domain_availability($domain){
		
		$instance_name = preg_replace("/[^A-Za-z0-9 ]/", '', $domain);
		
		$url = "http://repboxcrm.repbox.co/check_domain_availability.php?instance_name=" . $instance_name;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url); 
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		
		$response = curl_exec($ch); 
		
		curl_close($ch);

		echo $response;	
	}
	
	/**
	 * Fuction check the valid Domain
	 * if Domain is valid then pass the data on the domain 
	 * @return success message if response is true otherwise set error.
	 */
	public function saveFormData($data){
		
		$instance_name = preg_replace("/[^A-Za-z0-9 ]/", '', $data['domain']);

		$url = "http://repboxcrm.repbox.co/index.php?instance_name=".$instance_name."&email="
		.$data['email']."&first_name=".$data['firstname']."&last_name=".$data['lastname'] . "&company_name=".$data['domain'];

		$ch = curl_init(); 
		
		curl_setopt($ch, CURLOPT_URL, $url); 

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		
		$result = curl_exec($ch); 
		
		curl_close($ch);
		
		echo json_encode(array("success" => true, "message" => "Thank you for Sign up. Please check your email."));
	}
}

