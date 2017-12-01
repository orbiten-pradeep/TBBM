<?php
//session_start();

include("class/auth.php");
//$user = include("class/getuser.php");
include("adminheader.html");
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    </div>
      <div class="widget-box"><!-- <div class="button_link btn btn-warning pull-right"><a href="add.php">Add New</a></div> -->
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Members table</h5>
          </div>
              
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
<th>Trans_ID</th>
<th>Membership_id</th>
<th>Txnid</th>
<th>FirstName</th>
<th>Email</th>
<th>Amount</th>
<th>GroupName</th>
 <th>Phone</th>
<th>DOB</th>
<th>Height</th>
<th>Weight</th>
<th>Status</th>
<th>created</th>
<th>Expire</th>

                  </tr>
              </thead>
              <tbody>
<?php
require 'class/viewdetails.php';
        if ($Member->num_rows > 0) {    
          while($row = $Member->fetch_assoc()) {
            $uid = $row["id"];
      ?>
      <tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
        <td class="table-row"><?php echo $row["id"]; ?></td>
        <td class="table-row"><?php echo $row["transactions_id"]; ?></td>
        <td class="table-row"><?php echo $row["membership_id"]; ?></td>
        <td class="table-row"><?php echo $row["txnid"]; ?></td>
        <td class="table-row"><?php echo $row["first_name"]; ?></td>
        <td class="table-row"><?php echo $row["email"]; ?></td>
        <td class="table-row"><?php echo $row["amount"]; ?></td>
        <td class="table-row"><?php echo $row["groupname"]; ?></td>
    <td class="table-row"><?php echo $row["contact_number"]; ?></td>
         <td class="table-row"><?php echo $row["DOB"]; ?></td>
        <td class="table-row"><?php echo $row["Height"]; ?></td>
          <td class="table-row"><?php echo $row["Weight"]; ?></td>
            <td class="table-row"><?php echo $row["Status"]; ?></td>
              <td class="table-row"><?php echo $row["create_at"]; ?></td>
              <td class="table-row"><?php echo $row["expire_at"]; ?></td>
               <td class="table-row"><a href="memberDetail.php?id=<?php echo $uid; ?>&name=trans"><button class="btn btn-primary">View</button></a></td>
              
      </tr>
      <?php
          }
        }
      ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php
include("adminfooter.html");
?>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
