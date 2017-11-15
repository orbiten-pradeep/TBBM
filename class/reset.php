<?php
include_once 'dbconnect.php';

if(isset($_POST["forgotpass"])) {
//$connection = new mysqli("localhost", "root","","");
$email = $DBcon->real_escape_string($_POST["email"]);
$data =$DBcon->query("SELECT ID from users WHERE email='$email'");
if ($data->num_rows > 0) {
  $str ="0123456789qwertzuioplkjhgfdsayxcvbnm";
  $str = str_shuffle($str);
  $str = substr($str, 0, 10);
  //$url ="http://localhost/test/resetpassword.php?token=$str&email=$email";
  require('../mail/mailindex.php');
  //echo $url;
  //mail($email, "Reset Password", "To reset your Password, Please visit this: $url", "From: roslin.albert@gmail.com\r\n");
  $DBcon->query("UPDATE users SET active_code='$str',Status='2' WHERE email='$email'");
  $_SESSION['forgot_info'] = "Plz Check Ur Email!!";
  echo "Plz Check Ur Email!";
  //echo $str;
}
    else {
    $_SESSION['forgot_error'] = "plz check ur inputs!!!";
  echo"plz check ur inputs!";
    }
}

if (isset($_POST["resetpassword"])) {
     $email = $_SESSION['email'];
    //$user['email'] = $DBcon->real_escape_string($email)
 $password = ($_POST['password']);
 $confirm_password =($_POST['confirm_password']);
 $password = $DBcon->real_escape_string($password);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
   
  $DBcon->query("UPDATE users SET password = '$hashed_password' WHERE email='$email' ");
     $_SESSION['password_success'] = "Password is reset successfully!.."; 
     //unset($_SESSION['password_error']);

}else {
   $_SESSION['password_error'] = "Password is not updated!";
   unset($_SESSION['password_error']);

}

// if(isset($_POST) & !empty($_POST)){
// 	$email = $DBcon->real_escape_string($_POST['email']);
// 	$sql = "SELECT * FROM `users` WHERE email = '$email'";
// 	$check_email = $DBcon->query("SELECT email FROM users WHERE email='$email'");
//  	$count=$check_email->num_rows;

// 	if($count == 1){
// 		echo "Send email to user with password";
// 	}else{
// 		echo "User name does not exist in database";
// 	}
// }

?>