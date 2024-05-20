<?php
// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$size = $_POST['option'];
$quantity = $_POST['quantity'];
$phone = $_POST['phone'];
$item = $_POST['item'];
$to = "clothex91@mail.com";
$subject = "Mail From Clothex website";
$txt = "Name: $name \r\nEmail: $email \r\nMessage: $message \r\nSize: $size \r\nQuantity: $quantity \r\nPhone: $phone \r\nItem: $item";
$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";

// Attempt to send email
if (mail($to, $subject, $txt, $headers)) {
    header("Location: thankyou.html");
    exit;
} else {
    echo "Failed to send email. Please try again later.";
}
?>
