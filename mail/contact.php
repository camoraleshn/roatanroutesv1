<?php 

if ( isset($_POST) ){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'] . 
				"Atte. " . "\r\n" .
				$name . "\r\n" .
				"E-mail: " . $email . "\r\n" .
				"Phone: " . $phone;
	// $header = "From: " . $email;

	mail("camorales84@gmail.com", "ROATAN ROUTES Inc. Contact Message", $message) or die('someting went wrong!');
	//header('Location: thankyou.html');

	return json_encode(['status'=>'ok', 'number'=>200]);
}

header('Location: 404.html');