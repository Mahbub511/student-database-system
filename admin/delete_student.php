<?php
require_once './dbconn.php';
$id = base64_decode($_GET['id']);

mysqli_query($link, "DELETE FROM student_info WHERE id = '$id'");

header("location: dashboard.php?page=all-students");

?>