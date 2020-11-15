<?php
session_start();

    $t  		= "info@pleasanthomeschool.com.ng";
    $from 		= $_POST['email'];
    $fname		= $_POST['fname'];
    $tel 		= $_POST['phone'];
    $message 	= $_POST['msg'];

    $header = "From: $fro";
	$header = "From: " . $fro . "\r\n";
	$header .= "Reply-To: ". $fro . "\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subjec = "Pleasant Home School - Website Mesage";

    $log = 'https://pleasanthomeschool.com.ng/img/1.jpeg';
    $ur  = 'https://pleasanthomeschool.com.ng';

	$bod = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Pleasant Home School Model School</title></head><body style='text-align: center;'>";
	$bod .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$bod .= "<img style='margin-top: 35px' src='{$log}' alt='Pleasant Home School'>";
	$bod .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Contact Notification</h1>
		<br/>";
	$bod .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello sir!</p>";
	$bod .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>Someone contacted you from the website</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Full Name: <b>{$fname}</b></p>";
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Email Address: <b>{$from}</b></p>";
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Telephone: <b>{$tel}</b></p>";
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Message Sent: <b>{$message}</b></p> <br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: +2348103171902</p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>or write to: hello@doteightplus.com</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";	

	$bod .= "</section>";	
	$bod .= "</body></html>";

    $sen = mail($t, $subjec, $bod, $header);
    header("location: ./sent");
?>