<?php
	require_once("../class/dbconnect.php");
	// if (isset($_POST['submit'])) {		
	// 	$sql = $DBcon->prepare("UPDATE users SET ID=?, FirstName=?,LastName=?,email=?,role=?,DOB=?,Gender=?,ContactNumber=?,Height=?,Weight=?,Membership=?,userid=?,profile=?,blood=?,created=? WHERE ID=?");
	// 	$ID=$_POST['ID'];
	// 	$FirstName = $_POST['FirstName'];
	// 	$LastName = $_POST['LastName'];
	// 	$email= $_POST['email'];
	// 	$role=$_POST['role'];
	// 	$DOB=$_POST['DOB'];
	// 	$Gender=$_POST['Gender'];
	// 	$ContactNumber=$_POST['ContactNumber'];
	// 	$Height=$_POST['Height'];
	// 	$Weight=$_POST['Weight'];		
	// 	$Membership=$_POST['Membership'];
	// 	$userid = $_POST['userid'];
	// 	$profile= $_POST['profile'];
	// 	$blood= $_POST['blood'];
	// 	$created= $_POST['created'];		
	// 	$sql->bind_param("sssssssssssssssi",$ID, $FirstName, $LastName, $email, $role, $DOB, $Gender,$ContactNumber,$Height,$Weight,$Membership, $userid, $profile, $blood, $created, $_GET["ID"]);	
	// 	if($sql->execute()) {
	// 		$success_message = "Edited Successfully";
	// 	} else {
	// 		$error_message = "Problem in Editing Record";
	// 	}

	// }
	$sql = $DBcon->prepare("SELECT * FROM users WHERE ID=?");
	$sql->bind_param("i",$_GET["ID"]);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
	}
	$DBcon->close();
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>Users edit </title>
</head>
<body>
<div class="button_link"><a href="../userinfo.php" >Back to List </a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">User Info</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>ID</label></td>
			<td><?php echo $row["ID"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>FirstName</label></td>
			<td><?php echo $row["FirstName"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>LastName</label></td>
			<td><?php echo $row["LastName"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><?php echo $row["email"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>role</label></td>
			<td><?php echo $row["role"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Status</label></td>
			<td> <?php

if( $row["Status"] == 0){
    echo "Processing";
} elseif($row["Status"] == 1){
    echo "Activated";
} else{
    echo "Deactivated!";
}
?></td>
		</tr>
		
		<tr class="table-row">
			<td><label>DOB</label></td>
			<td><?php echo $row["DOB"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Gender</label></td>
			<td><?php echo $row["Gender"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>ContactNumber</label></td>
			<td><?php echo $row["ContactNumber"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Height</label></td>
			<td><?php echo $row["Height"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Weight</label></td>
			<td><?php echo $row["Weight"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>Membership</label></td>
			<td><?php echo $row["Membership"]?></td>
		</tr>
		<tr class="table-row">
			<td><label>userid</label></td>
			<td><?php echo $row["userid"]?></td>
		</tr>
		
		<tr class="table-row">
			<td><label>Profile Pic</label></td>
			<td>
			 <?php if($row["profile"] != ""): ?>
			 	<img src="../UploadImage/<?php echo $row['profile'];?>" alt=" " height="75" width="75"></td>

                                   
                                    <?php else: ?>
                        <img src="../img/profile.png" alt=" " height="75" width="75">
                        <?php endif; ?></td>
		</tr>
		
		<tr class="table-row">
			<td><label>created</label></td>
			<td><?php echo $row["created"]?></td>
		</tr>
		
			</tbody>	
</table>
<?php
include("../adminfooter.html");
?>

</body>
</html>