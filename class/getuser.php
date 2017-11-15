<?php

if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}

require_once 'dbconnect.php';
//$ID = $_SESSION['ID'];
$email = $_SESSION['email'];
$query = $DBcon->query("SELECT * FROM users WHERE role = 'User'AND email='$email'");
$row = $query->fetch_array(MYSQLI_ASSOC);
return $row;
$DBcon->close();
?>