<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i> Update Student <small>Update Student</small></h1>
<ol class="breadcrumb">
    <li><a href="dashboard.php?page=dashboard2"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="dashboard.php?page=all-students"><i class="fa fa-users"></i> All Student</a></li>
    <li class="active"><i class="fa fa-pencil-square-o"></i> Update Student</li>
</ol>
<?php
$id = base64_decode($_GET['id']);
$db_data = mysqli_query($link, "SELECT * FROM `student_info` WHERE `id` = '$id'");
$db_row = mysqli_fetch_assoc($db_data);

if(isset($_POST['update-student'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $city = $_POST['city'];
    $pcontact = $_POST['pcontact'];
    
    
    $query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`class`='$class',`city`='$city',`p_contact`='$pcontact' WHERE `id` = '$id'";
    $result = mysqli_query($link, $query);
    if($result){
        header('location: dashboard.php?page=all-students');
    }    
}
?>


<div class="row">
    <div class="col-sm-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" placeholder="Student's Name" id="name" class="form-control" required="" value="<?= $db_row['name'] ?>" />
            </div>
            
            <div class="form-group">
                <label for="role">Student Roll</label>
                <input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{10}" required="" value="<?= $db_row['roll'] ?>" />
            </div>
            
            <div class="form-group">
                <label for="class">Class</label>
                <select id="class" class="form-control" name="class" required="" >
                    <option value="">Select</option>
                    <option <?php echo $db_row['class']=='1st' ? 'selected=""':'' ; ?> value="1st">1st</option>
                    <option <?php echo $db_row['class']=='2nd' ? 'selected=""':'' ; ?> value="2nd">2nd</option>
                    <option <?php echo $db_row['class']=='3rd' ? 'selected=""':'' ; ?> value="3rd">3rd</option>
                    <option <?php echo $db_row['class']=='4th' ? 'selected=""':'' ; ?> value="4th">4th</option>
                    <option <?php echo $db_row['class']=='5th' ? 'selected=""':'' ; ?> value="5th">5th</option>
                    <option <?php echo $db_row['class']=='6th' ? 'selected=""':'' ; ?> value="6th">6th</option>
                    <option <?php echo $db_row['class']=='7th' ? 'selected=""':'' ; ?> value="7th">7th</option>
                    <option <?php echo $db_row['class']=='8th' ? 'selected=""':'' ; ?> value="8th">8th</option>
                    <option <?php echo $db_row['class']=='9th' ? 'selected=""':'' ; ?> value="9th">9th</option>
                    <option <?php echo $db_row['class']=='10th' ? 'selected=""':'' ; ?> value="10th">10th</option>
                    
                </select>
            </div>
            
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" placeholder="City" id="city" class="form-control" required="" value="<?= $db_row['city'] ?>" />
            </div>
            
            <div class="form-group">
                <label for="pcontact">Parent's Contact</label>
                <input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[1|4|5|6|7|8|9][0-9]{8}" required="" value="<?= $db_row['p_contact'] ?>" />
            </div>
            
            
            <div class="form-group">
                <input type="submit" value="Update Student" name="update-student" class="btn btn-primary pull-right"/>
            </div>
            
        </form>
    </div>
</div>