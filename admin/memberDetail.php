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
    <a href="#" class="current">Member Details</a> 
    </div>
  </div>      
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>Member Details</h5>
  </div>        
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      
   
        
        <?php
        require 'class/dbconnect.php';
                if(isset($_GET['id']) )
                {
                  $TID =$_GET['id'];
                  $query =$DBcon->query("SELECT * FROM membership WHERE ID = '$TID'");
                  $row =$query->fetch_array(MYSQLI_ASSOC);

                }
                
              ?>
               <tr><th>
              ID</th>
              <td><?php echo $row['id']; ?></td>
            </tr>
             <tr><th>
              Transaction_ID</th>
              <td><?php echo $row['transactions_id']; ?></td>
            </tr>
            <tr><th>
              Membership</th>
              <td><?php echo $row['membership_id']; ?></td>
            </tr>
             <tr><th>
              TXNID</th>
              <td><?php echo $row['txnid']; ?></td>
            </tr>
             <tr><th>
               First Name</th>
              <td><?php echo $row['first_name']; ?></td>
            </tr>
            <tr><th>
              Last Name</th>
              <td><?php echo $row['last_name']; ?></td>
            </tr>
            <tr><th>
              Email</th>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <tr><th>
              Amount</th>
              <td><?php echo $row['amount']; ?></td>
            </tr>
            <tr><th>
              GroupName</th>
              <td><?php echo $row['groupname']; ?></td>
            </tr>
            <tr><th>
              Gender</th>
              <td><?php echo $row['gender']; ?></td>
            </tr>
            <tr><th>
              Blood</th>
              <td><?php echo $row['blood_type']; ?></td>
            </tr>
            <tr><th>
              Phone</th>
              <td><?php echo $row['contact_number']; ?></td>
            </tr>
           
            <tr><th>
              DOB</th>
              <td><?php echo $row['DOB']; ?></td>
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
              Status</th>
              <td><?php echo $row['Status']; ?></td>
            </tr>
            
            <tr><th>
              Create</th>
              <td><?php echo $row['create_at']; ?></td>
            </tr>
            <tr><th>
              Expire</th>
              <td><?php echo $row['expire_at']; ?></td>
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