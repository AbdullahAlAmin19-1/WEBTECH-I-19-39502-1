<?php 
require '../Model/model1.php';
$data=showData1('id');
echo $_Get['id'];
$name = $data["Name"];
$id = $data["Id"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile_number = $data["Mobile Number"];
$address = $data["Address"];
$category = $data["Category"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$image = $data["Image"];

echo $_Get['id'];
require '../EditEym1.php';
?>