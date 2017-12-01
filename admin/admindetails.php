<?php
session_start();

// include("class/auth.php");
// $user = include("class/getuser.php");
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
    <div id="breadcrumb"> <a href="adminhome.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    </div>
     <div class="widget-box"><!-- <div class="button_link btn btn-warning pull-right"><a href="add.php">Add New</a></div> -->
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Users Data table</h5>
          </div>
              
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No</th>
<th>Username</th>
<th>Email</th>
<th>Gender</th>
<th>Role</th>
 <th>Status</th>
<th>profile</th>
<th>created</th>
<th>Action</th>

                  </tr>
              </thead>
              <tbody>
<?php
require 'class/viewdetails.php';

        if ($result->num_rows > 0) {    
          while($row = $result->fetch_assoc()) {
            $uid =$row['ID'];
      ?>
      <tr class="table-row" id="row-<?php echo $row["ID"]; ?>"> 
        <td class="table-row"><?php echo $row["ID"]; ?></td>
        <td class="table-row"><?php echo $row["Username"]; ?></td>
        <td class="table-row"><?php echo $row["email"]; ?></td>
        <td class="table-row"><?php echo $row["Gender"]; ?></td>
         <td class="table-row"><?php echo $row["role"]; ?></td>
         <td class="table-row">
        <?php

if( $row["Status"] == 0){
    echo "Processing";
} elseif($row["Status"] == 1){
    echo "Activated";
} else{
    echo "Deactivated!";
}
?>
</td>
         <!-- <td class="table-row"><?php echo $row["profile"]; ?></td>
          --> <td class="table-row">
       <?php if($row["profile"] != ""): ?>
        <img src="img/<?=$row['profile'];?>" alt=" " height="75" width="75">

                                   
                                    <?php else: ?>
                        <img src="../img/profile.png" alt=" " height="75" width="75">
                        <?php endif; ?></td>
       <td class="table-row"><?php echo $row["created"]; ?></td>
        
        <!-- action -->
        <td class="table-row" colspan="2"><a href="viewadmin.php?ID=<?php echo $uid; ?>" class="link">View Details</a>&nbsp;&nbsp;<a href="class/activate.php?ID=<?php echo $row["ID"]; ?>" class="link"><img title="Activate" src="icon/edit.png" onclick="return confirm('Are you sure you want to Activate?')" /></a> <a href="class/deactivate.php?ID=<?php echo $row["ID"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to deactivate?')" src="icon/delete.png"/></a></td>
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
