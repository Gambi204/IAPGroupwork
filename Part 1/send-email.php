<?php

$name = $_POST["name"];
$email = $_POST["email"];

// Validate the email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Invalid email, redirect to an error page or show an error message
    header("Location: error.html");
    exit;
}


$subject = "Welcome to ICS2.2! Account Verification" ;
$message = "
Hello $name,
<br>  <br>
You requested an account on ICS 2.2.
<br> <br>
In order to use this account click <a href = 'https://strathmore.edu/apply/'>here</a> to complete the registration process.
<br> <br>
Regards,<br> <br>
Systems Admin<br> <br>
ICS 2.2
";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

 //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = " mugambiriungu1@gmail.com ";
$mail->Password = " qgwg wowt fldg oocv ";

$mail->setFrom("mugambiriungu1@gmail.com", "ICS 2.2");
$mail->addAddress($email, $name);

$mail->Subject = $subject;
$mail->isHTML(true); // Set email format to HTML
$mail->Body = $message;

if ($mail->send()) {
    header("Location: sent.html");
} else {
    // Email sending failed, redirect to an error page or show an error message
    header("Location: error.html");
}
?>