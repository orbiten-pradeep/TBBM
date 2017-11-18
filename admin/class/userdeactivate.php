<?php 
	require_once("../class/dbconnect.php");
	
	$sql = $DBcon->prepare("select * FROM users WHERE ID=?");
	$sql = $DBcon->prepare("UPDATE users SET Status = 2 WHERE ID=?");  
	$sql->bind_param("i", $_GET["ID"]); 
	$sql->execute();
	$sql->close(); 
	$DBcon->close();
	header('location:../useractive.php');		
?>
