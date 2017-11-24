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
    padding-top: 200px;
}
.nav-tabs > li.active > a{
    color: white !important;
    background-color: #3cafc4 !important;
}
/*.well{
    padding-top:0px;
}*/
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
  margin-top: 175px;
}
.img-circle {
    border-radius: 0% !important;
}
/*@media (min-width:801px) {
  .verticalLine {
  width: 25% !important;
}
}*/
</style>


<!-- <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel"> -->
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>
 -->
    <!-- Wrapper for slides -->
 <!--    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>It′s simple, smart and occasionally magical.</h1>

                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                    transition emerging schemas and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>It′s profitable and successful!</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                    Compellingly revolutionize future-proof interfaces and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good solutions for your business!</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>
 -->
    <!-- Controls -->
<!--     <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div> -->
<!-- #x-corp-carousel-->
<section class="x-services ptb-100 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-12">
          <!-- <h2>Edit profile</h2>
            <hr class=""> -->
              <div>  
                
                <h2>Profile Pic</h2>   
              </div>
        </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
             <?php 
                //session_start();
                if($user['Membership'] == 0){
                ?>
                <form role="form" enctype="multipart/form-data" action="class/profile.php" method="POST">
                <div class="row">
                 <div class="col-md-4 pull-left" style="margin-bottom: 10px;">
                    <?php if($user['profile'] != ""): ?>
                         <img style="cursor: pointer;" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image" class="img-circle img-thumbnail profile-img">
                    <?php else: ?>
                    <img style="cursor: pointer;" src="img/profile.png" alt="Profile-image" class="img-circle img-thumbnail profile-img">
                <?php endif; ?>
                <a href="class/profile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                <a onClick="return confirm('Are You Sure ?');" title="Delete" href="class/profile.php?deleteid=<?=$user['ID']?>">Remove Pic</a>
                <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/> 
                </div>
                <div class="col-md-8">
                  <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                  <p><?php echo $user['email']; ?></p>
                </div>
                </div>  
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Firstname</label>
                                 <input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Lastname</label>
                                <input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <!-- <div class="col-xs-12 col-sm-6 col-md-6">
                         <div class="form-group" >
                            <label>Email</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="3" value ="<?php echo $user['email']; ?>" readonly= "true" style="cursor: not-allowed;">
                        
                              <input type="hidden" name="role_update" id="email" class="form-control input-lg" value ="User" readonly= "true">
                          </div>
                      </div> -->
                      <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <select style="cursor: not-allowed;border-color: #f006;" class="form-control" id="sel1" name="Gender" value ="<?php echo $user['Gender']; ?>" required disabled="true"  readonly= "true" data-toggle="tooltip" title="Become a Member To Update this Information">
                            <option name="Gender" value="">Select Gender</option>
                            <option name="Gender" value="Male">Male</option>
                            <option  name="Gender" value="Female">Female</option>
                          </select>
                      </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Group</label>
                            <select style="cursor: not-allowed;border-color: #f006;" disabled="true" class="form-control" id="groupname" name="groupname" value ="<?php echo $user['groupname']; ?>" required readonly= "true" data-toggle="tooltip" title="Become a Member To Update this Information">
                              <option value="">Select Group</option>
                              <option name="groupname" value="Bangalore">Big Beach runners - Bangalore</option>
                              <option name="groupname" value="Chennai">Big Beach runners - Chennai</option>
                              <option name="groupname" value="Pune">Big Beach runners - Pune</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                     
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="">Blood Group</label>
                      <select style="cursor: not-allowed;border-color: #f006;" disabled="true" class="form-control" id="sel1" name="blood" value ="<?php echo $user['blood']; ?>" required  readonly= "true" data-toggle="tooltip" title="Become a Member To Update this Information">
                        <option  value="">Select Blood Group</option>
                        <option  name="blood" value="A+">A+</option>
                        <option  name="blood" value="A-">A-</option>
                        <option  name="blood" value="B+">B+</option>
                        <option  name="blood" value="B-">B-</option>
                        <option  name="blood" value="O+">O+</option>
                        <option  name="blood" value="O-">O-</option>
                        <option  name="blood" value="AB+">AB+</option>
                        <option  name="blood" value="AB-">AB-</option>
                      </select>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                 <label>Contact Number</label>
                  <input style="cursor: not-allowed;border-color: #f006;" type="number" name="ContactNumber" id="ContactNumber" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information" required>
                </div>
              </div>
            </div>
            <div class="row">
              
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
               <label>Date Of Birth</label>
                <input style="cursor: not-allowed;border-color: #f006;" type="date" name="DOB" id="date" value ="<?php echo $user['DOB']; ?>" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Height(in CM)</label>
              <input style="cursor: not-allowed;border-color: #f006;" type="number" name="Height" id="Height" class="form-control input-lg" value ="<?php echo $user['Height']; ?>"  placeholder="Enter Your Height" tabindex="6" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
            </div>
          </div>
          </div>
          <div class="row">
          
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Weight(in KG)</label>
              <input style="cursor: not-allowed;border-color: #f006;" type="number" name="Weight" id="Weight" class="form-control input-lg" value ="<?php echo $user['Weight']; ?>" placeholder="Enter Your Weight" tabindex="7" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
            </div>
          </div>
           <div class="col-xs-12 col-sm-6 col-md-6" style="margin-top: 30px;">
            <input type="submit" value="Save"  name="memberupdate" class="btn btn-primary pull-right"/>
          </div>
        </div>
      <!--   <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <li>
                  <input type="submit" value="Save"  name="role_update" class="btn btn-success btn-block btn-lg"/>
                </li>   
            </div>
        </div> -->
        </form>
                <?php }?>
                <?php 
                if($user['Membership'] != ''){
                 ?>
                <form role="form" enctype="multipart/form-data" action="class/profile.php" method="POST">
                      <div class="row">
                 <div class="col-md-4 pull-left" style="margin-bottom: 10px;">
                    <?php if($user['profile'] != ""): ?>
                         <img style="cursor: pointer;" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image" class="img-circle img-thumbnail profile-img">
                    <?php else: ?>
                    <img style="cursor: pointer;" src="img/profile.png" alt="Profile-image" class="img-circle img-thumbnail profile-img">
                <?php endif; ?>
                <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/> 
                </div>
                <div class="col-md-8">
                  <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                  <input type="submit" value="Save"  name="memberupdate" class="btn btn-primary pull-right"/>
                </div>
                </div> 

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Firstname</label>
                                 <input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Lastname</label>
                                <input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6">
                         <div class="form-group" >
                            <label>Email</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="3" value ="<?php echo $user['email']; ?>" readonly= "true" style="cursor: not-allowed;">
                        
                              <input type="hidden" name="role_update" id="email" class="form-control input-lg" value ="User" readonly= "true">
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Group</label>
                                <select style=""  class="form-control" id="groupname" name="groupname" value ="<?php echo $user['groupname']; ?>" required >
                                  <option value="">Select Group</option>
                                  <option name="groupname" value="Bangalore">Big Beach runners - Bangalore</option>
                                  <option name="groupname" value="Chennai">Big Beach runners - Chennai</option>
                                  <option name="groupname" value="Pune">Big Beach runners - Pune</option>
                                </select>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <select style="" class="form-control" id="Gender" name="Gender" value ="<?php echo $user['Gender']; ?>" required>
                            <option  value="">Select Gender</option>
                            <option name="Gender" value="Male">Male</option>
                            <option  name="Gender" value="Female">Female</option>
                          </select>
                      </div>
                  </div>
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="">Blood Group</label>
                      <select style="" class="form-control" id="blood" name="blood" value ="<?php echo $user['blood']; ?>" required >
                        <option  value="">Select Blood Group</option>
                        <option  name="blood" value="A+">A+</option>
                        <option  name="blood" value="A-">A-</option>
                        <option  name="blood" value="B+">B+</option>
                        <option  name="blood" value="B-">B-</option>
                        <option  name="blood" value="O+">O+</option>
                        <option  name="blood" value="O-">O-</option>
                        <option  name="blood" value="AB+">AB+</option>
                        <option  name="blood" value="AB-">AB-</option>
                      </select>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                 <label>Contact Number</label>
                  <input style="" type="number" name="ContactNumber" id="ContactNumber" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" required >
                </div>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
               <label>Date Of Birth</label>
                <input style="" type="date" name="DOB" id="date" value ="<?php echo $user['DOB']; ?>" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required >
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Height(in CM)</label>
              <input style="" type="number" name="Height" id="Height" class="form-control input-lg" value ="<?php echo $user['Height']; ?>"  placeholder="Enter Your Height" tabindex="6" >
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
             <label>Weight(in KG)</label>
              <input style="" type="number" name="Weight" id="Weight" class="form-control input-lg" value ="<?php echo $user['Weight']; ?>" placeholder="Enter Your Weight" tabindex="7" >
            </div>
          </div>
        </div>
<!--         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <li>
                  <input type="submit" value="Save"  name="memberupdate" class="btn btn-success btn-block btn-lg"/>
                </li>
            </div>
            </div> -->
        </div>
        </form>
<?php }?>
                </div>
                <div class="col-xs-12 col-md-6 verticalLine" style="height: 500px;">
                 <p>You are encouraged to apply for membership. Our membership thrives on the diversity of backgrounds & locations of our members to create a rich experience for all.</p>

                <p>Providing discount and merchandise offer from the well known brands for the members of TBBM.</p>

                <p style="text-align: center;font-size: 15px;">Get your MEMBERSHIP ID Now!</p>
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12"><a href="member.php" class="btn btn-lg btn-primary btn-block">Become a Member</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
          <div class="col-md-9 well" id="rightPanel" style="display: none;">
            <div class="row">
                <form role="form" action="class/profile.php" method="POST">
                    <center><h2>My Profile</h2></center>
                    <hr class="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1"  value ="<?php echo $user['FirstName']; ?>" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value ="<?php echo $user['LastName']; ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3" value ="<?php echo $user['email']; ?>" readonly= "true">
                        
                        <input type="hidden" name="role_update" id="email" class="form-control input-lg" value ="User" readonly= "true">
                    </div>
                    <!--  <?php 
                //session_start();
                if ($user['Membership']!= 0) {
                ?>
<div class="form-group">
                          <label>Group</label>
                                <select style="" class="form-control" value ="<?php echo $user['Group']; ?>" id="sel1" name="Group" required >
                                  <option value="Bangalore">Big Beach runners - Bangalore</option>
                                  <option value="Chennai">Big Beach runners - Chennai</option>
                                  <option value="Pune">Big Beach runners - Pune</option>
                                </select>
                        </div>
                    <div class="form-group">
                        <label for="">Sex</label>
                          <select style="" class="form-control" id="sel1" value ="<?php echo $user['Gender']; ?>" name="Sex" required >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                      </div>

                      <div class="form-group">
                    <label for="">Blood Group</label>
                      <select style="" class="form-control" id="sel1" value ="<?php echo $user['blood']; ?>" name="Blood" required >
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                      </select>
                  </div>
                  <div class="form-group">
                 <label>Contact Number</label>
                  <input style="" type="number" name="contact_number" id="contact_number" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" required >
                </div>
                  <div class="form-group">
               <label>Date Of Birth</label>
                <input style="" type="date" name="date_of_birth" id="date" class="form-control input-lg" value ="<?php echo $user['DOB']; ?>" placeholder="Enter Your Date Of Birth" tabindex="5" required >
              </div>
           
          
            <div class="form-group">
             <label>Height(in CM)</label>
              <input style="" type="number" name="Height" id="Height" class="form-control input-lg" value ="<?php echo $user['Height']; ?>" placeholder="Enter Your Height" tabindex="6" >
            </div>
         
         
            <div class="form-group">
             <label>Weight(in KG)</label>
              <input style="" type="number" name="Weight" id="Weight" class="form-control input-lg" value ="<?php echo $user['Weight']; ?>" placeholder="Enter Your Weight" tabindex="7" >
            </div>
          
<?php }?> -->

                    <!-- <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="sel1">Sex</label>
                                    <select class="form-control" id="sel1">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                            </div>
                        </div>
                    </div> -->
                    <hr class="">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 ">
                            <input type="submit" value="Save" class="btn btn-success btn-block btn-lg"></div>
                        <div class="col-xs-12 col-md-6 " style="display: none;"><a href="member.php" class="btn btn-lg btn-primary btn-block">Become a Member</a></div>
                    </div>
                </form>
                <form  name="frmReset" id="frmReset" method="post" action="class/profile.php" style="display: none;" onSubmit="return validate_password_reset();">

 <h2 class="form-signin-heading">Reset Password</h2>
  <div class="success_message"></div>
  <div id="validation-message">
    </div>

        <div class="form-group user-name">

   
    <input name="password" type="password" class="form-control" placeholder="Enter New Pass.." required>


  </div>

 <div class="form-group user-name">

   
    <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Ur Password.." required>


  </div>

  <br />

        <button class="btn btn-success btn-block" name="resetpassword" id="resetpassword" type="submit">Submit Password</button>
 
      </form>
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
            <h2>Edit your profile</h2>
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
            <!-- <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="sel1">Sex</label>
                            <select class="form-control" id="sel1">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                    </div>
                </div>
            </div> -->
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

<?php
include("html/footer.html")
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
  $('.profile-img').click(function(){ $('#upload-btn').trigger('click'); });
</script>

