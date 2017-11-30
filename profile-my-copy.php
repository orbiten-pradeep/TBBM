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
}
/*@media (min-width:801px) {
  .verticalLine {
  width: 25% !important;
}
}*/
.img-circle {
    border-radius: 0% !important;
}

.breadcrumb > .active > a {
    color: #777;
}
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
                     </ul>
                     </div>
                <div class="tab-content" style="margin-top: 20px;">
                 <div class="tab-pane fade in active" id="profile">
                <div class="col-md-12">
                    <!-- <h2>View profile</h2>
                    <hr class=""> -->
                    <div class="row">
                    <div class="col-md-2 pull-left" style="margin-bottom: 10px;"><?php if($user['profile'] != ""): ?>
                                    <img id="profile-img" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image" class="img-circle img-thumbnail">
                                    <?php else: ?>
                        <img src="img/profile.png" alt="Profile-image" class="img-circle img-thumbnail">
                        <?php endif; ?>
                        </div>
                        <div class="col-md-6" style="margin-top: 50px;">
                          <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                          <span>(Memebership id: Not Yet a Member)</span>
                          <p><?php echo $user['email']; ?></p>
                        </div>
                    </div>
                </div>
               
     
        <!-- </div> -->
         <!--  <div class="col-md-9 well" id="rightPanel"> -->

            <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
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
                     <!--  <div class="col-xs-12 col-sm-6 col-md-6">
                         <div class="form-group" >
                            <label>Email</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="3" value ="<?php echo $user['email']; ?>" readonly= "true" style="cursor: not-allowed;">
                        
                              <input type="hidden" name="memberupdate" id="email" class="form-control input-lg" value ="User" readonly= "true">
                          </div>
                      </div> -->
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Group</label>
                            <input type="text" name="Group" id="Group" class="form-control" placeholder="Choose Group" tabindex="3" value ="<?php echo $user['groupname']; ?>" readonly= "true" style="cursor: not-allowed;border-color: #f006;" data-toggle="tooltip" title="Become a Member To Update this Information">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 pull-right" style="margin-top: 40px;">
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
                   <!--  <hr class=""> -->
                   
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">

                        <a href="editprofile.php">
                                <button type="button" class="btn btn-success btn-block btn-lg">Edit</button>
                            </a>
                            </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-6" style="display: none;"><a href="member.php" class="btn btn-lg btn-primary btn-block">Become a Member</a></div>
                    </div> -->
                </form>
                </div>
                <div class="col-xs-12 col-md-6 verticalLine" style="height: 400px;">
                  <p style="color:#313131;">You are encouraged to apply for membership. Our membership thrives on the diversity of backgrounds & locations of our members to create a rich experience for all.</p>
                  <p style="color:#313131;">Providing discount and merchandise offer from the well known brands for the members of TBBM.</p>
                  <p style="text-align: center;font-size: 15px;color:#313131;">Get your MEMBERSHIP ID Now!</p>
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

                <div class="tab-pane fade" id="chngpswd">
                  <form  name="frmReset" id="frmReset" method="post" action="class/reset.php" onSubmit="return validate_password_reset();">
                     <h2 class="form-signin-heading">Change Password</h2>
                        <div class="success_message">
                        </div>
                        <div id="validation-message">
                        </div>
                  <div class="form-group user-name">
                    <input name="password" type="password" class="form-control" placeholder="Enter New Passwword.." required>
                  </div>
           <div class="form-group user-name">
              <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Ur Password.." required>
            </div>
            <br />

                  <button class="btn btn-success btn-block" name="resetpassword" id="resetpassword" type="submit">Submit Password</button>
           
                </form>
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
</section>

<?php
include("html/footer.html")
?>