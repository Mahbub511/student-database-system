<?php
require_once './dbconn.php';
session_start();

if(isset($_SESSION['user_login'])){
    header('location: dashboard.php');
}
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password =  $_POST['password'];
    
    
    $username_check = mysqli_query($link, "SELECT * FROM `user` WHERE `username` = '$username'");
    if(mysqli_num_rows($username_check) > 0){
        $row = mysqli_fetch_assoc($username_check);
        
        if($row['password'] == md5($password)){
            if($row['status'] == 'active'){
                $_SESSION['user_login'] = $username;
                header('location: dashboard.php');
            } else {
                $status_inactive = "Your status is Inactive.";
            }
        } else {
            $wrong_password = "Invalid Password";
        }
    } else {
        $username_not_found = "Invalid Username";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

  </head>
  <body>
      <div class="container">
          <h1 class="text-center">Student Data Management System</h1>
          <hr />
          <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                  <h2 class="text-center">Admin Login Form</h2>
                  <form action="login.php" method="POST">
                      <div>
                          <input type="text" placeholder="Username" name="username" required="" class="form-control" value="<?php if(isset($username)){echo $username;} ?>"/>
                      </div>
                      <div>
                          <input type="password" placeholder="Password" name="password" required="" class="form-control" value="<?php if(isset($password)){echo $password;} ?>" />
                      </div>
                      <br />
                      <div>
                          <input type="submit" value="Log In" name="login" class="btn btn-info pull-right" />
                      </div>                     
                  </form>
              </div>
          </div>
          <br />
          <?php if(isset($username_not_found)){ echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$username_not_found.'</div>';} ?>
          <?php if(isset($wrong_password)){ echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$wrong_password.'</div>';} ?>
          <?php if(isset($status_inactive)){ echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$status_inactive.'</div>';} ?>
      </div>
  </body>
</html>
