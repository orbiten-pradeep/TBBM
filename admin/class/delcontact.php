<?php 
	require_once("../class/dbconnect.php");
	
	$sql = $DBcon->prepare("DELETE  FROM contact WHERE ID=?");  
	$sql->bind_param("i", $_GET["ID"]); 
	$sql->execute();
	$sql->close(); 
	$DBcon->close();
	header('location:contactdetails.php');		
?>