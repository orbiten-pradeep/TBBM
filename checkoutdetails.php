<?php
include("html/header.html");
require_once 'class/dbconnect.php';

if(isset($_POST['checkout']))
{
  $email = $_POST['email'];
     $query = "";
      $query = $DBcon->query("SELECT * FROM tickets WHERE email='$email'");
      $row = $query->fetch_array(MYSQLI_ASSOC);
      //$ID = $row['ID'];
      $email = $row['email'];
      $phone = $row['phone'];
      $tickets =$row['tickets'];
     
}
?>
<style type="text/css">
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #31aae2;
    color: white;
}
.button {
  display: inline-block;
  padding: 5px 5px;
  font-size: 14px;
  font-color: white;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.btn {
    font-family:"Palatino Linotype";
  
    width: auto;
    font-variant: normal;
    font-style: bold;
    padding: 10px 18px;
    background-color: #d6d6c2;
}
.navbar-default {
  background-color: #3CAFC4;
}
</style>

<section class="x-services ptb-100 gray-bg ">
<section class="contact-form ptb-100">
    <div class="container text-center">
    <div class="container">
  <div class="container">
  <div class="row">
  <div class="panel-heading">
          <div class="panel-title">
            <div class="row">
              <div class="col-xs-6">
                <h4 class="btn pull-left">Email: <?php echo $row["email"]; ?></h4>
              </div>
               <div class="col-xs-6">
                <h5 class="btn">Phone Number: <?php echo $row["phone"]; ?></h5>
              </div>
            </div>
          </div>
        </div>
    <div class="table-responsive">
      <table id="customers" class="table table-bordered">
        <thead >
          <tr><b>
            <!-- <th><center>Event</th> -->
            <th><center>Name</th>
            <th><center>Gender</th>
            <th><center>T-Shirt Size</th>
            <th><center>KM</th>
            <th><center>Bib-No</th>
            <th><center>Status</th>
            <th><center>Actions</center></th></b>
          </tr>
        </thead>
        <tbody>
          <tr><?php
      $query = $DBcon->query("SELECT transactions_id, fullname, tshirt, KM, Bibno, gender, Status FROM tickets WHERE email='$email'");
      while ($data =$query->fetch_array(MYSQLI_ASSOC)) {
?>
           <!--  <td> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/TheBigBeachMarathon280.png" style="width: 100px; height: 52px; 
  box-shadow: 0 9px #999;"> </a></td> -->
            <td><?php  echo $data['fullname']; ?></td>
            <td><?php  echo $data['gender']; ?></td>
            <td><?php  echo $data['tshirt']; ?></td>
            <td><?php  echo $data['KM']; ?></td>
            <td><?php  echo $data['Bibno']; ?></td>
            <td><span class="label label-info"><?php  echo $data['Status']; ?></span></td>
            <td> <a href="pdf/actionpdf.php?transactions_id=<?php echo $data["transactions_id"]; ?>">
            <button class="btn btn-primary">Download</button></a></td>
          </tr><?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>   <!--  <div class="header" >
  <table><tr><td><h2>Email:<?php //echo $row["email"]; ?></h2></td><td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone Number:<?php //echo $row["phone"]; ?></h2></td><td><h2>&nbsp;&nbsp;&nbsp;No.Of.Tickets:<?php //echo $row["tickets"]; ?></h2></td></tr></table>
</div>
<div class="row">
<div class="col-22 menu1">
  <ul>
    <li>Bib-NO</li>
    </li>
  </ul>
</div>
<div class="col-22 menu1">
  <ul>
  <li>Name</li>
    </ul>
</div>
<div class="col-22 menu">
  <ul>
  <li>Gender</li>
    </ul>
</div>
<div class="col-22 menu">
  <ul>
  <li>T shirt</li>
  </ul>
</div>
<div class="col-21 menu">
  <ul>
  <li>KM</li>
  </ul>
</div>
<div class="col-22 menu">
  <ul>
  <li>Status</li>
  </ul>
</div>

<?php
     // $query = $DBcon->query("SELECT fullname, tshirt, KM, Bibno, gender, Status FROM tickets WHERE email='$email'");
      //while ($data =$query->fetch_array(MYSQLI_ASSOC)) {
        # code...
      //   echo "<div class='col-2 menu table-row'>";
      //   echo "<li>".$data['fullname']."</li>";
      //   echo "<td>".$data['gender']."</td>";
      //   echo "<td>".$data['tshirt']."</td>";
      //   echo "<td>".$data['KM']."</td>";
      //   echo "<td>".$data['Bibno']."</td>";
      // echo "</div>";
?>
<div class="col-2 menu table-row">
  <ul>
    <li><?php  //echo $data['Bibno']; ?></li>
  </ul>
</div>
<div class="col-2 menu">
  <ul>
    <li><?php // echo $data['fullname']; ?></li>
    </ul>
</div>
<div class="col-2 menu">
  <ul>
    <li><?php  //echo $data['gender']; ?></li>
    </ul>
</div>
<div class="col-2 menu">
  <ul>
    <li><?php  //echo $data['tshirt']; ?></li> 
  </ul>
</div>
<div class="col-1 menu">
  <ul>
    <li><?php  //echo $data['KM']; ?></li>
   
  </ul>
</div>
<div class="col-2 menu">
  <ul>
    <li><?php  //echo $data['Status']; ?></li>
   
  </ul>
</div></div>
</div> -->
        <!-- <div class="row"> -->
            <!-- <div id="" class=""> -->
     <!--  <div class=""> -->
          <!-- <div class=""> -->
             <!--  <h4 class="" id="">Welcome To The Big Beach Marathon</h4> -->
          <!-- </div> -->
          <!-- <div class=""> -->

              <!-- <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                      <div class="well">
                          
<form class="form-signin" method="POST" action="class/check.php">

 <h2 class="form-signin-heading">Event Ticket Checkout</h2>

<h4 class="form-signin-heading">Enter Your Email using while Ticket booking</h4>
        <div class="form-group user-email">

   
    <input type="text" name="email" class="form-control" placeholder="Enter your email.." required>

  </div>

  <br />

        <button class="btn btn-success btn-block" name="checkout" type="submit">Submit</button>

        <a class="btn btn-lg btn-primary btn-block" href="join.php">Login</a>

      </form>

                      </div>
                  </div>
                 </div> -->
          <!-- </div> -->
     <!--  </div> -->
  <!-- </div> -->
        <!-- </div> -->

</section>
</section>

<?php
include("html/footer.html")
?>
