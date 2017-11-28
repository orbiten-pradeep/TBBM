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
    $query = "UPDATE membership SET Status= '1', txnid = '$txnid' WHERE transactions_id ='$id'";
    if($DBcon->query($query))
    {
      $query ="";
      $query = $DBcon->query("SELECT * FROM membership WHERE transactions_id ='$id'");
      $data = $query->fetch_array(MYSQLI_ASSOC);
      $DOB = $data['DOB'];
      $Gender = $data['gender'];
      $ContactNumber =$data['contact_number'];
      $groupname =$data['groupname'];
      $Blood =$data['blood_type'];
      $Height =$data['Height'];
      $Weight =$data['Weight'];
      

      $query = "UPDATE users SET DOB='$DOB',Gender='$Gender',ContactNumber='$ContactNumber',groupname='$groupname',blood='$Blood',Height='$Height',Weight='$Weight', Membership='Paid' WHERE email= '$email'";

      if($DBcon->query($query))
      {
        require '../mail/Membership.php';
      }
    }
  }

  header("Location: ../profile.php");

?>