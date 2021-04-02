<?php 
require 'Model/model.php';
$data=showData($_SESSION['id']);

$name = $data["Name"];
$id = $data["ID"];
$shift = $data["Shift"];
$email = $data["Email"];
$mobile_number = $data["Mobile Number"];
$address = $data["Address"];
$category = $data["Category"];
$gender = $data["Gender"];
$dob = $data["Date of Birth"];
$image = $data["Image"];
?>