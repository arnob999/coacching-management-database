<?php
$trainer_name = $_POST['tname'];
$trainer_number = $_POST['tnumber'];
$trainer_dob = $_POST['tdob'];
$trainer_address = $_POST['taddress'];

$db = mysqli_connect("localhost","root","","creative_coaching") or die(mysqli_error());
$insert_query = "INSERT INTO trainer(t_name,t_number,t_dob,t_address) VALUES 
('$trainer_name',$trainer_number,'$trainer_dob','$trainer_address')";
//query for data inseritng 
mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/DBMSProject/alltrainer.php");
mysqli_close($db);
?>