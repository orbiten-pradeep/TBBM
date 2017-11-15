<?php
session_start();
if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}
require 'dbconnect.php';
if(isset($_POST)) {
 $firstname = strip_tags($_POST['firstname']);
 $lastname = strip_tags($_POST['lastname']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 $cpass = strip_tags($_POST['confirmpassword']);
 $firstname = $DBcon->real_escape_string($firstname);
 $lastname = $DBcon->real_escape_string($lastname);
 $cpass = $DBcon->real_escape_string($cpass);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);
$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
$check_email = $DBcon->query("SELECT email FROM users WHERE email='$email'");
 $count=$check_email->num_rows;
if ($count==0 || $count==1) {
		$query = "INSERT INTO users(firstname,lastname,email,password,role,active_code,Status,Gender,ContactNumber,groupname,blood,Height,Weight,Membership,userid,profile)VALUES('$firstname','$lastname','$email','$hashed_password','User','','1','','','','','','','','','')";
		if ($DBcon->query($query)) { 
			$_SESSION['sign_success'] = "Registration Succesfully!";
			unset($_SESSION['sign_error']);
			unset($_SESSION['login_error']);
			require'../mail/regmail.php';
		  	header("location: ../join.php");
		 } else {
		 		$_SESSION['sign_error'] = "Registration failed. Try again..";
		  	header("location: ../index.php");
		 }	 	 
	} else {
		 $_SESSION['signup_error'] = "Email already exists..";
		 header("location: ../join.php");
	}
	$DBcon->close();
}
?>