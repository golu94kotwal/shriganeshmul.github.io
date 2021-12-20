<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_mob = $_POST['mob'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@websitedomain.com';

$email_subject = 'New Enquiry';

$email_body =  "User Name: $name.\n".
				"User Email: $email.\n".
				"User Mobile: $mob.\n".
				"Subject: $subject.\n".
				"Message: $message.\n";

$to = 'golu94kotwal@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>