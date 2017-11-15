<?php 
require_once 'dbconnect.php';

  $status = strip_tags($_POST['status']);
  $unmappedstatus = strip_tags($_POST['unmappedstatus']);
  $txnid = strip_tags($_POST['txnid']);
  $field9 = strip_tags($_POST['field9']);
  $bank_ref_num = strip_tags($_POST['bank_ref_num']); 
  
  $status = $DBcon->real_escape_string($status);
  $unmappedstatus = $DBcon->real_escape_string($unmappedstatus);
  $txnid = $DBcon->real_escape_string($txnid);
  $field9 = $DBcon->real_escape_string($field9);
  $bank_ref_num = $DBcon->real_escape_string($bank_ref_num);
 
  $query = "UPDATE transactions SET status= '$status', unmappedstatus='$unmappedstatus', field9='$field9', bank_ref_num='$bank_ref_num' WHERE txnid = '$txnid'";
  if($DBcon->query($query)) {
  		$query = "";
  		$query = $DBcon->query("SELECT * FROM transactions WHERE txnid = '$txnid'");
 		$row = $query->fetch_array(MYSQLI_ASSOC);
 		//print_r($row); exit(0);
 		$query = "";
 		$id = $row['ID'];
 		$query = "UPDATE tickets SET Status= '$status', txnid = '$txnid' WHERE transactions_id ='$id'";
    // require 'Bibno-gen.php';
    // if($DBcon->query($query)) {
    //   $halfmarathon = $DBcon->query("SELECT Status,KM FROM tickets WHERE Status='failure' && KM='10KM' && transactions_id ='$id' ");
    //   $result=$DBcon->query($halfmarathon);
    //   $query = "UPDATE tickets SET Bibno = '$app_id' WHERE transactions_id ='$id'";
    // }
    // else {
    //   $fullmarathon = $DBcon->query("SELECT Status,KM FROM tickets WHERE Status='failure' && KM='21.1KM' && transactions_id ='$id' ");
    //   $result=$DBcon->query($fullmarathon);
    //   $query = "UPDATE tickets SET Bibno = '$appid' WHERE transactions_id ='$id'";
  
    // }
  }

  header("Location: ../events.php");

?>