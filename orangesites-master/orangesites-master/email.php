<?php

	$name = $_POST['contactname'];
	$school = $_POST['school'];
	$contact = $_POST['contactnum'];
	$message = $_POST['message'];
	//mail settings
	$to = "javelonagian@orangeapps.ph";
	$from = "admin@orangeapps.ph";
	$additional_headers = 'From: ' . $from . "\r\n" .
    'Reply-To: javelonagian@orangeapps.ph' . "\r\n";

	if(mail($to, 'New contact message', $name . ' from ' .  $school . ', contact number' . $contact . '\r\n message:'  . $message, $additional_headers  )) {

		echo "Thank you for sending us a message. We will get back to you shortly!";
	}
?>