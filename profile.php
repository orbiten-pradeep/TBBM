<?php
 // session_start();
include("class/auth.php");
$user = include("class/getuser.php");
include("html/header.html");
//include_once 'class/auth.php';
?>
    <style type="text/css">
    .navbar-default{
      background-color: #3CAFC4;
    }
/*        #leftPanel{
    background-color:#3cafc4;
    color:#fff;
    text-align: center;
}
#rightPanel{
    min-height:415px;
}*/
/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.btn-wrapper{
      position: relative;
  overflow: hidden;
  display: inline-block;
}
.btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.nav-tabs > li > a{
    color: #3cafc4; 
}
.ptb-100{
    padding-top: 124px;
}
.nav-tabs > li.active > a{
    color: white !important;
    background-color: #3cafc4 !important;
}
.well{
    padding-top:0px;
}
.breadcrumb{
    background: none !important;
}

ul > .text-center.breadcrumb > li > a{
    color: #3cafc4 !important;
}
@media screen and (max-width: 600px){
  .navbar-default {
    background: #3CAFC4 !important;
    padding: 10px 0;
    border-bottom: none;
}
#profile-img{
  width: 50% !important;
}
}
hr{
  border-top: 1px solid #ddd !important;
}
input[type="date"]::-webkit-inner-spin-button{
  display: none;
}
.step-controls{
  display: none;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  display: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    margin: 0 !important; 
}
input[type='number'] {
    -moz-appearance:textfield;
}
.verticalLine {
  border-left: 2px solid #ddd;
  padding-right: 20px;
  margin-top: -100px;
}
/*@media (min-width:801px) {
  .verticalLine {
  width: 25% !important;
}
}*/
/*.img-circle {
    border-radius: 0% !important;
}*/

.breadcrumb > .active > a {
    color: #777;
}
.mob-edit{
    display: none;
  }
@media (max-width: 600px){
  .verticalLine{
    margin-top: 0px;
    border-left: 0px;
  }
  .edit-btn{
    display: none;
  }
  .mob-edit{
    display: block;
  }
  .well{
    padding-bottom: 100px;
  }
}
/*.profile-header-container{
    margin: 0 auto;
    text-align: center;
}*/

/*.profile-header-img {
    padding: 54px;
}*/

.profile-header-img > img.img-circle {
    width: 120px;
    height: 120px;
    border: 2px solid #3CAFC4;
}

.profile-header {
    margin-top: 43px;
}

/**
 * Ranking component
 */
.rank-label-container {
    margin-top: -19px;
    /* z-index: 1000; */
    /*text-align: center;*/
    margin-left: 25px;
}

