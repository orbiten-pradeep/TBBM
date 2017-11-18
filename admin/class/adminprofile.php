<?php

// if (isset($_SESSION['Username'])!="") {
//  header("Location: ../index.php");
// }

require_once 'dbconnect.php';
$user = include("getuser.php");
//include("auth.php");

if(isset($_POST['memberupdate'])) {
  $Username = strip_tags($_POST['Username']);
 // $lastname = strip_tags($_POST['lastname']);
  $email = strip_tags($_POST['email']);
  //$groupname = strip_tags($_POST['groupname']);
  $Gender = strip_tags($_POST['Gender']);
  //$blood = strip_tags($_POST['blood']);
  //$ContactNumber = strip_tags($_POST['ContactNumber']);
  //$DOB = strip_tags($_POST['DOB']);
  //$Height = strip_tags($_POST['Height']);
  //$Weight = strip_tags($_POST['Weight']);
    
  
  $Username = $DBcon->real_escape_string($Username);
  //$lastname = $DBcon->real_escape_string($lastname);
  $email = $DBcon->real_escape_string($email);
 // $groupname = $DBcon->real_escape_string($groupname);
  $Gender = $DBcon->real_escape_string($Gender);
  //$blood = $DBcon->real_escape_string($blood);
  //$ContactNumber = $DBcon->real_escape_string($ContactNumber);
  //$DOB = $DBcon->real_escape_string($DOB);
  //$Height = $DBcon->real_escape_string($Height);
  //$Weight = $DBcon->real_escape_string($Weight);
  
  if(($_FILES['image']['type']== 'image/jpeg')
||($_FILES['image']['type']== 'image/gif')
||($_FILES['image']['type']== 'image/png')
&&($_FILES['image']['size']<200000)
&&($_FILES['image']['error'] == 0))
  {
   $document = time().$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$document);
    
    $imgname = "../img/". $document;
  //$as = mysqli_query($DBcon,"SELECT * FROM users WHERE role = 'Admin' AND email='$email' ");
  //$Querysel = mysqli_query($DBcon,$as);      
  $query = "UPDATE admin SET profile = '$document', Username ='$Username', Gender='$Gender' WHERE email='$email' ";
  if ($DBcon->query($query)) { 
    $msg = 'Image Uploaded Successfully'; 
    header("Location: ../adminhome.php");
  }

}
 else
  {
      $msg =  'Please Upload Real Image';
         header("location:../adminprofile.php");
  }
}

if (isset($_POST["resetpassword"])) {
     $email = $_SESSION['email'];
    //$user['email'] = $DBcon->real_escape_string($email)
 $password = ($_POST['password']);
 $confirm_password =($_POST['confirm_password']);
 $password = $DBcon->real_escape_string($password);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
   
  $DBcon->query("UPDATE admin SET password = '$hashed_password' WHERE email='$email' ");
     $_SESSION['password_success'] = "Password is reset successfully!.."; 
}else {
   $_SESSION['password_error'] = "Password is not updated!";
   unset($_SESSION['password_error']);

}

if(isset($_GET['deleteid'])){
  $as = mysqli_query($DBcon,"SELECT profile FROM admin WHERE ID = '".$_GET['deleteid']."'");
  $array=mysqli_fetch_array($as);          
    unlink("../img".$array['profile']);
  $SQL = "DELETE profile FROM admin WHERE ID = '".$_GET['deleteid']."' ";
  $Query = mysqli_query($DBcon,$SQL);      
  $SQL1 = "UPDATE admin SET profile = '' WHERE ID = '".$_GET['deleteid']."'";
  $Query1 = mysqli_query($DBcon,$SQL1);      
  //$_SESSION['msg'] =("Selected Data(s) has been Delete successfully");
    header("location:../adminprofile.php");
}
?>
