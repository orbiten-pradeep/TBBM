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
    $email =$row['email'];
    $query = "UPDATE membership SET membership_id=NULL,txnid = '$txnid' WHERE transactions_id ='$id'";
    $DBcon->query($query);
    
  }

  header("Location: ../profile.php");

?>