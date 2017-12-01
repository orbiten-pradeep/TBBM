
<?php
//session_start();

include("class/auth.php");
//$user = include("getuser.php");
include("adminheader.html");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="content" style="overflow: auto;">
  <div id="content-header">
    <div id="breadcrumb"> 
    <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
    <a href="#" class="current">User Details</a> 
    </div>
  </div>      
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>User Details</h5>
  </div>        
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      
   
        
        <?php
        require 'class/dbconnect.php';
                if(isset($_GET['ID']) )
                {
                  $TID =$_GET['ID'];
                  $query =$DBcon->query("SELECT * FROM users WHERE ID = '$TID'");
                  $row =$query->fetch_array(MYSQLI_ASSOC);
                  
                }
                
              ?>

              <!-- <tr><th>
               Profile</th>
              <td><?php echo $row['profile']; ?></td>
            </tr> -->
              <tr><th>
               First Name</th>
              <td><?php echo $row['FirstName']; ?></td>
            </tr>
            <tr><th>
              Last Name</th>
              <td><?php echo $row['LastName']; ?></td>
            </tr>
            <tr><th>
              Email</th>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <tr><th>
              Role</th>
              <td><?php echo $row['role']; ?></td>
            </tr>
            <tr><th>
              Status</th>
              <td><?php echo $row['Status']; ?></td>
            </tr>
            <tr><th>
              Active_code</th>
              <td><?php echo $row['active_code']; ?></td>
            </tr>
            <tr><th>
              DOB</th>
              <td><?php echo $row['DOB']; ?></td>
            </tr>
            <tr><th>
              Gender</th>
              <td><?php echo $row['Gender']; ?></td>
            </tr>
            <tr><th>
              Phone</th>
              <td><?php echo $row['ContactNumber']; ?></td>
            </tr>
            <tr><th>
              GroupName</th>
              <td><?php echo $row['groupname']; ?></td>
            </tr>
            <tr><th>
              Blood</th>
              <td><?php echo $row['blood']; ?></td>
            </tr>
            <tr><th>
              Height</th>
              <td><?php echo $row['Height']; ?></td>
            </tr>
            <tr><th>
              Weight</th>
              <td><?php echo $row['Weight']; ?></td>
            </tr>
            <tr><th>
              Membership</th>
              <td><?php echo $row['Membership']; ?></td>
            </tr>
            <tr><th>
              Create</th>
              <td><?php echo $row['created']; ?></td>
            </tr>

             
     
    </table>
  </div>
</div>

<!--Footer-part-->
<?php
include("adminfooter.html");
?>


</body>
</html>