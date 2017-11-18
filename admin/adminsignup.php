<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin Signup</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">    

            <form  method="post" action="class/adminsignup.php"  class="form-vertical" >
           <div class="control-group normal_text"> <h3><img src="img/1.png" alt="Logo" /> <br> Admin Signup</h3></div>
                 <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>                                  <input type="
                            text" class="form-control" id="Username" name="Username" placeholder="Username" required></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><select style="" class="form-control" id="Gender" name="Gender"  >
                            <option name="" value="">Select Gender</option>
                            <option name="Gender" value="Male">Male</option>
                            <option  name="Gender" value="Female">Female</option>
                          </select></div>
                    </div>
                </div>
               
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span> <input type="
                            text" class="form-control" id="email" name="email" placeholder="E-Mail" required></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                  
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control"  id="confirmpassword" name="confirmpassword" placeholder=" Confirm Password" required>
                                  
                        </div>
                    </div>
                </div> 
                
                <div class="form-actions">

                    <span class="pull-right"><button type="submit" id="btn-signup" name="btn-signup" class="btn btn-success btn-block">Admin Signup</button>
                              
                   </div>
            </form>  <a href="index.php"> <button class="btn btn-primary btn-block">Admin Login</button></a>
            </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>

