<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);

$email_form ='esteronfire@gmail.com'
$email_subject ='New message from website'; 
$email_body = "User Name : $name.\n".
              "User Email : $visitor_email .\n".
              "Subject : $subject.\n".
              "User Message : $message";

$to = 'esteronfire@
$headers = "From: $email_form \
$headers .="Reply-To: $visitor_email" . "\r\n";
mail($to,$email_subject,$email_body, $headers);
header(Location:'contact.html');
?> 

