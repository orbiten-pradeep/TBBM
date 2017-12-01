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
    <a href="#" class="current">Transactions Details</a> 
    </div>
  </div>      
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>Transactions Details</h5>
  </div>        
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      
   
        
        <?php
        require 'class/dbconnect.php';
                if(isset($_GET['id']) )
                {
                  $TID =$_GET['id'];
                  $query =$DBcon->query("SELECT * FROM transactions WHERE ID = '$TID'");
                  $row =$query->fetch_array(MYSQLI_ASSOC);

                }
                
              ?>
            
              <tr><th>
              Name</th>
              <td><?php echo $row['firstname']; ?></td>
            </tr>
            <tr><th>
              Email</th>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <tr><th>
              TXNID</th>
              <td><?php echo $row['txnid']; ?></td>
            </tr>
            <tr><th>
              Amount</th>
              <td><?php echo $row['amount']; ?></td>
            </tr>
            <tr><th>
              Product Info</th>
              <td><?php echo $row['productinfo']; ?></td>
            </tr>
            <tr><th>
              Hash</th>
              <td><?php echo $row['hash']; ?></td>
            </tr>
            <tr><th>
              Status</th>
              <td><?php echo $row['status']; ?></td>
            </tr>
            <tr><th>
              unmappedstatus</th>
              <td><?php echo $row['unmappedstatus']; ?></td>
            </tr>
            <tr><th>
              paygatestatus</th>
              <td><?php echo $row['paygatestatus']; ?></td>
            </tr>
            <tr><th>
              Bank Ref Number</th>
              <td><?php echo $row['bank_ref_num']; ?></td>
            </tr>
            <tr><th>
              Phone</th>
              <td><?php echo $row['phone']; ?></td>
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