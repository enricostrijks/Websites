<?php 
if(!empty($_POST['website'])) die();
if(!empty($_POST['email'])) die();
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];
$formcontent="Van: $name \n Bericht: $message";
$recipient = "contact@strixartz.nl";
$subject = "Contact Formulier Strix Artz";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://strixartz.nl/verstuurd.php');
?>