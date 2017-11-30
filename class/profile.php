<?php

if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}

require_once 'dbconnect.php';
//$user = include("getuser.php");
include("auth.php");
$sql = "SELECT * FROM membership where $email='$email'";
$result = $DBcon->query($sql); 

if(isset($_POST['role_update'])) {
	$firstname = strip_tags($_POST['firstname']);
	$lastname = strip_tags($_POST['lastname']);
	$email = strip_tags($_POST['email']);
	
	
	$firstname = $DBcon->real_escape_string($firstname);
	$lastname = $DBcon->real_escape_string($lastname);
	$email = $DBcon->real_escape_string($email);
	
  if(($_FILES['image']['type']== 'image/jpeg')
||($_FILES['image']['type']== 'image/gif')
||($_FILES['image']['type']== 'image/png')
&&($_FILES['image']['size']<200000)
&&($_FILES['image']['error'] == 0))
  {
   $document = time().$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../UploadImage/".$document);
    
    $imgname = "../UploadImage/". $document;
	
	$query = "UPDATE users SET profile = '$document', firstname ='$firstname', lastname='$lastname' WHERE email='$email' ";
	if ($DBcon->query($query)) { 
    $msg = 'Image Uploaded Successfully'; 
		header("Location: ../profile.php");
	}

}
else
  {
     $que = "UPDATE users SET firstname ='$firstname', lastname='$lastname' WHERE email='$email' ";
      if ($DBcon->query($que)) { 

    // $msg = 'Image Uploaded Successfully'; 
    // header("Location: ../profile.php");
  }

      $msg =  'Please Upload Real Image';
         header("location:../profile.php");
  }
}
if(isset($_POST['memberupdate'])) {
  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $email = strip_tags($_POST['email']);
  $groupname = strip_tags($_POST['groupname']);
  $Gender = strip_tags($_POST['Gender']);
  $blood = strip_tags($_POST['blood']);
  $ContactNumber = strip_tags($_POST['ContactNumber']);
  $DOB = strip_tags($_POST['DOB']);
  $Height = strip_tags($_POST['Height']);
  $Weight = strip_tags($_POST['Weight']);
    
  
  $firstname = $DBcon->real_escape_string($firstname);
  $lastname = $DBcon->real_escape_string($lastname);
  $email = $DBcon->real_escape_string($email);
  $groupname = $DBcon->real_escape_string($groupname);
  $Gender = $DBcon->real_escape_string($Gender);
  $blood = $DBcon->real_escape_string($blood);
  $ContactNumber = $DBcon->real_escape_string($ContactNumber);
  $DOB = $DBcon->real_escape_string($DOB);
  $Height = $DBcon->real_escape_string($Height);
  $Weight = $DBcon->real_escape_string($Weight);
  
  if(($_FILES['image']['type']== 'image/jpeg')
||($_FILES['image']['type']== 'image/gif')
||($_FILES['image']['type']== 'image/png')
&&($_FILES['image']['size']<200000)
&&($_FILES['image']['error'] == 0))
  {
   $document = time().$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],"../UploadImage/".$document);
    
    $imgname = "../UploadImage/". $document;
  
  $query = "UPDATE users SET profile = '$document', firstname ='$firstname', lastname='$lastname', DOB='$DOB', Gender='$Gender', ContactNumber='$ContactNumber', Height='$Height', Weight='$Weight', groupname='$groupname', blood='$blood' WHERE email='$email' ";
  if ($DBcon->query($query)) { 

    $msg = 'Image Uploaded Successfully'; 
    header("Location: ../profile.php");
  }

}
 else
  {
     $que = "UPDATE users SET firstname ='$firstname', lastname='$lastname', DOB='$DOB', Gender='$Gender', ContactNumber='$ContactNumber', Height='$Height', Weight='$Weight', groupname='$groupname', blood='$blood' WHERE email='$email' ";
      if ($DBcon->query($que)) { 

    // $msg = 'Image Uploaded Successfully'; 
    // header("Location: ../profile.php");
  }

      $msg =  'Please Upload Real Image';
         header("location:../profile.php");
  }
}

if (isset($_POST["resetpassword"])) {
     $email = $_SESSION['email'];
    //$user['email'] = $DBcon->real_escape_string($email)
 $password = ($_POST['password']);
 $confirm_password =($_POST['confirm_password']);
 $password = $DBcon->real_escape_string($password);
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
   
  $DBcon->query("UPDATE users SET password = '$hashed_password' WHERE email='$email' ");
     $_SESSION['password_success'] = "Password is reset successfully!.."; 
}else {
   $_SESSION['password_error'] = "Password is not updated!";
   unset($_SESSION['password_error']);

}

if(isset($_GET['deleteid'])){
  $as = mysqli_query($DBcon,"SELECT profile FROM users WHERE ID = '".$_GET['deleteid']."'");
  $array=mysqli_fetch_array($as);          
    unlink("../UploadImage/".$array['profile']);
  $SQL = "DELETE profile FROM users WHERE ID = '".$_GET['deleteid']."'";
  $Query = mysqli_query($DBcon,$SQL);      
  $SQL1 = "UPDATE users SET profile = '' WHERE ID = '".$_GET['deleteid']."'";
  $Query1 = mysqli_query($DBcon,$SQL1);      
  //$_SESSION['msg'] =("Selected Data(s) has been Delete successfully");
    header("location:../editprofile.php");
}
?>
