<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    </head>
    <body>
        <div id="loginbox">    

            <form  method="post" action="class/adminlogin.php" id="login-form" class="form-vertical" >                 
         <div class="control-group normal_text"> <h3><img src="img/1.png" alt="Logo" /> <br> Admin Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>                                  <input type="text" class="form-control" id="username" name="email" placeholder="Enter your email address" required></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                  
                        </div>
                    </div>
                </div>
                <div class="form-actions">

                    <span class="pull-right"> <button type="submit" id="btn-login" class="btn btn-success btn-block">Login</button>
                              
                   </div>
            </form> <a href="adminsignup.php"> <button class="btn btn-primary btn-block">Admin Signup</button></a>
            </div>
            <div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; The BigBeachMarathon Admin. </div>
</div>
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    toastr.options = {
  "positionClass": "toast-bottom-center"
    }
   
<?php if (isset($_SESSION['Adminsign_info'])) { ?>
   toastr.info('Plzz Wait Till Ur E-Mail Gets Activated ',{timeOut: 5000});
    <?php unset($_SESSION['Adminsign_info']); } ?>

<?php if (isset($_SESSION['AdminLogin_error'])) { ?>
    toastr.error('plz check ur inputs!!!', 'Not Yet Activated!..',{timeOut: 5000});
    <?php unset($_SESSION['AdminLogin_error']); } ?>

    <?php if (isset($_SESSION['Adminsign_success'])) { ?>
    toastr.success('Ur Registration Has Done Succesfully!', 'Thanks!!!', 'Big Beach Marathon Says',{timeOut: 5000});
   // toastr.error('Signup Error', 'Register Error',{timeOut: 5000});
    <?php unset($_SESSION['Adminsign_success']); } ?>

<?php if (isset($_SESSION['Adminsign_error'])) { ?>
    toastr.error('plz check ur inputs!!!', {timeOut: 5000});
    <?php unset($_SESSION['Adminsign_error']); } ?>

 });
  
</script>
        
        <!-- <script src="js/jquery.min.js"></script> -->  
        <!-- <script type="text/javascript" src="js/matrix.login.js"></script> --> 
    </body>

</html>
