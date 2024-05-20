<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$size= $_POST['option'];
$quantity= $_POST['quantity'];
$phone= $_POST['phone'];
$item= $_POST['item'];
$to = "clothex91@mail.com";
$subject = "Mail From Clothex website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n size=" .$size. "\r\n quantity" .$quantity. "\r\n phone=" .$phone. "\r\n item=" .$item; 
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
