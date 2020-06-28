<?php

// Do not edit this if you are not familiar with php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
include 'contactsetting.php';
if($post)
	{
	function ValidateEmail($email)
	{

$regex = "([a-z0-9_\.\-]+)". # name

"@". # at

"([a-z0-9\.\-]+){2,255}". # domain & possibly subdomains

"\.". # period

"([a-z]+){2,10}"; # domain extension 
return empty($eregi) ? true : false;
}

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);
$phone = stripslashes($_POST['phone']);
$answer = trim($_POST['answer']);
$verificationanswer="4"; // plz  change edit your human answer
$to=$toemail.','.$replyto;
$error = '';
$headers="";
$headers.="Reply-to:$replyto\n";
$headers .= "From: $email\n";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = "Content-Type: text/html; charset=utf-8\n\n".$headers;

// Checks Name Field



if($email && !ValidateEmail($email))
{
$error .= 'Please enter a valid e-mail address.<br />';
}





if(!$error)
	{
$messages="From: $email <br>";
$messages.="Name: $name <br>";
$messages.="Email: $email <br>";
$messages.="Phone: $phone <br>";
$messages.="Message: $message <br>";

	$mail = mail($to,$subject,$messages,$headers);	

if($mail)
	{
	echo 'OK';
if($autorespond == "yes")
{
	include("autoresponde.php");
	
}
	}

	}
	else
	{
	echo '<div class="error">'.$error.'</div>';
	}

}
?>