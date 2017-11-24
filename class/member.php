<?php
if (isset($_SESSION['firstname'])!="") {
 header("Location: ../index.php");
}

require_once 'dbconnect.php';

if(isset($_POST)) {
	if(isset($_FILES['profile'])) {
		$dir = str_replace('class', '',dirname(__FILE__))."Profile\\";
		
		$imgtype=$_FILES["profile"]["type"];
		$ext= GetImageExtension($imgtype);
		$name = 'profile_'.date('m-d-Y_hia').$ext;
		$_FILES['profile']['name'] = $name;
		$uploadpath = $dir.$name;
		if(!is_dir($dir)) {
			mkdir($dir,'0777');
		}
		if(!file_exists($uploadpath)) {
			move_uploaded_file($_FILES['profile']['tmp_name'], $uploadpath);
		}
	}
	
	$firstname = strip_tags($_POST['firstname']);
	$lastname = strip_tags($_POST['lastname']);
	$email = strip_tags($_POST['email']);
	$Group = strip_tags($_POST['Group']);
	$Sex = strip_tags($_POST['Sex']);
	$Blood = strip_tags($_POST['Blood']);
	$contact_number = strip_tags($_POST['contact_number']);
	$date_of_birth = strip_tags($_POST['date_of_birth']);
	$Height = strip_tags($_POST['Height']);
	$Weight = strip_tags($_POST['Weight']);
	$profile = strip_tags($_FILES['profile']['name']);
	
	$hash_gen['key'] = $_POST['key'];
	$hash_gen['txnid'] = $_POST['txnid'];
	$hash_gen['amount'] = $_POST['amount'];
	$hash_gen['firstname'] = $_POST['firstname'];
	$hash_gen['email'] = $_POST['email'];
	$hash_gen['phone'] = $_POST['contact_number'];
	$hash_gen['productinfo'] = 'TBBM Subscription';
	$hash_gen['surl'] = '';
	$hash_gen['furl'] = '';
	$hash_gen['service_provider'] = $_POST['service_provider'];
	$hash_gen['hash'] = generateHash($hash_gen);
	
	//print_r($hash_gen);
	//print_r($_POST); exit(0);
	
	$firstname = $DBcon->real_escape_string($firstname);
	$lastname = $DBcon->real_escape_string($lastname);
	$email = $DBcon->real_escape_string($email);
	$Group = $DBcon->real_escape_string($Group);
	$Sex = $DBcon->real_escape_string($Sex);
	$Blood = $DBcon->real_escape_string($Blood);
	$contact_number = $DBcon->real_escape_string($contact_number);
	$date_of_birth = $DBcon->real_escape_string($date_of_birth);
	$Height = $DBcon->real_escape_string($Height);
	$Weight = $DBcon->real_escape_string($Weight);
	$profile = $DBcon->real_escape_string($profile);
	
	$query = "UPDATE users SET firstname ='$firstname', lastname='$lastname', groups='$Group', Gender='$Sex', blood='$Blood', ContactNumber='$contact_number', DOB='$date_of_birth', Height='$Height', Weight='$Weight',profile = '$profile'  WHERE email='$email'";
	if ($DBcon->query($query)) { 
		header("Location: ../profile.php");
	} else {
		
	}
}
	
	function generateHash($posted = []) {
        // Hash Sequence
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        //debug($hash_string);
        $hash_string .= 'b8Hg0nhutX';
        $hash = strtolower(hash('sha512', $hash_string));
		return $hash;
    }

	function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

$DBcon->close();

?>