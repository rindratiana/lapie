<?php
	$to = "rindrap16.aps1@gmail.com";
	$subject = "My subject";
	$txt = "Hello world!";
	$headers = "From: ronaldop16.aps1@gmail.com" . "\r\n" .
	"CC: ronaldo.aps1@gmail.com";
	mail($to,$subject,$txt,$headers);
?>