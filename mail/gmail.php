<?php
require 'PHPMailer/PHPMailerAutoload.php';
//require 'contact.php';
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'mail.thebigbeachmarathon.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                            // Enable SMTP authentication
$mail->Username = 'contact@thebigbeachmarathon.com';          // SMTP username
$mail->Password = 'Tbbm@1234'; // SMTP password
$mail->SMTPSecure = 'null';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                 // TCP port to connect to

$mail->setFrom('contact@thebigbeachmarathon.com', 'The Big Beach Marathon');
$mail->addReplyTo('roslin.albert@gmail.com', 'The Big Beach Marathon');
$mail->addAddress('contact@thebigbeachmarathon.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent ="Name: ".$_POST["username"]."<br> Email: ".$_POST["email"]." <br>Phone No: ".$_POST["Phone"]."<br> Message: ".$_POST["message"].""; 

$mail->Subject = 'Email from User';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
