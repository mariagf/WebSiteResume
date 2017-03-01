<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$email = $_POST['email'];
	$name = $_POST['name'];
	$to="maria@garciafdez.com";
	$subject="MGF Web Contact Form Message";
	$from = $name.' <'.$email.'>';
	$body= $_POST['message'];
	$message = nl2br($body);
	$headers = "From: " .($from) . "\r\n";
	$headers .= "Reply-To: ".($from) . "\r\n";
	$headers .= "Return-Path: ".($from) . "\r\n";;
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
	if(mail($to,$subject,$message,$headers)){
		echo "SEND";
	}
}
?>