<?php
	function envoyerMail($email1,$subject1,$message1){
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );

		$from = $email1;

		$to = 'rindrap16.aps1@gmail.com';

		$subject = $subject1;

		$message = $message1;

		$headers = 'From:' . $from;
		mail($to,$subject,$message, $headers);
	}
?>