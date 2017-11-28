<?php
//session_start();

include("class/auth.php");
//$user = include("getuser.php");
include("adminheader.html");
?>
<?php
require '../class/dbconnect.php';
$name = $_GET['name'];
if(isset($_GET['id']) && ($name == "trans")){

	$TID = $_GET['id'];
	$query =$DBcon->query("SELECT ID, users_id, firstname, email, txnid, amount, productinfo, hash, status, unmappedstatus, paygatestatus, bank_ref_num, phone, created FROM transactions WHERE ID = '$TID'");
	$row =$query->fetch_array(MYSQLI_ASSOC);
	$id = $row['ID'];
	$firstname = $row["firstname"];
	$email = $row["email"];
	$txnid = $row["txnid"];
	$amount = $row["amount"];
	$productinfo = $row["productinfo"];
	$hash = $row["hash"];
	$status = $row["status"];
	$pgstatus = $row["unmappedstatus"];
	$paygatestatus = $row["paygatestatus"];
	$bankreferno = $row["bank_ref_num"];
	$contact = $row["phone"];
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<label>User id</label><br>
				<label>Firstname</label><br>
				<label>Email</label><br>
				<label>Transaction id</label><br>
				<label>Amount</label><br>
				<label>Product Info</label><br>
				<label>Hash</label><br>
				<label>Status</label><br>
				<label>Pg status</label><br>
				<label>Payment Gateway</label><br>
				<label>Bank Reference Number</label><br>
				<label>Contact</label><br>
			</div>
			<div class="col-md-6">
				<p><?php echo $id; ?></p>
				<p><?php echo $firstname; ?></p>
				<p><?php echo $email; ?></p>
				<p><?php echo $txnid; ?></p>
				<p><?php echo $amount; ?></p>
				<p><?php echo $productinfo; ?></p>
				<p><?php echo $hash; ?></p>
				<p><?php echo $status; ?></p>
				<p><?php echo $pgstatus; ?></p>
				<p><?php echo $paygatestatus; ?></p>
				<p><?php echo $bankreferno; ?></p>
				<p><?php echo $contact; ?></p>
			</div>
		</div>
	</div>
<?php	
}
else{
	echo "not found";
}
?>
<?php
include("adminfooter.html");
?>
