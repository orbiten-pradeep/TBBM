<?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}
require 'PHPMailer/PHPMailerAutoload.php';
//require_once("mail_configuration.php");

$mail = new PHPMailer();
// for server use
//$emailBody = "http://thebigbeachmarathon.com/changepass.php?active_code=$str&email=$email";
$emailBody = "http://localhost/vasan_tbbm/trunk/changepass.php?active_code=$str&email=$email";
$mail->isSMTP();                                   // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                            // Enable SMTP authentication
// $mail->Username = 'roslin.albert@gmail.com';          // SMTP username
// $mail->Password = 'RajeshRosal'; // SMTP password
// $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;   
$mail->Host = 'sg2plcpnl0183.prod.sin2.secureserver.net';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'contact@thebigbeachmarathon.com';          // SMTP username
$mail->Password = 'Tbbm@1234'; // SMTP password
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                               // TCP port to connect to
$mail->SMTPDebug = 0;
$mail->setFrom('contact@thebigbeachmarathon.com', 'The Big Beach Marathon ');
$mail->addReplyTo('contact@thebigbeachmarathon.com', 'The Big Beach Marathon');
$mail->ReturnPath='contact@thebigbeachmarathon.com';	
$mail->AddAddress($email);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';

}
?>
