<?php

if(!empty($_POST)){

	$action = $_POST['action'];

	$repboxObj = new Repbox();

	switch($action){

		case "check_domain_availability" : $domain = $_POST['domain'];
											if($domain)
												$repboxObj->check_domain_availability($domain);
											else
												echo json_encode(array("ERROR" => "Please provide Domain Name"));
											break;

		case "signup" : $repboxObj->saveFormData($_POST);
						break;

		case "demo_signup" : $repboxObj->createDemoContact($_POST);
							break;

		case "contact_us" : $repboxObj->createContact($_POST);
							break;
	}

}

class Repbox{

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

		global $error;

		global $message;

		if(isset($data['stripeToken']) && $data['stripeToken'] != ''){
			$data['customer_id'] = $this->createStripeCustomer($data);
		}

		$this->createRepboxInstance($data);

		require_once ( 'class.phpmailer.php' );

		$subject = "Free Trial Request";

		$message = '<table>
			<tr><td>Full Name</td><td>'.$data['full_name'].'</td></tr>
			<tr><td>Email Address</td><td>'.$data['email'].'</td></tr>
			<tr><td>Phone</td><td>'.$data['phone'].'</td></tr>
			</table>';

		$mail_data = array(
			"subject" => $subject,
			"message" => $message,
			"from" => $data['email'],
			"from_name" => $data['full_name']
		);

		$response = $this->sendEmail($mail_data);

		if(isset($response['success']) && $response['success'] == true)
			$message = $response['message'];
		else if(isset($response['error']) && $response['error'] == true)
			$error = $response['message'];
	}

	function sendEmail($data){

		require_once ( 'class.phpmailer.php' );

		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->SMTPDebug = 1;

		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->Username = "dave@repbox.co";
		$mail->Password = "Cadence454";


		$to = array("dave@repbox.co");
		foreach($to as $addr){
			$mail->AddAddress($addr);
		}

		$to = array("devlin@repbox.co");
		foreach($to as $addr){
			$mail->AddAddress($addr);
		}

		$to = array("micah@repbox.co");
		foreach($to as $addr){
			$mail->AddAddress($addr);
		}

		$mail->Subject = $data['subject'];
		$mail->Body =  $data['message'];
		$mail->FromName = $data['from_name'];
		$mail->From = $data['email'];

		$mail->IsHTML(true);

		if($mail->Send()){
			return array("success" => true, "message" => "<span>Mail Sent. Thank you " . $data['from_name'] . ", we will contact you shortly.</span>");
		}else{
			return array("error" => true, "message" => "<span>Unable to Send mail. please try again later.</span>"); //We apologize but we are working on something at the moment. Please try again later.
		}
	}

	function createStripeCustomer($data){

		require_once("lib/Stripe.php");

		Stripe::setApiKey("sk_live_mid5Ai7if1w9AkwVwDuKhpd2");

		$token = $_POST['stripeToken'];
		$email = $_POST['email'];

		$customer = Stripe_Customer::create(array(
			"card" => $token,
			"email" => strip_tags(trim($email)),
		));

		return $customer->id;
	}

	function createRepboxInstance($data){

		$instance_name = preg_replace("/[^A-Za-z0-9 ]/", '', $data['domain']);

		$url = "http://repboxcrm.repbox.co/index.php?instance_name=".$instance_name."&email="
		.$data['email']."&first_name=".$data['firstname']."&last_name=".$data['lastname'] . "&company_name=".$data['domain'];

		if(isset($data['customer_id']) && $data['customer_id'] != '')
			$url .= "&customer_id=".$data['customer_id'];

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_HTTPGET, true);

		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);

		$result = curl_exec($ch);

		curl_close($ch);
	}

	function createDemoContact($contact_info){

		global $error, $message;

		$subject = "Demo Requested";

		$mail_message = '<table>
		<tr><td>First Name</td><td>'.$contact_info['full_name'].'</td></tr>
		<tr><td>Email Address</td><td>'.$contact_info['email'].'</td></tr>
		<tr><td>Phone</td><td>'.$contact_info['phone'].'</td></tr>
		</table>';

		$mail_data = array(
			"from" => $contact_info['email'],
			"from_name" => $contact_info['full_name'],
			"subject" => $subject,
			"message" => $mail_message
		);

		$response = $this->sendEmail($mail_data);

		if(isset($response['success']) && $response['success'] == true)
			$message = $response['message'];
		else if(isset($response['error']) && $response['error'] == true)
			$error = $response['message'];
	}

	function createContact($contact_data){

		global $error, $message;

		$subject = "Contact Us";

		$contact_message = '<table>
		<tr><td>First Name</td><td>'.$contact_data['first_name'].'</td></tr>
		<tr><td>Last Name</td><td>'.$contact_data['last_name'].'</td></tr>
		<tr><td>Email Address</td><td>'.$contact_data['email'].'</td></tr>
		<tr><td>Phone</td><td>'.$contact_data['phone'].'</td></tr>
		<tr><td>Company Size</td><td>'.$contact_data['state'] .'</td></tr>
		<tr><td> how we can help </td><td>'.$contact_data['wecan_help'].'</td></tr>
		</table>';

		$mail_data = array(
			"from" => $contact_data['email'],
			"from_name" => $contact_data['first_name']. " ".$contact_data['last_name'],
			"subject" => $subject,
			"message" => $contact_message
		);

		$response = $this->sendEmail($mail_data);

		if(isset($response['success']) && $response['success'] == true)
			$message = $response['message'];
		else if(isset($response['error']) && $response['error'] == true)
			$error = $response['message'];
	}
}