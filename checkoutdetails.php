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
      if($email == ($row['email']) ){
      $email = $row['email'];
      $phone = $row['phone'];
      $tickets =$row['tickets'];
     

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
/*.btn {
    font-family:"Palatino Linotype";
  
    width: auto;
    font-variant: normal;
    font-style: bold;
    padding: 10px 18px;
    background-color: #d6d6c2;
}*/
/*.navbar-default {
  background-color: #3CAFC4;
}*/
.navbar-default {
    background-color: #3CAFC4 !important;
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
              <div class="col-xs-12 col-md-6">
                <button class="btn btn-primary pull-left">Email: <?php echo $row["email"]; ?></button>
              </div>
               <div class="col-xs-12 col-md-6">
                <button class="btn btn-primary">Phone Number: <?php echo $row["phone"]; ?></button>
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
}
else{  $_SESSION['check_error'] = "Sorry Not Yet tickets Booked!..";

//include("ticketcheckout.php");
//header("Location: ../events.php");
?>
<style type="text/css">
    #welcome {
    padding-top: 0px;
    padding-bottom: 0px;
}
.hero {
    background-size: cover;
    /*background-image: url('video/Marathon_2.mp4');*/
}
.hero {
    background-size: cover;
    position: relative;
    -webkit-box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    -moz-box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    padding: 250px 0 200px;
        padding-top: 250px;
        padding-bottom: 200px;
}
.blacklayer {
    background: rgba(0, 0, 0, 0.4) url('http://demo.themely.com/parallel/wp-content/themes/parallel-pro/images/bg-strip.png') repeat scroll 0 0;
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.hero .lead {
    color: #fff;
    font-weight: 400;
    text-shadow: 0 0 6px rgba(0, 0, 0, 0.75);
    display: inline-block;
    width: 100%;
}
/*.hero .lead, .hero .title {
    margin: 0 0 -500px;
}*/

.hero .lead, .hero .title {
    margin: 0 0 -300px;
}



.lead {
    font-size: 21px;
}
@media screen and (max-width: 600px){
.hero .lead, .hero .title {
    margin: 0 0 -350px;
}
}

@media screen and (-webkit-min-device-pixel-ratio:0)
  and (min-resolution:.001dpcm) {
    .blacklayer { 
    background: rgba(0, 0, 0, 0.4) url('http://demo.themely.com/parallel/wp-content/themes/parallel-pro/images/bg-strip.png') repeat scroll 0 0;
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;

} 

@media screen and (max-width: 1024px){
    #welcome {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
}
}

@media screen and (max-width: 600px){
.hero .lead, .hero .title {
    margin: 0 0 -350px;
}
}

#welcome {
    padding-top: 0px;
    padding-bottom: 175px;
}

.hero .lead, .hero .title {
    margin: 0 0 -220px;
}

@media screen and (min-width: 1280px)
and (max-width: 1366px){
    #welcome {
    padding-top: 0px;
    padding-bottom: 0px;
}

}

}
.single-page-title {
    background: url(img/homepage-banner.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 43%;
    position: relative;
}
.single-page-title::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    }
.title-container{
    top: 75px;
    position: relative;
}
.member-btn{
    padding: 15px 60px;
    font-size: 15px;
}

.x-features .promo-content {
    color: white;
    overflow: hidden;
    border-bottom: none !important;
    margin-bottom: 20px;
    padding-bottom: 10px;
    padding-top: 15px;
}
.ptb-100 {
    padding-top: 55px;
    padding-bottom: 55px;
}
.o2{
    margin-left: 30px;
}
#first-title{
    color: white;
    position: relative; 
    font-size: 35px;
}
#second-title{
    font-size: 30px;
    display: block;
    margin-top: 40px;
}
.btn-mem{
    top: 100px;
}
@media (max-width: 600px){
    #first-title{
    font-size: 22px;
}
#second-title {
    font-size: 28px;
    margin-top: 15px;
}
.btn-mem {
    top: 20px;
}
.member-btn {
    padding: 15px 60px;
    font-size: 13px;
}
}

</style>
   <section class="single-page-title">
    <div class="container text-center title-container">
        <h1 id="first-title">Running is not about being better than someone else.<span id="second-title">It’s about being better than you used to be.</span></h1>
        <center> 
                <div class="col-md-12 text-center btn-mem">
                <a href="events.php" class="btn btn-lg btn-primary member-btn" style=""  title="Check out this link shortly for exciting offers and merchandise!">Book Your Tickets Now!...</a>
                </div>
            </center>
    </div>
</section>
<?php
  }
}
?>
<?php
include("html/footer.html")
?>
