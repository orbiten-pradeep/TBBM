<?php
session_start();
include("html/header.html");
?>
<style type="text/css">
    /*.sticky-nav{
        display: none;
    }*/
    .navbar-default{
      background-color: #3CAFC4;
    }
  label{
    float: left;
  }
.section-title{
  margin-top: 50px;
}
.contact-form form button {
background-color: #2BBFD9 !important;
border-color: #0D9CB7 !important;
border-radius: 0 !important;

}
.contact-form form button:hover{
background-color: #0d9cb7 !important;
border-color: #0d9cb7 !important;
}
.btn-forg:hover{
background-color: #e2e2e2 !important;
border-color: #313131 !important;
color: #313131 !important;
}
.login-form-padding{
  padding-bottom: 40px;
}
.contact-form h2 {
    line-height: 36px;
    margin-bottom: 5px;
}
@media screen and (max-width: 600px){
  .navbar-default {
    background: #3CAFC4 !important;
    padding: 10px 0;
    border-bottom: none;
}
.mob-login{
  display: block !important;
}
.desk-login{
  display: none;
}
}
.mob-login{
  display: none;
}
}
</style>

<section class="x-services ptb-100 gray-bg">
<section class="section-title">
        <div class="container text-center">
            <!-- <h2>Login/Signup</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> 
            <h3>join - Sign up/login to avail exciting offers<br> on your running merchandise</h3>-->
        </div>
    </section>
    <!-- <center><h2>Sign Up/ Login To Avail Exciting Offers On Our Running Merchandise And Marathons.</h2></center> -->
<section class="contact-form ptb-100" style="padding-top: 25px;">
    <div class="container text-center">
        <div class="row">
            <div id="" class="">
      <div class="">
          <div class="">
             <!--  <h4 class="" id="">Welcome To The Big Beach Marathon</h4> -->
          </div>
          <div class="">
              <div class="row">
                <div class="col-xs-12 col-sm-6 mob-login">
                    <h2 style="font-size: 19px;">Already a member? Have you been out of touch with us for a bit?</h2>
                    <p style="font-size: 15px;"> Or do you just want to log in on a new device? Either way here’s how you get back in touch with us!</p>
                      <div class="well login-form-padding">
                          <form  method="post" action="class/login.php" id="login-form">
                              <!-- <?php
                                if (isset($_SESSION['login_error'])) {
                                 echo $_SESSION['login_error'];
                                }
                              ?> -->
                              <h2>Login</h2>
                              <div class="form-group">
                                  <label for="username" class="control-label" style="display: none;">Email</label>
                                  <input type="text" class="form-control" id="username" name="email" placeholder="Enter your email address" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <button type="submit" name="btn-login" id="btn-login" class="btn btn-success btn-block">Login</button>
                              <a href="forgotpass.php" style="float: right;margin-top: 10px;">Forgot Password?</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <h2 style="font-size: 19px;">Want to join us and get your fitness on track?</h2>
                    <p style="font-size: 15px;"> Our simple sign up process gets you connected with us in a few easy steps.<br><span style="color: #313131;font-weight: 400;">So, what are you waiting for?</span> Go ahead and  joinus!</p>
                      <div class="well">
                      <form id="loginForm" method="POST" action="class/signup.php">
                             <!--  <?php
                                if (isset($_SESSION['sign_error'])) {
                                 echo $_SESSION['sign_error'];
                                }
                              ?> -->
                                <h2>Signup</h2>
                              <div class="form-group">
                                  <label for="username" class="control-label" style="display: none;">Firstname</label>
                                  <input type="text" class="form-control" id="username" name="firstname" value="" required placeholder="Enter your First Name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="lastname" class="control-label" style="display: none;">Lastname</label>
                                  <input type="text" class="form-control" id="password" name="lastname" required placeholder="Enter your Last Name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Email ID</label>
                                  <input type="email" class="form-control" id="email" name="email" required title="Please enter your password" placeholder="Enter your Email">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" title="Please enter your password" placeholder="Enter your Password">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Confirm Password</label>
                                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required="" title="Please enter your password" placeholder="Enter Confirm your Password">
                                  <span class="help-block"></span>
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block" name="btn-signup">Register</button>
                          </form>
                          
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 desk-login">
                    <h2 style="font-size: 19px;">Already a member? Have you been out of touch with us for a bit?</h2>
                    <p style="font-size: 15px;"> Or do you just want to log in on a new device? Either way here’s how you get back in touch with us!</p>
                      <div class="well login-form-padding">
                          <form  method="post" action="class/login.php" id="login-form">
                              <!-- <?php
                                if (isset($_SESSION['login_error'])) {
                                 echo $_SESSION['login_error'];
                                }
                              ?> -->
                              <h2>Login</h2>
                              <div class="form-group">
                                  <label for="username" class="control-label" style="display: none;">Email</label>
                                  <input type="text" class="form-control" id="username" name="email" placeholder="Enter your email address" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <button type="submit" name="btn-login" id="btn-login" class="btn btn-success btn-block">Login</button>
                              <a href="forgotpass.php" style="float: right;margin-top: 10px;">Forgot Password?</a>
                          </form>
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
<!-- .contact-form-->

<!-- <section class="map-section">
    <div id="googleMap"></div>
</section> -->
    <!--.map-section-->

<?php
include("html/footer.html")
?>
