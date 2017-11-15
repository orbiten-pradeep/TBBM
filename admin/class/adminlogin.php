<?php

session_start();

require_once 'dbconnect.php';
if (isset($_SESSION['userSession'])!="") {

 header("Location: ../index.php");

 exit;

}
if (isset($_POST)) {
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
    $query = $DBcon->query("SELECT * FROM admin WHERE email='$email' ");
    $row = $query->fetch_array(MYSQLI_ASSOC);
     $count = $query->num_rows; // if email/password are correct returns must be 1 row

 if (password_verify($password, $row['password']) && $count==1 && $row['role'] == 'Admin' && $row['Status'] == '1') {

	  $_SESSION['userSession'] = $row['Username'];
	  $_SESSION['loginuser'] = $row['Username'];
 $_SESSION['email'] = $row['email'];
	  
	  unset($_SESSION['AdminLogin_error']);

	  header("Location: ../adminhome.php");

 }
  elseif (password_verify($password, $row['password']) && $count==1 && $row['role'] == 'SuperAdmin' && $row['Status'] == '1' ) {
 $_SESSION['userRole'] = $row['role'];
	  $_SESSION['userSession'] = $row['Username'];
$_SESSION['email'] = $row['email'];
	  $_SESSION['loginuser'] = $row['Username'];
 	  unset($_SESSION['AdminLogin_error']);

	  header("Location: ../adminhome.php");

 }
 else {

  	$_SESSION['AdminLogin_error'] = "login failed. Try again....";

  	header("Location: ../index.php");

 }

 $DBcon->close();

}

?>