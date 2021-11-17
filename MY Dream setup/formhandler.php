<?php
$name = $_POST ['name'];
$visitor_email= $_Post['email'];
$subject= $_Post['subject'];
$message= $_Post['message'];

$email_from = 'info@yourwebsite.com'
    
$email_subject = 'New Form Submission'
    
 $email_body = "User Name = $name. \n".
                "User Email = $visitor_email. \n".
                "Subject = $subject. \n".
                "User Message = $message. \n";

$to = 'sagarsinghhi123@gmailcom';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,@headers)
    
header("Location: index.html");

?>