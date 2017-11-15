<?php
// session_start();
include("class/auth.php");
$user = include("class/getuser.php");
include("adminheader.html");
//include_once 'class/auth.php';
?>



        <div class="container">
          <div class="row">
          <div class="col-md-12 well">
            <div class="col-md-12">
                    <h2>Edit profile</h2>
                    <hr class="">
               <div>  <a href="class/adminprofile.php?ID=<?php echo $row["ID"]; ?>" class="link" onClick="return confirm('Are You Sure ?');"></a>
                  <h2>Profile Pic</h2>   
                </div>
            </div>
                <form role="form" enctype="multipart/form-data" action="class/adminprofile.php" method="POST">
                    <?php if($user['profile'] != ""): ?>
                                                      <img style="width: 10%;" src="img/<?=$user['profile'];?>" alt="Profile-image" class="img-circle img-thumbnail"><a onClick="return confirm('Are You Sure ?');" title="Delete" href="class/adminprofile.php?deleteid=<?=$user['ID']?>">Remove Pic</a>

                                                      <?php else: ?>
                                          <img src="img/profile.png" alt="Profile-image" class="img-circle img-thumbnail">
                                          <?php endif; ?>
                                      <input type="file"  class="field-long" name="image"/> 
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Username</label>
                                 <input type="text" name="Username" id="Username" class="form-control input-lg" placeholder="First Name" tabindex="1"  value ="<?php echo $user['Username']; ?>" >
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
                      
                    </div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <label for="">Sex</label>
                          <select style="" class="form-control" id="Gender" name="Gender" value ="<?php echo $user['Gender']; ?>" required>
                            <option  value="<?php echo $user['Gender']; ?>">Select Gender</option>
                            <option name="Gender" value="Male">Male</option>
                            <option  name="Gender" value="Female">Female</option>
                          </select>
                      </div>
                  </div>
                 
            </div>
              <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">

                        <li>
                      <input type="submit" value="Save"  name="memberupdate" class="btn btn-success btn-block btn-lg"/>
                    </li></div>
                        
                    </div>
                </form>
                <h2 class="form-signin-heading">Reset Password</h2>
 <form  name="frmReset" id="frmReset" method="post" action="class/adminprofile.php"  onSubmit="return validate_password_reset();">
 <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>New Password</label>
                                 <input name="password" type="password" class="form-control" placeholder="Enter New Pass.." required>
                            </div>
                        </div></div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label>Confirm Password</label>
                                  <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Ur Password.." required>
                            </div>
                        </div></div>
                         <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                             <button class="btn btn-success btn-block" name="resetpassword" id="resetpassword" type="submit">Submit Password</button>
                            </div>
                        </div></div>
      </form>
      </div> </div></div>  
<?php
include("adminfooter.html")
?>

