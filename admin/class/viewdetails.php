<?php 
require_once("dbconnect.php");

$sql = "SELECT * FROM admin where role='Admin'";
$result = $DBcon->query($sql); 

$sql0 = "SELECT * FROM transactions where status = 'success'";
$transuccess = $DBcon->query($sql0); 

$sql1 = "SELECT * FROM contact";
$contact = $DBcon->query($sql1); 

$sql2 = "SELECT * FROM tickets where KM = '21.1KM'";
$full = $DBcon->query($sql2); 

$sql3 = "SELECT * FROM tickets where KM = '10KM'";
$half = $DBcon->query($sql3); 

$sql4 = "SELECT * FROM membership ";
$Member = $DBcon->query($sql4); 

$sql5 = "SELECT * FROM transactions where paygatestatus = 'Cancelled by user'";
$paystatus = $DBcon->query($sql5); 

$sql6 = "SELECT * FROM tickets where Status = 'failure' ";
$failure = $DBcon->query($sql6); 

$sql7 = "SELECT * FROM tickets";
$tickets = $DBcon->query($sql7); 

$sql8 = "SELECT * FROM tickets where Status = 'success'";
$success = $DBcon->query($sql8); 

$sql9 = "SELECT * FROM transactions where status = 'failure'";
$tranfailure = $DBcon->query($sql9);

$sql10 = "SELECT * FROM transactions";
$transactions = $DBcon->query($sql10); 

$sql11 = "SELECT * FROM users where role='User' && Status!= 2";
$activeuser = $DBcon->query($sql11); 

$sql12 = "SELECT * FROM users where role='User' && Status= 2";
$inactiveuser = $DBcon->query($sql12); 


$DBcon->close();   
?>
