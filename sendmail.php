<?php



$name = $_POST['FNmae'];
$email= $_POST['email1'];
$phone= $_POST['phone'];
$message= $_POST['message1'];
$to_email =  "siddhantsharmaaligarh@gmail.com";
$subject = "Mail From Social blade";
$body = "Name = ". $name . "\r\n  Email = " . $email . "\r\n  phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n";

if (mail($to_email, $subject, $body, $headers)) {
      header("location:index.html");
} else {
    echo "Email sending failed...";
}



?>