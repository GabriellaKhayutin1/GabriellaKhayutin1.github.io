<?php
$name = $_POST{"name"};
$visitor_email = $_POST{"email"};
$subject = $_POST{"Phone number"};
$message = $_POST{"Message"};

$email_from = "savealife@gmail.com"
$email_subject = " New Form Submission"
$email_body = "user name $name. \n".
"user email:$visitor_email. \n."
" phone number:$phone. \n."
"user message:$message. \n."
$to = "gabriellakhayutin@gmail.com";
$headers = "From: $email_from \r\n";
mail{$to,$email_subject,$email_body,$headers}
header("location: contact.html");






