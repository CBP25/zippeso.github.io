<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "zippesossprt2021@gmail.com";
$subject = "Zippeso email from  LandingPage";
$txt ="Name : ". $name . "\r\n  Email : " . $email . "\r\n Message : " . $message;
$headers = "From: noreply@zippeso.com" . "\r\n" .
"CC: claims@zippeso.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>