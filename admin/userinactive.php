<?php
session_start();
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
                  <th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>email</th>
<th>DOB</th>
<th>Gender</th>
<th>ContactNumber</th>
<th>Height</th>
<th>Weight</th>
<th>Membership</th>
<!-- <th>blood</th>
 --><th>role</th>
<!-- <th>groups</th>
 --><th>userid</th>
<!-- <th>profile</th>
 --><th>created</th>
<th>Action</th>

                  </tr>
              </thead>
              <tbody>
<?php
require 'class/viewdetails.php';
        if ($inactiveuser->num_rows > 0) {    
          while($row = $inactiveuser->fetch_assoc()) {
      ?>
      <tr class="table-row" id="row-<?php echo $row["ID"]; ?>"> 
        <td class="table-row"><?php echo $row["ID"]; ?></td>
        <td class="table-row"><?php echo $row["FirstName"]; ?></td>
        <td class="table-row"><?php echo $row["LastName"]; ?></td>
        <td class="table-row"><?php echo $row["email"]; ?></td>
        <td class="table-row"><?php echo $row["DOB"]; ?></td>
        <td class="table-row"><?php echo $row["Gender"]; ?></td>
        <td class="table-row"><?php echo $row["ContactNumber"]; ?></td>
        <td class="table-row"><?php echo $row["Height"]; ?></td>
        <td class="table-row"><?php echo $row["Weight"]; ?></td>
        <td class="table-row"><?php echo $row["Membership"]; ?></td>
       <!--  <td class="table-row"><?php echo $row["blood"]; ?></td>
        --> <td class="table-row"><?php echo $row["role"]; ?></td>
        <!-- <td class="table-row"><?php echo $row["groups"]; ?></td>
         --><td class="table-row"><?php echo $row["userid"]; ?></td>
       <!--  <td class="table-row"><?php echo $row["profile"]; ?></td>
        --> <td class="table-row"><?php echo $row["created"]; ?></td>
        
        <!-- action -->
         <td class="table-row" colspan="2"><a href="class/useractivate.php?ID=<?php echo $row["ID"]; ?>" class="link"><img title="Activate" src="icon/edit.png" onclick="return confirm('Are you sure you want to Activate?')" /></a><a href="class/viewuser.php?ID=<?php echo $row["ID"]; ?>" class="link"><img title="viewuser" src="icon/edit.png" /></a></td>
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
