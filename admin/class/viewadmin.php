<?php
  require_once("../class/dbconnect.php");
  $sql = $DBcon->prepare("SELECT * FROM admin WHERE ID=?");
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
            <h5 >Admin Details</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    <tr class="table-row" ID="row-<?php echo $row["ID"] ?>"> 
                     <td><?php echo $row["ID"]?></td>
      <td><?php echo $row["Username"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["role"]?></td>
      <td> <?php

if( $row["Status"] == 0){
    echo "Processing";
} elseif($row["Status"] == 1){
    echo "Activated";
} else{
    echo "Deactivated!";
}
?></td>
      <td><?php echo $row["Gender"]?></td>
      <tr class="table-row">
      <td><label>Profile Pic</label></td>
      <td>
       <?php if($row["profile"] != ""): ?>
        <img src="../img/<?php echo $row['profile'];?>" alt=" " height="75" width="75"></td>

                                   
                                    <?php else: ?>
                        <img src="../img/profile.png" alt=" " height="75" width="75">
                        <?php endif; ?></td>
    </tr>
    
      <td><?php echo $row["created"]?></td>
    </tr>
                  </tbody>
                </table>
              </div>
              </div></div></div>
</div></div></div>
