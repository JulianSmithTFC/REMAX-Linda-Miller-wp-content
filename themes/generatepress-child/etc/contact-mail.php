<?php

$current_url = $_GET["url"];



if(isset( $_POST['fname'])){
    $fname = $_POST['fname'];
}

if(isset( $_POST['lname'])){
    $lname = $_POST['lname'];
}

if(isset( $_POST['phone'])){
    $phone = $_POST['phone'];
}

if(isset( $_POST['email'])){
    $email = $_POST['email'];
}

if(isset( $_POST['message'])){
    $formMessage = $_POST['message'];
}



$subject = 'Website Contact Form Submission';

$mailheader .= "From: postmaster@southerntechfusion.com \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
$message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
$message .= "<tr><td><strong>Message:</strong></td><td > $formMessage </td></tr>";
$message .= "</table>";
$message .= "</body></html>";

$recipients = $_POST['strFormEmailRecipients'];

mail($recipients, $subject, $message, $mailheader) or die("Error!");

header('Location: ' . $current_url);

?>