<?php 
require 'Model/model1.php';
$data=showData($_SESSION['id']);

$id = $data["Id"];
$name = $data["Name"];
$user_name = $data["User Name"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile = $data["Mobile Number"];
$address = $data["Address"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
?>