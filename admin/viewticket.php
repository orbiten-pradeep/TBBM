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
    <a href="#" class="current">Tickets Details</a> 
    </div>
  </div>      
  <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>Tickets Details</h5>
  </div>        
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
      
   
        
        <?php
        require 'class/dbconnect.php';
                if(isset($_GET['id']) )
                {
                  $TID =$_GET['id'];
                  $query =$DBcon->query("SELECT * FROM tickets WHERE ID = '$TID'");
                  $row =$query->fetch_array(MYSQLI_ASSOC);

                }
                
              ?>
              <tr><th>
              ID</th>
              <td><?php echo $row["ID"]; ?></td>
            </tr>
            <tr><th>
              TransactionId</th>
              <td><?php echo $row["transactions_id"]; ?></td>
            </tr>
            <tr><th>
              TXNID</th>
              <td><?php echo $row['txnid']; ?></td>
            </tr>
            <tr><th>
              No.Of.Tickets</th>
              <td><?php echo $row["tickets"]; ?></td>
            </tr>
            <tr><th>
              Name</th>
              <td><?php echo $row["fullname"]; ?></td>
            </tr>
            <tr><th>
              Phone NO</th>
              <td><?php echo $row['phone']; ?></td>
            </tr>
            <tr><th>
              T-Shirt</th>
              <td><?php echo $row['tshirt']; ?></td>
            </tr><tr><th>
              KM</th>
              <td><?php echo $row['KM']; ?></td>
            </tr><tr><th>
              Gender</th>
              <td><?php echo $row['gender']; ?></td>
            </tr><tr><th>
              Email</th>
              <td><?php echo $row['email']; ?></td>
            </tr><tr><th>
              Bibno</th>
              <td><?php echo $row['Bibno']; ?></td>
            </tr><!-- <tr><th>
              City</th>
              <td><?php echo $row['city']; ?></td>
            </tr> --><tr><th>
              Status</th>
              <td><?php echo $row['Status']; ?></td>
            </tr>
            <tr><th>
              Booked Time</th>
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
