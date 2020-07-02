<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Van: $name \n Bericht: $message";
$recipient = "contact@strixartz.nl";
$subject = "Contact Formulier StrixArtz";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Bedankt voor uw contact er word zo snel mogelijk gekeken naar uw formulier!";
?>

<p>Klik <a href="index.html">hier</a> om terug te keren naar de hoofd pagina!</p>