<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom:$email \t $name \nMessage: $message";
$recipient = "info@shahriar.in";
$subject = "Contact Form";
$headers = "Content-Type: text/html; charset=UTF-8";
mail($recipient, $subject, $formcontent, $headers) or die("Error!");
echo "Thank You! E-mail send.";

?>