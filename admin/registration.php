
<?php
    if(isset($_POST['register'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $username = $_POST['username'];
       $password =  $_POST['password'];
       $c_password = $_POST['c_password'];
       
       $photo= explode('.', $_FILES['photo']['name']);
       $photo = end($photo);
       $photo_name = $username.'.'.$photo;
       
       $input_error = array();
//       added feature
       if(empty($name)){
           $input_error['name'] = "Name is Required";
       }
       if(empty($email)){
           $input_error['email'] = "E-mail is Required";
       }
       if(empty($username)){
           $input_error['username'] = "Username is Required";
       }
       if(empty($password)){
           $input_error['password'] = "Password is Required";
       }
       if(empty($c_password)){
           $input_error['c_password'] = "Confirm your Password";
       }
       echo count($input_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

  </head>
  <body>
      <div class="container">
          <h1>User Registration Form</h1>
          <hr />
         
          <div class="row">
              <div class="col-md-12">
                  <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group">
                          <label for="name" class="control-label col-sm-1">Name</label>
                          <div class="col-sm-4">
                              <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your Name" value="<?php if (isset($name)){echo $name;} ?>" />
                          </div>
                          <label class="error"> <?php if(isset($input_error['name'])){echo $input_error['name'];}?> </label>
                      </div>
                      <div class="form-group">
                          <label for="email" class="control-label col-sm-1">E-mail</label>
                          <div class="col-sm-4">
                              <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your E-mail" value="<?php if (isset($email)){echo $email;} ?>" />
                          </div>
                          <label class="error"> <?php if(isset($input_error['email'])){echo $input_error['email'];}?>
                      </div>
                      <div class="form-group">
                          <label for="username" class="control-label col-sm-1">Username</label>
                          <div class="col-sm-4">
                              <input class="form-control" id="username" type="text" name="username" placeholder="Enter Your Username" value="<?php if (isset($username)){echo $username;} ?>" />
                          </div>
                          <label class="error"> <?php if(isset($input_error['username'])){echo $input_error['username'];}?>
                      </div>
                      <div class="form-group">
                          <label for="password" class="control-label col-sm-1">Password</label>
                          <div class="col-sm-4">
                              <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your Password" value="<?php if (isset($password)){echo $password;} ?>" />
                          </div>
                          <label class="error"> <?php if(isset($input_error['password'])){echo $input_error['password'];}?>
                      </div>
                      <div class="form-group">
                          <label for="c_password" class="control-label col-sm-1">Confirm Password</label>
                          <div class="col-sm-4">
                              <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Confirm Your Password" value="<?php if (isset($c_password)){echo $c_password;} ?>" />
                          </div>
                          <label class="error"> <?php if(isset($input_error['c_password'])){echo $input_error['c_password'];}?>
                      </div>
                      <div class="form-group">
                          <label for="photo" class="control-label col-sm-1">Photo</label>
                          <div class="col-sm-4">
                              <input id="photo" type="file" name="photo" />
                          </div>
                      </div>
                      <div class="col-sm-4 col-sm-offset-4">
                          <input type="submit" value="Register" name="register" class="btn btn-primary" />
                      </div>
                  </form>
              </div>
          </div>
          <br />
          <br />
          <p>Already have an account? Then please <a href="login.php">Log In</a></p>
          <hr />
          <footer>
              <p>Copyright &copy; 2020 All Rights Reserved</p>
          </footer>
      </div>
  </body>
</html>
