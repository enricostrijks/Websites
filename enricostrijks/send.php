<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Van: $name \n Bericht: $message";
$recipient = "strijkse@gmail.com";
$subject = "Contact Formulier Enrico Strijks";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://enricostrijks.nl/verstuurd.php');
?>