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
                          <input type="text" placeholder="Username" name="username" required="" class="form-control" />
                      </div>
                      <div>
                          <input type="password" placeholder="Password" name="password" required="" class="form-control" />
                      </div>
                      <br />
                      <div>
                          <input type="submit" value="Log In" name="login" class="btn btn-info pull-right" />
                      </div>                     
                  </form>
                
              </div>
          </div>
      </div>
  </body>
</html>
