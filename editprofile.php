<?php
// session_start();
include("class/auth.php");
$user = include("class/getuser.php");
include("html/header.html");
//include_once 'class/auth.php';
?>

<?php

if((empty($user['profile'])) && (isset($user['Membership']) || (empty($user['Membership']))))
{

  $user['profile'] = "profile.png";

}

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
}
/*.img-circle {
    border-radius: 0% !important;
}*/
 .img:hover .upload{
  
  display: block;
  background: #000000b3;
  position: absolute;
  bottom: 25px;
  height: 25px;
}
.upload{
  display: none;
}
.save-mob-btn{
  display: none;
}
@media (max-width: 600px){
  .verticalLine{
    border-left: 0px;
    margin-top: 25px;
  }
  .save-mob-btn{
    display: block;
  }
  .save-btn{
    display: none;
  }
}
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
/*.upload::hover{
  display: block;
}*/
/*@media (min-width:801px) {
  .verticalLine {
  width: 25% !important;
}
}*/

#profile-img{
      background-image:url("http://localhost/TBBM.git/trunk/UploadImage/<?php echo $user['profile'];?>");
       background-size:cover;
       background-position: center;
       height: 120px; width: 120px;
       border: 1px solid #bbb;
       border-radius: 50%;
  
}

.uploadWrapper {
    overflow: hidden;
    position: relative;
    height: 25px;
    width: 70px;
     background-color: #3CAFC4;
    padding: 1px 0px 0px 15px;
    border-radius: 27px;
    cursor: pointer;
}
.uploadWrapper input {
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
}
.uploadWrapper p {
   /* margin: 0 10px;
    position: absolute;
    line-height: 25px;*/
    color: white;
}
</style>
<section class="x-services ptb-100 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 well">
        <div class="col-md-12">
           <div>   
                <h2>Profile Pic</h2>   
              </div>
        </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php 
                if($user['Membership'] != ''){
                 ?>
                <form role="form" enctype="multipart/form-data" action="class/profile.php" method="POST">
                      <div class="row">
                 
                <div class="profile-header-container col-md-4">   
                  <div class="profile-header-img">
                  <?php if($user['profile'] != ""): ?>
                    <div id='profile-img'>
                    </div>
                    <a href="class/profile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                        <div class="rank-label-container">
                          <div class="uploadWrapper">
                        <input display type='file' id='getval' name="image"  onchange="readURL(event)" />
                          <p>Upload</p>
                      </div>
                  <!-- <input display type='file' id='getval' name="image"  onchange="readURL(event)" /> -->
                  
                 <!--  <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/>
                    <span style="cursor: pointer;" class="label label-default rank-label profile-img">Upload</span> -->
                </div>
                          <!-- <img class="img-circle profile-img" id="profile-img" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image"/> -->
                          
                          <?php else: ?>
                            <div id='profile-img'></div>

                            
                        <!-- <img src="img/profile.png" alt="Profile-image" class="img-circle profile-img"> -->
                        <a href="class/profile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                        <div class="rank-label-container">

                  <input display type='file' id='getval' name="image"  onchange="readURL(event)" />
                  
                 <!--  <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/>
                    <span style="cursor: pointer;" class="label label-default rank-label profile-img">Upload</span> -->
                </div>
                  <?php endif; ?>
                <!-- badge -->
                
            </div>
        </div>
                <div class="col-md-8">
                  <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                  <span><h6>(Memebership id: <?php echo $user['Membership']; ?>)</h6></span><br>
	<?php if($user['profile'] != ""): ?>
                  <a onClick="return confirm('Are You Sure ?');" title="Delete" href="class/profile.php?deleteid=<?=$user['ID']?>">Remove Pic</a>
                   <?php endif; ?>
                  <input type="submit" value="Save"  name="memberupdate" class="btn btn-primary pull-right save-btn"/>
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
                                  <option value="groupname"<?=$user['groupname'] == 'Bangalore' ? ' selected="selected"' : '';?>>Big Beach runners - Bangalore</option>
                                  <option value="groupname"<?=$user['groupname'] == 'Chennai' ? ' selected="selected"' : '';?>>Big Beach runners - Chennai</option>
                                  <option value="groupname"<?=$user['groupname'] == 'Mumbai' ? ' selected="selected"' : '';?>>Big Beach runners - Mumbai</option>
                                </select>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <select style="" class="form-control" id="Gender" name="Gender" value ="<?php echo $user['Gender']; ?>" required>
                            <option value="Male"<?=$user['Gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                            <option value="Female"<?=$user['Gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                          </select>
                      </div>
                  </div>
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="form-group">
                    <label for="">Blood Group</label>
                      <select style="" class="form-control" id="blood" name="blood" value ="<?php echo $user['blood']; ?>" required >
                         <option value="A+"<?=$user['blood'] == 'A+' ? ' selected="selected"' : '';?>>A+</option>
                        <option value="A-"<?=$user['blood'] == 'A-' ? ' selected="selected"' : '';?>>A-</option>
                        <option value="B+"<?=$user['blood'] == 'B+' ? ' selected="selected"' : '';?>>B+</option>
                        <option value="B-"<?=$user['blood'] == 'B-' ? ' selected="selected"' : '';?>>B-</option>
                        <option value="O+"<?=$user['blood'] == 'O+' ? ' selected="selected"' : '';?>>O+</option>
                        <option value="O-"<?=$user['blood'] == 'O-' ? ' selected="selected"' : '';?>>O-</option>
                        <option value="AB+"<?=$user['blood'] == 'AB+' ? ' selected="selected"' : '';?>>AB+</option>
                        <option value="AB-"<?=$user['blood'] == 'AB-' ? ' selected="selected"' : '';?>>AB-</option>
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
        <div class="col-xs-12 col-sm-6 col-md-6 save-mob-btn">
          <input type="submit" value="Save"  name="memberupdate" class="btn btn-primary pull-right btn-block"/>
        </div>
        </div>
        </form>
         <div class="col-xs-12 col-md-6 verticalLine" style="height: 615px;">
                <!-- <p style="text-align: center;font-size: 15px;">Your MEMBERSHIP ID : <?php echo $user['Membership']; ?> </p>
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12">
                       </div>
                    </div>
                </div> -->
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
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-12"><a href="member-benefits.php" class="btn btn-lg btn-primary btn-block">Know More</a>
                        </div>
                    </div>
                </div> 
                </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
<?php } else{ ?>


                
                <form role="form" enctype="multipart/form-data" action="class/profile.php" method="POST">
                <div class="row">
                
                <div class="profile-header-container col-md-4">   
                  <div class="profile-header-img">
                  <?php if($user['profile'] != ""): ?>
                    <div id='profile-img'>
                    </div>
                    <a href="class/profile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                        <div class="rank-label-container">
                        <div class="uploadWrapper">
                        <input display type='file' id='getval' name="image"  onchange="readURL(event)" />
                          <p>Upload</p>
                      </div>
                 <!--  <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/>
                    <span style="cursor: pointer;" class="label label-default rank-label profile-img">Upload</span> -->
                </div>
                          <!-- <img class="img-circle profile-img" id="profile-img" src="UploadImage/<?=$user['profile'];?>" alt="Profile-image"/> -->
                          
                          <?php else: ?>
                            <div id='profile-img'></div>

                            
                        <!-- <img src="img/profile.png" alt="Profile-image" class="img-circle profile-img"> -->
                        <a href="class/profile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                        <div class="rank-label-container">

                  <input display type='file' id='getval' name="image"  onchange="readURL(event)" />
                  
                 <!--  <input style="display: none;" id="upload-btn" type="file"  class="field-long" name="image"/>
                    <span style="cursor: pointer;" class="label label-default rank-label profile-img">Upload</span> -->
                </div>
                  <?php endif; ?>
                <!-- badge -->
                
            </div>
        </div>
                <div class="col-md-8">
                  <h2><?php echo $user['FirstName']; ?> <?php echo $user['LastName']; ?></h2>
                  <span><h6>(Memebership id: Not Yet a Member)</h6></span><br>
                  <?php if($user['profile'] != ""): ?>
                  <a onClick="return confirm('Are You Sure ?');" title="Delete" href="class/profile.php?deleteid=<?=$user['ID']?>">Remove Pic</a>
                   <?php endif; ?>
                  <input type="submit" value="Save"  name="role_update" class="btn btn-primary pull-right save-btn"/>
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
                            <select 
                            style="cursor: not-allowed;border-color: #f006;" disabled="true" class="form-control" id="groupname" name="groupname" value ="<?php echo $user['groupname']; ?>" required readonly= "true" data-toggle="tooltip" title="Become a Member To Update this Information">
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
                          <select style="cursor: not-allowed;border-color: #f006;" class="form-control" id="sel1" name="Gender" value ="<?php echo $user['Gender']; ?>" required disabled="true"  readonly= "true" data-toggle="tooltip" title="Become a Member To Update this Information">
                            <option name="Gender" value="">Select Gender</option>
                            <option name="Gender" value="Male">Male</option>
                            <option  name="Gender" value="Female">Female</option>
                          </select>
                      </div>
                  </div>
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
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                 <label>Contact Number</label>
                  <input style="cursor: not-allowed;border-color: #f006;" type="number" name="ContactNumber" id="ContactNumber" value ="<?php echo $user['ContactNumber']; ?>" class="form-control input-lg" placeholder="Enter Your Contact Number" tabindex="4" disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information" required>
                </div>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
               <label>Date Of Birth</label>
                <input style="cursor: not-allowed;border-color: #f006;" type="date" name="DOB" id="date" value ="<?php echo $user['DOB']; ?>" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="5" required disabled="true" data-toggle="tooltip" title="Become a Member To Update this Information">
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
          <div class="col-xs-12 col-sm-6 col-md-6 save-mob-btn">
          <input type="submit" value="Save"  name="memberupdate" class="btn btn-primary pull-right btn-block"/>
        </div>
        </div>
    
        </form>
         
                </div>
            
                <div class="col-xs-12 col-md-6 verticalLine" style="height: 615px;">
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
      <?php }?>
                         
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
  // $('.profile-img').click(function()
  //   { $('#upload-btn').trigger('click');
    
  // });
  
    function readURL(event){
     var getImagePath = URL.createObjectURL(event.target.files[0]);
     $('#profile-img').css('background-image', 'url(' + getImagePath + ')');
    }


</script>