.label.label-default.rank-label {
    background-color: rgb(81, 210, 183);
    padding: 5px 10px 5px 10px;
    border-radius: 27px;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 8px;
    padding-bottom: 8px;
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

.navbar-default {
    background-color: #3CAFC4 !important;
}
.mob-ticket{
    display: none;
  }
@media (max-width: 600px){
  .mob-ticket{
    display: block;
  }
  .desk-ticket{
 display: none; 
}
}
</style>


<!-- #x-corp-carousel-->
<section class="x-services ptb-100 gray-bg">
<div class="row breadcrumbs margin-bottom-40" style="background-color: #f2f2f2;">
            <div class="container">
                <div class="col-md-12 col-sm-12 text-center">
                    <h1><strong></strong></h1>
                </div><br>
                <div class="col-md-12 col-sm-12">
                <ul class="text-center breadcrumb">
                  <li class="active"><a href="profile.php">My Profile</a></li>
                  <li><a href="member-benefits.php">Member Benefits</a></li>
                  <li><a href="member-offers.php">Offers</a></li>
                </ul>
                </div>
            </div><br>
        </div>
<section>
<div class="container">
<br>
<br>
    <div class="row" id="main">
        <div class="col-md-12 well">
            <div class="row" style="margin-left: -20px;">
            <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#profile" data-toggle="tab" title="My Profile">
                   My Profile
                  </a>
                  </li>
                  <li><a href="#chngpswd" data-toggle="tab" title="password">
                     <span class="round-tabs two">
                       Change Password
                     </span> 
                    </a>
                 </li>
                  <li><a href="#ticket" data-toggle="tab" title="tichistory">
                     <span class="round-tabs two">
                      Ticket History
                     </span> 
                    </a>
                 </li>
                     </ul>
                     </div>
                <div class="tab-content" style="margin-top: 20px;">
                 <div class="tab-pane fade in active" id="profile">
                <div class="col-md-12">
                   
                    <div class="row">
                    
                         <div class="profile-header-container col-md-2">   
        <div class="profile-header-img">
        <?php if($user['profile'] != ""): ?>
                <img class="img-circle" id="profile-img" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image"/>
                <?php else: ?>
                        <img src="img/profile.png" alt="Profile-image" class="img-circle">
                  <?php endif; ?>
                
            </div>
        </div> 
                        <div class="col-md-6" style="margin-top: 50px;">
                          <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                         <?php 
                if($user['Membership'] != ''){
                 ?><span>(Memebership id: <?php echo $user['Membership']; ?> )</span>
                 <?php } else{ ?>
                       <span>(Memebership id: Not Yet a Member)</span>
                       <?php } ?>
                          <p><?php echo $user['email']; ?></p>
                        </div>
                    </div>
                </div>
               
     
        

            <div class="container">
            <div class="row">
            
            <div class="col-xs-12 col-sm-6 col-md-6">

            <?php 
            if($user['Membership'] == '')
            {
              ?>
              <form role="form" action="class/profile.php" method="POST">
               
                    
                    <div class="row" style="display: none;">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Firstname</label>
                                <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>" readonly="true" style="cursor: not-allowed;">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Lastname</label>
                                <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>" readonly="true" style="cursor: not-allowed;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Group</label>
                            <input type="text" name="Group" id="Group" class="form-control" placeholder="Choose Group" tabindex="3" value ="<?php echo $user['groupname']; ?>" readonly= "true" style="cursor: not-allowed;border-color: #f006;" data-toggle="tooltip" title="Become a Member To Update this Information">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 pull-right edit-btn" style="margin-top: 40px;">
                        <a href="editprofile.php">
                          <button type="button" class="btn btn-primary btn-block">Edit</button>
                        </a>
                      </div>
                    </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <input type="text" name="Gender" id="Gender" class="form-control" placeholder="Choose Gender" tabindex="3" value ="<?php echo $user['Gender']; ?>" readonly= "true" style="cursor: not-allowed;border-color: #f006;" data-toggle="tooltip" title="Become a Member To Update this Information">
                      </div>
                  </div>
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="">Blood Group</label>
                    <input type="text" name="blood" id="blood" class="form-control" placeholder="Choose Blood Group" tabindex="3" value ="<?php echo $user['blood']; ?>" readonly= "true" style="cursor: not-allowed;border-color: #f006;" data-toggle="tooltip" title="Become a Member To Update this Information">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                 <label>Contact Number</label>
                  <input style="cursor: not-allowed;border-color: #f006;" type="number" name="contact_number" id="contact_number" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" required disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
                </div>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
               <label>Date Of Birth</label>
                <input style="cursor: not-allowed;border-color: #f006;" type="date" name="date_of_birth" id="date" value ="<?php echo $user['DOB']; ?>" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Height(in CM)</label>
              <input style="cursor: not-allowed;border-color: #f006;" type="number" name="Height" id="Height" class="form-control input-lg" value ="<?php echo $user['Height']; ?>"  placeholder="Enter Your Height" tabindex="6" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Weight(in KG)</label>
              <input style="cursor: not-allowed;border-color: #f006;" type="number" name="Weight" id="Weight" class="form-control input-lg" value ="<?php echo $user['Weight']; ?>" placeholder="Enter Your Weight" tabindex="7" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 pull-right">
            <a href="editprofile.php">
                <button type="button" class="btn btn-primary btn-block mob-edit">Edit</button>
            </a>
        </div>

                </form>

              <?php
            }
            else{
            ?>
                <form role="form" action="class/profile.php" method="POST">
               
                    
                    <div class="row" style="display: none;">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Firstname</label>
                                <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>" readonly="true" style="cursor: not-allowed;">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Lastname</label>
                                <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>" readonly="true" style="cursor: not-allowed;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Group</label>
                            <input type="text" name="Group" id="Group" class="form-control" placeholder="Choose Group" tabindex="3" value ="<?php echo $user['groupname']; ?>" readonly= "true">
                        </div>
                      </div> 
                      <div class="col-xs-12 col-sm-6 col-md-4 pull-right edit-btn" style="margin-top: 40px;">
                        <a href="editprofile.php">
                          <button type="button" class="btn btn-primary btn-block">Edit</button>
                        </a>
                      </div>
                    </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <input type="text" name="Gender" id="Gender" class="form-control" placeholder="Choose Gender" tabindex="3" value ="<?php echo $user['Gender']; ?>" readonly= "true">
                      </div>
                  </div>
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="">Blood Group</label>
                    <input type="text" name="blood" id="blood" class="form-control" placeholder="Choose Blood Group" tabindex="3" value ="<?php echo $user['blood']; ?>" readonly= "true">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                 <label>Contact Number</label>
                  <input style="cursor: not-allowed;" type="number" name="contact_number" id="contact_number" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" required  readonly="true">
                </div>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
               <label>Date Of Birth</label>
                <input style="cursor: not-allowed;" type="date" name="date_of_birth" id="date" value ="<?php echo $user['DOB']; ?>" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required  readonly="true">
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Height(in CM)</label>
              <input style="cursor: not-allowed;" type="number" name="Height" id="Height" class="form-control input-lg" value ="<?php echo $user['Height']; ?>"  placeholder="Enter Your Height" tabindex="6"  readonly="true">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Weight(in KG)</label>
              <input style="cursor: not-allowed;" type="number" name="Weight" id="Weight" class="form-control input-lg" value ="<?php echo $user['Weight']; ?>" placeholder="Enter Your Weight" tabindex="7"  readonly="true">
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 pull-right">
            <a href="editprofile.php">
                <button type="button" class="btn btn-primary btn-block mob-edit">Edit</button>
            </a>
        </div>

                </form>
                <?php 
              }
                ?>
                </div>
               
                
                <div class="col-xs-12 col-md-6 verticalLine" style="height: 500px;">
                <?php if($user['Membership'] != ''){?>
                <div class="row">
                  <div class="col-md-6">
                    <img class="img-responsive" src="img/Raymond-new.png" alt="Image">
                    <p>Raymond Group is an Indian branded fabric and fashion retailer, incorporated in 1925. It produces suiting fabric, with a capacity of producing 31 million......</p>
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="img/O2-Health-Studio.png" alt="Image">
                    <p>O2 Health Studio pioneers in Health &amp; Fitness in Chennai. They have helped thousands of people in Chennai discover fitness. They teach them how to enjoy their workouts......</p>
                  </div>
                </div>
                
                        <div class="col-xs-12 col-md-12"><a href="member-benefits.php" class="btn btn-lg btn-primary btn-block">Know More</a>
                        </div>
                  <?php } else{ ?>
                  <p>You are encouraged to apply for membership. Our membership thrives on the diversity of backgrounds & locations of our members to create a rich experience for all.</p>
                  <p>Providing discount and merchandise offer from the well known brands for the members of TBBM.</p>
                  <p style="text-align: center;font-size: 15px;">Get your MEMBERSHIP ID Now!</p>
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12"><a href="member.php" class="btn btn-lg btn-primary btn-block">Become a Member</a>
                        </div>
                    </div>
                </div>
                 <?php } ?>
                </div>
                </div>
                </div>
                </div>

                <div class="tab-pane fade" id="chngpswd">
        <form  name="frmReset" id="frmReset" method="post" action="class/reset.php" onSubmit="return validate_password_reset();">
           <h2 class="form-signin-heading">Change Password</h2>
              <div class="success_message">
              </div>
              <div id="validation-message">
              </div>
        <div class="form-group user-name">
      
        <input type="hidden" name="email" id="email" class="form-control input-lg" value ="<?php echo $_SESSION['email'];?>" readonly= "true">
          <input name="password" type="password" class="form-control" placeholder="Enter New Passwword.." required>
        </div>
 <div class="form-group user-name">
    <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Ur Password.." required>
  </div>
  <br />

        <button class="btn btn-success btn-block" name="resetpassword" id="resetpassword" type="submit">Submit Password</button>
 
      </form>
            </div>

 <div class="tab-pane fade" id="ticket">
    
    <?php 
    require_once"class/dbconnect.php";
    $sql = "SELECT transactions_id, fullname, tshirt, KM, Bibno, gender, Status FROM tickets WHERE email='$email'";
    $result = $DBcon->query($sql);
    if(!$result->num_rows > 0)
    {
      ?>

      <div class="row">
                        <div class="col-xs-12 col-md-12 text-center">
                        <h4>Take part in our wide variety of events</h4>
                        <a href="events.php" class="btn btn-lg btn-primary">View Events</a>   
                    </div>
                    <?php 
    }
    else{

    ?>
    <div class="table-responsive desk-ticket">
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
            <th>Actions</th></b>
          </tr>
        </thead>
        <tbody>
          <tr><?php
          require_once"class/dbconnect.php";
      $query = $DBcon->query("SELECT transactions_id, fullname, tshirt, KM, Bibno, gender, Status FROM tickets WHERE email='$email'");
      while ($data =$query->fetch_array(MYSQLI_ASSOC)) {
?>
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
    <div class="mob-ticket">
    <?php
          require_once"class/dbconnect.php";
      $query = $DBcon->query("SELECT transactions_id, fullname, tshirt, KM, Bibno, gender, Status FROM tickets WHERE email='$email'");
      while ($data =$query->fetch_array(MYSQLI_ASSOC)) {
?>
      <table style="width: 100%;border-bottom: 1px solid #ddd;">
        <tr><th>Name:</th><td><?php  echo $data['fullname']; ?></td></tr>
        <tr><th>Gender:</th><td><?php  echo $data['gender']; ?></td></tr>
        <tr><th>T-Shirt Size:</th><td><?php  echo $data['tshirt']; ?></td></tr>
        <tr><th>KM:</th><td><?php  echo $data['KM']; ?></td></tr>
        <tr><th>Bib-No:</th><td><?php  echo $data['Bibno']; ?></td></tr>
        <tr><th>Status:</th><td><?php  echo $data['Status']; ?></td></tr>
        <tr><th></th><td><a href="pdf/actionpdf.php?transactions_id=<?php echo $data["transactions_id"]; ?>">Download</a></td></tr>
      </table>
      <?php } ?>
    </div>
   <?php } ?>
  </div>



            </div>
            </div>
            </div>


            
        <div class="col-md-8 well" id="rightPanel" style="display: none;">
            <div class="row">
            <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                   Edit Profile
                  </a>
                  </li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                       Merchandise
                     </span> 
                    </a>
                 </li>

                 <li><a href="#profile2" data-toggle="tab" title="profile2">
                     <span class="round-tabs two">
                       Brands & Offers
                     </span> 
                    </a>
                 </li>
                     </ul>
    <div class="tab-content">
    <div class="tab-pane fade in active" id="home">
    <div class="col-md-12">
        <form role="form" action="class/profile.php" method="POST">
            <h2>View profile</h2>
            <hr class="">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group" >
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" value ="<?php echo $user['email']; ?>" readonly= "true" style="cursor: not-allowed;">
                
                <input type="hidden" name="role_update" id="email" class="form-control input-lg" value ="User" readonly= "true">
            </div>
           
            <hr class="">
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <input type="submit" value="Save" class="btn btn-success btn-block btn-lg"></div>
                <div class="col-xs-12 col-md-6 "><a href="member.php" class="btn btn-lg btn-primary btn-block">Become a Member</a></div>
            </div>
        </form>
    </div>
</div>
<div class="tab-pane fade imagevalid" id="profile">
<div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-1.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Gifts & Apparels</a></h3>

                        <p>A complimentary gift of Big Beach Marathon merchandise.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-2.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Offers & Discounts</a></h3>

                        <p>A 15% discount on the race registration fee for all Big Beach Marathons across India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="tab-pane fade imagevalid" id="profile2">
<div class="col-md-12">


        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-1.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Gifts & Apparels</a></h3>

                        <p>A complimentary gift of Big Beach Marathon merchandise.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-2.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Offers & Discounts</a></h3>

                        <p>A 15% discount on the race registration fee for all Big Beach Marathons across India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
</div>
</div>

</section>
</section>

<?php
include("html/footer.html")
?>