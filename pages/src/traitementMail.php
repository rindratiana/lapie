<?php
	include 'function.php';
	$nom = $_POST['nom'];
	$mail = $_POST['adresse_mail'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

	envoyerMail($mail,$objet,$message);
?>