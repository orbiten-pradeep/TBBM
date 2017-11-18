<?php
include_once 'dbconnect.php';
session_start();
if (!isset($_SESSION['adminSession'])) {
 header("Location: ../admin/index.php");
 exit();
} 
?>