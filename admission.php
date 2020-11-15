<?php
session_start();
include("portal/admin/functions/init.php");

$d = date("Y");
$x = $d + 1;
$y = $d."/".$x;
$f = rand(0, 99999);



$_SESSION['ent'] = $y;

$surname 	= clean($_POST['sur']);
$name 		= clean($_POST['name']);
$other		= clean($_POST['oth']);
$dob 	 	= clean($_POST['dob']);
$gender 	= clean($_POST['gender']);
$email 		= clean($_POST['email']);
$dis 		= clean($_POST['dis']);
$parent		= clean($_POST['parent']);
$rela 	 	= clean($_POST['rel']);
$occ 	 	= clean($_POST['occ']);
$res 		= clean($_POST['resadd']);
$tel1		= clean($_POST['tel1']);
$tel2 	 	= clean($_POST['tel2']);
$add1 	 	= clean($_POST['add1']);
$add2 		= clean($_POST['add2']);
$schlst		= clean($_POST['schlst']);
$clscomp 	= clean($_POST['clscomp']);

$entid 		= "PHS/Entrance/$f";
$entyr 		= $y;

$new = $surname." ".$name." ".$other;

$sql = "INSERT INTO entrance(`id`, `entyr`, `ent_id`, `surname`, `otherName`, `lastName`, `dob`, `gender`, `disablity`, `parent`, `parent_rel`, `parent_occ`, `parent_res`, `parent_tel`, `parent_tel2`, `parent_offadd1`, `parent_offadd2`, `schlst`, `classcomp`, `Active`, `email`)";
$sql.= " VALUES('1', '$entyr', '$entid', '$surname', '$name', '$other', '$dob', '$gender', '$dis', '$parent', '$rela', '$occ', '$res', '$tel1', '$tel2', '$add1', '$add2', '$schlst', '$clscomp', '0', '$email')";
$result = query($sql);
confirm($result);


	$to 		= $email;
    $from 		= "info@pleasanthomeschool.com.ng";

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Pleasnt Home School - Entrance";

    $logo = 'https://pleasanthomeschool.com.ng/img/1.jpeg';
    $url  = 'https://pleasanthomeschool.com.ng';
    $link = 'https://entrance.pleasanthomeschool.com.ng/';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Pleasnt Home School</title></head><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='Pleasnt Home School'>";
	$body .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Entrance Examination {$y}</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Dear <b>{$new},</b></p>";
	$body .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>You`ve enrolled for the {$y}Entrance Examination into Pleasnt Home School, Ota.</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>Your Entrance ID is .: <span style='color: blue'>{$entid}</span></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'>The date for your exam shall be communicated to you later</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left; color: yellow;'><a style='color:' href='{$link}'>Click here to login to your dashboard.</a></p>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: +2348169664313</p>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>or write to: info@pleasanthomeschool.com.ng</p>
		<br/>";	
	$body .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";	
	
	$body .= "</section>";	
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);





	$t 		= "info@pleasanthomeschool.com.ng";
    $fro 	= "hello@doteightinc.com";

    $header = "From: $fro";
	$header = "From: " . $fro . "\r\n";
	$header .= "Reply-To: ". $fro . "\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subjec = "Pleasnt Home School - Entrance";

    $log = 'https://pleasanthomeschool.com.ng/img/1.jpeg';
    $ur  = 'https://pleasanthomeschool.com.ng';
    $lin = 'https://admin.pleasanthomeschool.com.ng/';

	$bod = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Pleasnt Home School</title></head><body style='text-align: center;'>";
	$bod .= "<section style='margin: 30px; margin-top: 50px ; background: gold; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	$bod .= "<img style='margin-top: 35px' src='{$log}' alt='Pleasnt Home School'>";
	$bod .= "<h1 style='margin-top: 45px; color: white; background: black; width: 100%'>Entrance Examination {$y} Notification</h1>
		<br/>";
	$bod .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello Ma!</p>";
	$bod .= "<p style='margin-left: 45px; text-align: left; font-size: 17px;'>Someone registered for {$y}Entrance Examination from the website</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>kindly check your dashboard to review this activity.</p>
		<br/>";
	$bod .= "<p style='margin-left: 45px; text-align: left; color: yellow;'><a style='color:' href='{$lin}'>Click here to login to your dashboard.</a></p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>For Support, call: +2348103171902</p>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>or write to: hello@doteightinc.com</p>
		<br/>";	
	$bod .= "<p style='margin-left: 45px; text-align: left;'>Best Regards</p>";	
	
	
	$bod .= "</section>";	
	$bod .= "</body></html>";

    $sen = mail($t, $subjec, $bod, $header);


    header("location: ./enrolled");
 	
?>