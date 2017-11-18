<?php

session_start();

if (isset($_SESSION['firstname'])!="") {

 header("Location: ../index.php");

}

require_once 'dbconnect.php';

if(isset($_POST)) {

 $username = strip_tags($_POST['username']);

 $email = strip_tags($_POST['email']);

 $phone = strip_tags($_POST['Phone']);

 $message = strip_tags($_POST['message']);

 

 $username = $DBcon->real_escape_string($username);

 $phone = $DBcon->real_escape_string($phone);

 $email = $DBcon->real_escape_string($email);

 $message = $DBcon->real_escape_string($message);


 $check_email = $DBcon->query("SELECT email FROM contact WHERE email='$email'");

 $count=$check_email->num_rows;

 

 	if ($count==0 || $count!==0) {

		$query = "INSERT INTO contact (username,email, Phone,message) VALUES('$username','$email','$phone','$message')";

		if ($DBcon->query($query)) { 

		  	require_once'../mail/gmail.php';
			$_SESSION['contact_success'] = "Ur Comment Send Succesfully!";

			header("location: ../index.php");

		 } else {

		 $_SESSION['contact_error'] = "Sry Ur Comment Not Send!..";

		  	header("location: ../index.php");

		 }	 

		 

	} else {

		 header("location: ../join.php");

	}

	$DBcon->close();

}

?>