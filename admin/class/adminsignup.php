<?php
session_start();

if (isset($_SESSION['Username']) != "")
	{
	header("Location: ../index.php");
	}

require 'dbconnect.php';

if (isset($_POST))
	{
	$Username = strip_tags($_POST['Username']);
	$Gender = strip_tags($_POST['Gender']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$cpass = strip_tags($_POST['confirmpassword']);
	$Username = $DBcon->real_escape_string($Username);
	$Gender = $DBcon->real_escape_string($Gender);
	$cpass = $DBcon->real_escape_string($cpass);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	$check_email = $DBcon->query("SELECT email FROM admin WHERE email='$email'");
	$count = $check_email->num_rows;
	if ($count == 0 )
		{
		$query = "INSERT INTO admin(Username,email,password,role,active_code,Status,Gender,profile)VALUES('$Username','$email','$hashed_password','Admin','','0','$Gender','')";
		if ($DBcon->query($query))
			{
			$_SESSION['Adminsign_success'] = "Admin Registration Succesfully!";
			unset($_SESSION['Adminsign_error']);
			header("location: ../index.php");
			}
		  else
			{
			$_SESSION['Adminsign_error'] = "Admin Registration failed. Try again..";
			header("location: ../adminsignup.php");
			}
		}
	  else
		{
		$_SESSION['Adminsignup_info'] = "Email already exists..";
		header("location: ../adminsignup.php");
		}

	$DBcon->close();
	}

?>
