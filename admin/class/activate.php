<?php 
	require_once("../class/dbconnect.php");
	
	$sql = $DBcon->prepare("select * FROM admin WHERE ID=?");
	$sql = $DBcon->prepare("UPDATE admin SET Status = 1 WHERE ID=?");  
	$sql->bind_param("i", $_GET["ID"]); 
	$sql->execute();
	$sql->close(); 
	$DBcon->close();
	header('location:../admindetails.php');		
?>
