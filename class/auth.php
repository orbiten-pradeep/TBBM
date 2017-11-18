<?php
include_once 'dbconnect.php';
session_start();
if (!isset($_SESSION['userSession'])) {
 header("Location: join.php");
 exit();
} 
?>