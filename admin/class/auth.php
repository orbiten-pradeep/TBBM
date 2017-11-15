<?php
include_once 'dbconnect.php';
session_start();
if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
 exit();
} 
?>