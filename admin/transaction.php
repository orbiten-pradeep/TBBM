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
      <thead>
        <tr>
          <th>ID</th>
          <th>users_id </th>
          <th>firstname</th>
          <th>email</th>
          <th>txnid</th>
          <th>amount</th>
          <!-- <th>productinfo</th> 
          <th>hash</th> -->
          <th>status</th>
           <!-- <th>unmappedstatus</th>
          <th>field9</th> 
          <th>bank_ref_num</th> -->
          <th>phone</th>
          <th>created</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require 'class/viewdetails.php';
                if ($transactions->num_rows > 0) {    
                  while($row = $transactions->fetch_assoc()) {
                    $uid = $row["ID"];
              ?>
              <tr class="table-row" id="row-<?php echo $row["ID"]; ?>"> 
                <td class="table-row"><?php echo $row["ID"]; ?></td>
                <!-- <td class="table-row"><?php echo $row["users_id"]; ?></td> -->
                <td class="table-row"><?php echo $row["firstname"]; ?></td>
                <td class="table-row"><?php echo $row["email"]; ?></td>
                <td class="table-row"><?php echo $row["txnid"]; ?></td>
                <td class="table-row"><?php echo $row["amount"]; ?></td>
                <!-- <td class="table-row"><?php echo $row["productinfo"]; ?></td>
                <td class="table-row"><?php echo $row["hash"]; ?></td> -->
                <td class="table-row"><?php echo $row["status"]; ?></td>
                <!-- <td class="table-row"><?php echo $row["unmappedstatus"]; ?></td>
                <td class="table-row"><?php echo $row["paygatestatus"]; ?></td>
                <td class="table-row"><?php echo $row["bank_ref_num"]; ?></td> -->
                <td class="table-row"><?php echo $row["phone"]; ?></td>
                <td class="table-row"><?php echo $row["created"]; ?></td>
                <td class="table-row"><a href="viewdetails.php?id=<?php echo $uid; ?>&name=trans"><button class="btn btn-primary">View</button></a></td>
                <!-- action -->
                <!-- <td class="table-row" colspan="2"><a href="msgdetails.php?contactid=<?php echo $row["contactid"]; ?>" class="link">View Details</a>&nbsp;&nbsp;<a href="Reply.php?contactid=<?php echo $row["contactid"]; ?>" class="link">Reply</a>&nbsp;&nbsp;<a href="delcontact.php?contactid=<?php echo $row["contactid"]; ?>" class="link"><img name="delete" id="delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" src="../admin/icon/delete.png"/></a></td>
               -->
              </tr>
              <?php
                  }
                  }
              ?>
      </tbody>
    </table>
  </div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>

<!--Footer-part-->
<?php
include("adminfooter.html");
?>

<!--end-Footer-part--> 

<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>