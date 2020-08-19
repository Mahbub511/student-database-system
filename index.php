<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student Data Management System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
      <div class="container">
          <br />
          <a class="btn btn-primary pull-right"href="admin/login.php">Log In</a>
          <br />
          <br />
          <h1 class="text-center">Welcome to Students Data Management System</h1>
          <hr />
          
          <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                  <form action="" method="POST">
              <table class="table table-bordered">
                  <tr>
                      <td colspan="2" class="text-center"><label>Student Information</label></td>
                  </tr>
                  <tr>
                      <td><label for="choose">Choose Class</label></td>
                      <td>
                          <select class="form-control" id="choose" name="choose">
                              <option value="">Select</option>
                              <option value="1">1st</option>
                              <option value="2">2nd</option>
                              <option value="3">3rd</option>
                              <option value="4">4th</option>
                              <option value="5">5th</option>
                              <option value="5">6th</option>
                              <option value="5">7th</option>
                              <option value="5">8th</option>
                              <option value="5">9th</option>
                              <option value="5">10th</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td><label for="roll">Roll No</label></td>
                      <td><input class="form-control" type="text" name="roll" placeholder="Roll" /></td>
                  </tr>
                  <tr>
                      <td class="text-center" colspan="2"><input class="btn btn-default" type="submit" value="Show Info" name="show_info"</td>
                  </tr>
              </table>
          </form>
              </div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


