<?php

print_r($_POST);
$message_sent = false;

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = /*"bhumika0380@xavier.edu.np"*/"rani9225@gmail.com";
// $to =;

$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");

$message_sent = true;
}
?>