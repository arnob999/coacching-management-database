<?php 

$course_name = $_POST['cname'];
$course_trainer = $_POST['c_trainer'];
$course_price = $_POST['cprice'];
$course_duration = $_POST['cduration'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
$insert_query = "INSERT INTO course (c_name,c_price,c_duration,c_trainer) VALUES 
('$course_name',$course_price,$course_duration,$course_trainer)";
mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/DBMSProject/allcourse.php");
mysqli_close($db);

?>