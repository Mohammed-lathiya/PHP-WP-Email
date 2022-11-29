<?php
	$to      = 'example@gmail.com';
	$subject = 'Test Mail From MD';
	$message = 'hello';
	$headers = 'From: info@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
	$headers[] = 'From: '.get_option( 'blogname' ).' <'.get_option( 'admin_email' ).'>';
	
	if(mail($to, $subject, $message, $headers)) {
		echo 'Success';
	} else {
		echo 'Fail';
	}
?>
