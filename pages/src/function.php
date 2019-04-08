<?php
	function envoyerMail($email1,$subject1,$message1){
		echo "eto1";
		ini_set( 'display_errors', 1 );
		echo "eto2";
		error_reporting( E_ALL );

		$from = $email1;

		$to = 'rindrap16.aps1@gmail.com';

		$subject = $subject1;

		$message = $message1;

		$headers = 'From:' . $from;
		echo "eto3";
		mail($to,$subject,$message, $headers);
		echo "eto4";
	}
?>