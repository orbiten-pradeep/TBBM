<?php
ob_start();
session_start();
if (isset($_SESSION['firstname'])!="") {

 header("Location: ../index.php");

}
include("html/header.html");
require('class/dbconnect.php');
?>

<?php
  if (isset($_GET["email"]) && isset($_GET["active_code"])) {
    $email = $DBcon->real_escape_string($_GET["email"]);
    $active_code = $DBcon->real_escape_string($_GET["active_code"]);
    $data = $DBcon->query("SELECT ID FROM users WHERE email='$email' AND active_code ='$active_code'");
        if (($data-> num_rows >0) && isset($_POST["reset-password"])) {
             $password = $_POST['password'];
             $hashed_password = password_hash($password, PASSWORD_BCRYPT);
              $DBcon->query("UPDATE users SET password = '$hashed_password', active_code=' ',Status ='1' WHERE email='$email' ");
               $_SESSION['password_success'] = "Password is reset successfully!..";
               unset($_SESSION['password_error']);
          }   else {
            
               //$_SESSION['password_error'] = "Password is not updated!";
              // header("Location: changepass.php");
          }
} 
  else {
header("Location: join.php");
exit();

    }
?>
<script>
function validate_password_reset() {
  if((document.getElementById("password").value == "") && (document.getElementById("confirm_password").value == "")) {
    document.getElementById("validation-message").innerHTML = "Please enter new password!"
    return false;
  }
  if(document.getElementById("password").value  != document.getElementById("confirm_password").value) {
    document.getElementById("validation-message").innerHTML = "Both password should be same!"
    return false;
  }
  
  return true;
}
</script>

<style type="text/css">
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
</style>

<section class="x-services ptb-100 gray-bg">
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
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                      <div class="well">
                          
<form  name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">

 <h2 class="form-signin-heading">Reset Password</h2>
<h1>Reset Password</h1>
  <?php if(!empty($success_message)) { ?>
  <div class="success_message"><?php echo $success_message; ?></div>
  <?php } ?>

  <div id="validation-message">
    <?php if(!empty($error_message)) { ?>
  <?php echo $error_message; ?>
  <?php } ?>
  </div>

        <div class="form-group user-name">

   
    <input name="password" type="password" class="form-control" placeholder="Enter New Pass.." required>


  </div>

 <div class="form-group user-name">

   
    <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Ur Password.." required>


  </div>

  <br />

        <button class="btn btn-success btn-block" name="reset-password" id="reset-password" type="submit">Submit Password</button>
 Or
        <a class="btn btn-lg btn-primary btn-block" href="join.php">Login</a>

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

<?php
include("html/footer.html")
?>
