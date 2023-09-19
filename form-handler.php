<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$order = $_POST['order'];
$message = $_POST['message'];

$email_from = 'thecuteenergy@gmail.com';

$email_subject = 'New Order Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Order: $order.\n".
              "User Message: $message.\n";


$to = 'thecuteenergy@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
$sent = mail($to, $email_subject, $email_body, $headers);
if ($sent) {
    header("Location: contact.html");
} else {
    echo "Error sending email.";
}


?>