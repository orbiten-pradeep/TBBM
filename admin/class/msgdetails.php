<?php
session_start();
include("adminheader.html");
?>
<?php
  require_once("../class/dbconnect.php");
  $sql = $DBcon->prepare("SELECT * FROM contact WHERE ID=?");
  $sql->bind_param("i",$_GET["ID"]);      
  $sql->execute();
  $result = $sql->get_result();
  if ($result->num_rows > 0) {    
    $row = $result->fetch_assoc();
  }
  $DBcon->close();
?>

<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Message Details</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    <tr class="table-row" ID="row-<?php echo $row["ID"] ?>"> 
                      <td><h4>From:<?php echo $row["username"]?></h4></td>
                    </tr>
                    <tr>
                      <td>Mobile Phone: <?php echo $row["Phone"] ?></td>
                    </tr>
                    <tr>
                      <td >E-Mail Id: <?php echo $row["email"] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                   
      <tr class="table-row" ID="row-<?php echo $row["ID"] ?>"> 
                      <td class="width30">Contact ID:</td>
                      <td class="width70"><strong><?php echo $row["ID"] ?></strong></td>
                    </tr>
                    <tr>
                      <td>Msg Time:</td>
                      <td><strong><?php echo $row["Created"] ?></strong></td>
                    </tr>
                    <tr>
                      <td>Msg From:</td>
                      <td><strong><?php echo $row["username"] ?></strong></td>
                    </tr>
                  <td class="width30">Message:</td>
                    <td class="width70"><strong><?php echo $row["message"] ?></strong> <br>
                      Contact No: <?php echo $row["Phone"] ?> <br>
                      Email: <?php echo $row["email"] ?></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
</div>
</div>
</div>

<?php
include("adminfooter.html");
?>
