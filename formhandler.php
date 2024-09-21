<?php
$name =$_POST['name'];
$Visitor_email = $_POST['email'];
$Subject = $_POST['subject'];
$message = $_POST['message'];               

$email_form ='subhashbabuvn@gmail.com';

$email_subject= 'New Form Submission';

$email_body= "User Name: $name.\n".
             "User Email: $Visitor_email .\n".
             "Subject: $Subject .\n".
             "User Message:$message .\n".
$to = 'subhashbabuvn@gmail.com';
$headers="From: $email_from \r\n";
$headers="Reply-To: $Visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>