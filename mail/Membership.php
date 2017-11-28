
<?php
// if(!class_exists('PHPMailer')) {
//     //require('phpmailer/class.phpmailer.php');
//    //require('phpmailer/class.smtp.php');
// }
require 'PHPMailer/PHPMailerAutoload.php';
//require_once("mail_configuration.php");

require_once '../class/dbconnect.php';

     $query = "";
      $query = $DBcon->query("SELECT * FROM membership WHERE transactions_id='$id'");
      while($row = $query->fetch_array(MYSQLI_ASSOC))
      {
      $Member = $row['membership_id'];
      $email = $row['email'];
      $phone = $row['phone'];
      
}
$mail = new PHPMailer();
// for server use
$emailBody = '<html>
<style>
body {
    padding: 0;
    margin: 0;
}
html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
    *[class="table_width_100"] {
            width: 96% !important;
      }
      *[class="border-right_mob"] {
            border-right: 1px solid #dddddd;
      }
      *[class="mob_100"] {
            width: 100% !important;
      }
      *[class="mob_center"] {
            text-align: center !important;
      }
      *[class="mob_center_bl"] {
            float: none !important;
            display: block !important;
            margin: 0px auto;
      }     
      .iage_footer a {
            text-decoration: none;
            color: #929ca8;
      }
      img.mob_display_none {
            width: 0px !important;
            height: 0px !important;
            display: none !important;
      }
      img.mob_width_50 {
            width: 40% !important;
            height: auto !important;
      }
}
.table_width_100 {
      width: 680px;
}
</style>

<div id="mailsub" class="notification" align="center">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">
<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
      </td></tr>
      <tr><td align="center" bgcolor="">
            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr><td align="center" bgcolor="#4c4c4c">
                              <a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; float:left; width:100%; padding:20px;text-align:center; font-size: 13px;">
                                                      <font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
                                                      <img src="http://thebigbeachmarathon.com/img/TheBigBeachMarathon280.png" width="250" alt="Tbbm" border="0"  /></font></a>
                              </td>
                              <td align="right">
      </td></tr>
      <tr><td align="center" bgcolor="#fbfcfd">
          <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr><td><br/><br/>
                        <center>Thank you</center>
                        <br/><br/>
                      Dear Candidate,<br/><br/>
                      Welcome to The Big Beach Marathon!<br/><br/>
                      You Successfully Actived Your Membership. Here are your details:<br/><br/>
                      
                      Email:  '.$email.'<br/><br/> 
                      Membership_id:'.$Member.'<br></br>   
                  </td></tr>
                  
                  <tr><td align="center">
                        <div style="line-height: 24px;">
                              <a href="http://thebigbeachmarathon.com" target="_blank" class="btn btn-danger block-center">
                                  click 
                              </a>
                        </div>
                        <!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"></div>
                  </td></tr>

            </table>
            </font>
      </td></tr>
      <tr><td class="iage_footer" align="center" bgcolor="#ffffff">

            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr><td align="center" style="padding:20px;flaot:left;width:100%; text-align:center;">
                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                              2017 © ORBITEN. ALL Rights Reserved.
                        </span></font>                      
                  </td></tr>              
            </table>
      </td></tr>
      <tr><td>
      </td></tr>
</table>
</td></tr>
</table>
</html>';


//$emailBody = "http://localhost/vasan_tbbm/trunk/changepass.php?active_code=$str&email=$email";
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
$mail->Subject = "Successfully Actived Membership | The Big Beach Marathon";          
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
