<?php
$name = $_POST['name'];
$visistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from ='bikufirstwebpage.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
                "User Email: $visistor_email.\n"
                "Subject: $subject.\n"
              "User Message: $message.\n";


$to = 'bikutech44@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visistor_email \r\n";
    

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

    
    
?>
